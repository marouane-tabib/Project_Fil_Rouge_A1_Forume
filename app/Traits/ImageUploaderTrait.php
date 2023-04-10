<?php

namespace App\Traits;

trait ImageUploaderTrait
{
    public function uploadImage($file, string $parent)
    {
        if ($file) {
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('storage/Image/'.$parent.'/'.date('m-Y')), $filename);
            return date('m-Y').'/'.$filename;
        }
    }
}
