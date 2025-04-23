<?php

namespace App\Models;
    class Blog{
        static function find($slug){
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