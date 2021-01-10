@extends('front.layouts.master')
@section('title',$style->title)
@section('content')
<div class="title-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="title-wrapper text-center">
                            <h1>Page</h1>
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb themeix-breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('front.home',app()->getLocale())}}">home</a></li>
                                    <li class="breadcrumb-item active"><a href="style-guide">{{$style->slug}}</a></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
 <!-- Start Main -->
 <div class="main-section ptd100">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 m-auto">
                        <h2>Business Pilot Floating Wind Turbines With.</h2>
                        <p>pellentesque, vitae tortor lacus, a malesuada lectus ac dis. Quis lobortis wisi dolor tincidunt risus, congue condimentum sed potenti dignissim vivamus id, quis justo sit primis dolor aliquam, sit sapien mollis semper duis sed faucibus. Vestibulum id in, pede viverra. Urna quis vel varius. Sit lorem, velit vitae nunc elit dolore sed rhoncus, ullamcorper scelerisque cursus lectus ligula in aliquam.</p>
                        <p>Nonummy nisl lacus lacinia sed sociis egestas, purus hymenaeos. Rutrum erat ultricies natoque ante, mauris velit, lacinia libero wisi, sit interdum sed et. Turpis sit enim, lorem vestibulum sodales convallis ligula et hac. Cursus tortor ultricies. Elementum felis ut mauris venenatis quam, convallis vestibulum felis phasellus imperdiet nec urna, dignissim lorem donec. Convallis nec ut non porta in amet, eu donec. Suscipit nulla ut, risus augue purus erat. Phasellus libero, risus quisque aliquam ultrices Nonummy nisl lacus lacinia sed sociis egestas, purus hymenaeos. Rutrum erat ultricies natoque ante, mauris velit, lacinia libero wisi, sit interdum sed et. Turpis sit enim, lorem vestibulum sodales convallis ligula et hac. Cursus tortor ultricies. Elementum felis ut mauris venenatis quam, convallis vestibulum felis phasellus imperdiet nec urna, dignissim lorem donec. Convallis nec ut non porta in amet, eu donec. Suscipit nulla ut, risus augue purus erat. Phasellus libero, risus quisque aliquam ultrices</p>
                        <h2>Table Content Layout</h2>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Username</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>Mark</td>
                                    <td>Otto</td>
                                    <td>@mdo</td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Jacob</td>
                                    <td>Thornton</td>
                                    <td>@fat</td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Larry</td>
                                    <td>the Bird</td>
                                    <td>@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                        <h2>Business Pilot Floating Wind Turbines With.</h2>
                        <div class="row">
                            <div class="col-md-8">
                                <p>Nonummy nisl lacus lacinia sed sociis egestas, purus hymenaeos. Rutrum erat ultricies natoque ante, mauris velit, lacinia libero wisi, sit interdum sed et. Turpis sit enim, lorem vestibulum sodales convallis ligula et hac. Cursus tortor ultricies. Elementum felis ut mauris venenatis quam, convallis vestibulum felis phasellus imperdiet nec urna, dignissim lorem donec. Convallis nec ut non porta in amet, eu donec. Suscipit nulla ut, risus augue purus erat. Phasellus libero, risus quisque aliquam ultrices</p>
                            </div>
                            <div class="col-md-4">
                                <div class="article-image float-right"><img src="{{asset('front/')}}/images/article-post12.jpg" alt="article image" /></div>
                            </div>
                        </div>
                        <h2>Business Pilot Floating Wind Turbines With.</h2>
                        <p>pellentesque, vitae tortor lacus, a malesuada lectus ac dis. Quis lobortis wisi dolor tincidunt risus, congue condimentum sed potenti dignissim vivamus id, quis justo sit primis dolor aliquam, sit sapien mollis semper duis sed faucibus. Vestibulum id in, pede viverra. Urna quis vel varius. Sit lorem, velit vitae nunc elit dolore sed rhoncus, ullamcorper scelerisque cursus lectus ligula in aliquam.</p>
                        <p>Nonummy nisl lacus lacinia sed sociis egestas, purus hymenaeos. Rutrum erat ultricies natoque ante, mauris velit, lacinia libero wisi, sit interdum sed et. Turpis sit enim, lorem vestibulum sodales convallis ligula et hac. Cursus tortor ultricies. Elementum felis ut mauris venenatis quam, convallis vestibulum felis phasellus imperdiet nec urna, dignissim lorem donec. Convallis nec ut non porta in amet, eu donec. Suscipit nulla ut, risus augue purus erat. Phasellus libero, risus quisque aliquam ultrices Nonummy nisl lacus lacinia sed sociis egestas, purus hymenaeos. Rutrum erat ultricies natoque ante, mauris velit, lacinia libero wisi, sit interdum sed et. Turpis sit enim, lorem vestibulum sodales convallis ligula et hac. Cursus tortor ultricies. Elementum felis ut mauris venenatis quam, convallis vestibulum felis phasellus imperdiet nec urna, dignissim lorem donec. Convallis nec ut non porta in amet, eu donec. Suscipit nulla ut, risus augue purus erat. Phasellus libero, risus quisque aliquam ultrices</p>
                        <div class="themeix-embed embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/8_ZaGq7VNzo"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main -->
@endsection