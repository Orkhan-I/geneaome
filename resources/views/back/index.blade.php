@extends('back.layouts.master')
@section('content')
    <style type="text/css">
        textarea {
            padding: 10px;
            width: 100%;
            border-color: #e4e4e4;
            resize: vertical;
        }

        textarea[readonly=readonly] {
            padding: 10px;
            border-color: #fff;
            resize: none;
        }
    </style>
    @csrf
    <div class="air__utils__heading">
        <h5>
            <span class="mr-3">Translate</span>

            <div class="dropdown d-inline-block mb-2 mr-2">
                <button type="button"
                        class="btn btn-sm btn-light dropdown-toggle"
                        data-toggle="dropdown"
                        aria-expanded="false">
                    {{$file}}
                </button>
                <div class="dropdown-menu"
                     role="menu"
                     x-placement="bottom-start"
                     style="position: absolute; transform: translate3d(0px, 35px, 0px); top: 0px; left: 0px; will-change: transform;">
                    @foreach($files as $f)
                        <?php if ($f == $file) continue; ?>
                        <a class="dropdown-item"
                           href="{{url('/admin/translate/file?file='.$f)}}">{{$f}}</a>
                    @endforeach
                </div>
            </div>


            <button type="button"
                    class="btn btn-sm btn-primary ml-2"
                    onclick="cloneRow()"><i class="fe fe-plus"></i> Add Row</button>
            <button type="button"
                    class="btn btn-sm btn-secondary ml-2"
                    data-toggle="modal"
                    data-target="#fileCreateModal"><i class="fe fe-plus"></i> Add File</button>
            <div class="modal fade"
                 id="fileCreateModal"
                 tabindex="-1"
                 role="dialog"
                 aria-labelledby="exampleModalLabel"
                 style="display: none;"
                 aria-hidden="true">
                <div class="modal-dialog"
                     role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title"
                                id="exampleModalLabel">Create Translation File</h5>
                            <button type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <strong>Please use only file name not extension (ex. use general not general.php)</strong>
                            <form id="formInput"
                                  method="post"
                                  action="/admin/translate/create">
                                @csrf
                                <input type="text"
                                       name="filename"
                                       class="form-control"
                                       id="filename"
                                       required />
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button"
                                    class="btn btn-light"
                                    data-dismiss="modal">Close</button>
                            <button type="button"
                                    class="btn btn-primary"
                                    onClick="return sendModalCreateFile();">Create File</button>
                        </div>

                        <script>
                            function sendModalCreateFile(e) {
                                if(document.getElementById('filename').value !== '') {
                                    document.getElementById('formInput').submit();
                                    return true;
                                } else {
                                    $('#filename').focus()
                                    alert("Filename needed");
                                    return false;

                                }
                            }
                        </script>

                    </div>
                </div>
            </div>

            <button type="button"
                    class="btn btn-success float-right"
                    onclick="$('#form').submit()"><i class="fe fe-save"></i> Save</button>
        </h5>

        @if(session('message'))
            <div class="alert alert-success">{{session('message')}}</div>
        @endif
    </div>

    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="mb-5">
                        <form action
                              method="post"
                              id="form">
                            @csrf
                            <table class="table table-hover nowrap"
                                   id="items">
                                <thead>
                                <tr>
                                    <th>key</th>
                                    <th>English</th>
                                    <th>Azərbaycanca</th>
                                    <th>Turk</th>
                                    <th>Русский</th>
                                </tr>
                                </thead>

                                <tbody>
                                <?php unset($languages[config('app.fallback_locale')]); ?>

                                @foreach($lang[config('app.fallback_locale')] as $key => $value)
                                    <tr>
                                        <td><textarea readonly="readonly"
                                                      name="key[]">{{$key}}</textarea></td>
                                        <td><textarea name="{{config('app.fallback_locale')}}[]">{{$value}}</textarea></td>
                                        @foreach ($languages as $k => $v)
                                            <td><textarea name="{{$k}}[]">{{$lang[$k][$key]}}</textarea></td>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </form>
    <script>
        //var DataTable = $('#items').DataTable({paging: false});
        function cloneRow() {
            var row = $('tbody tr:first').clone();

            row.find("textarea").val("");
            row.find("textarea").removeAttr("readonly");
            $("tbody").prepend(row);
        }
    </script>
@endsection
