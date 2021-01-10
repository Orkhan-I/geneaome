<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
class translatesController extends Controller
{
      public function index(Request $request)
    {
        $files = $this->availableTranslationFiles();
        $file = $request->file ?? $files[1];
        $languages = Config::get('global.languages');
        foreach ($languages as $key => $value) {
            $f = base_path("resources/lang/" . $key . "/$file");
            if(!is_file($f)){
                $contents = file_get_contents(base_path("resources/lang/" . config("app.fallback_locale") . "/$file"));
                file_put_contents($f, $contents);
            }
            $lang[$key] = include($f);
        }

        return view("back.index", compact("files", "file", "lang", 'languages'));
    }


    public function update(Request $request)
    {
        $f = $request->file ?? $this->availableTranslationFiles()[0];
        $languages = Config::get('global.languages');
        foreach ($languages as $k => $v) {
            $n = 0;
            $file = "<?php \n return [\n";
            foreach ($request->key as $key) {
                if (empty($key)) {
                    $n++;
                    continue;
                }
                $file .= "\"" . $this->neatStr($key) . "\" => \"" . $this->neatStr($request[$k][$n]) . "\",\n";
                $n++;
            }
            $file .= "];";
            file_put_contents(base_path('resources/lang/' . $k . "/$f"), $file);
        }
        if($request->file){
            $r = "?file=".$request->file;
        }else{
            $r = "";
        }

        return redirect('/admin/translate/file'.$r)->with('message', 'Yenilənmə əməliyyatı uğurla başa çatdı.');
    }

    public function availableTranslationFiles(){
        $files = $this->listOfFiles("/resources/lang/".config("app.fallback_locale"));

        foreach($files as $key=>$file){
            if($file == "validation.php")
                unset($files[$key]);
        }

        return $files;
    }

    public function create_files(Request $request) {
        $fname = $request->filename;
        $fname_lowered = mb_strtolower(str_replace(array(' ','-','%20'), array('_','_','_'), $fname));
        $ftemplate = "<?php \n return [\n
            '' => '',\n
        ];";
        $languages = Config::get('global.languages');
        foreach($languages as $k => $v){
            file_put_contents(base_path('resources/lang/'.$k.'/'.$fname_lowered.'.php'), $ftemplate);
        }

        return redirect('/admin/translate/file?file='.$fname_lowered.'.php')->with('message', 'New file named '.$fname_lowered.'.php created successfully.');
    }

    function listOfFiles($dir)
    {
        $files = [];

        $helperDir = base_path().$dir;
        if ($dh = opendir($helperDir)) {
            while ($file = readdir($dh)) {
                if (is_file($helperDir.'/'.$file)) {
                    $files[] = $file;
                }
            }
        }

        return $files;
    }

    function neatStr($str)
    {
        if (strlen($str) > 5000) {
            abort(403);
        } // Let Administrator know about this attempt by email!
        return str_replace(['<', '>', '"', '\\', ';'], '', $str);
    }
}
