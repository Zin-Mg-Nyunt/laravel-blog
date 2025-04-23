<?php

namespace App\Models;

use Illuminate\Support\Facades\File;

    class Blog{
        public static function all(){
            $files=File::files(resource_path("blogs"));
            return array_map(function($file){
                return $file->getContents();
            },$files);
        }
        public static function find($slug){
            $path = resource_path("blogs/$slug.html");
            if (!file_exists($path)) {
                abort(404);
            }
            return cache()->remember("blogs.$slug",now()->addMinutes(2),function() use($path){
               return file_get_contents($path);
            });
        }
    }
?>