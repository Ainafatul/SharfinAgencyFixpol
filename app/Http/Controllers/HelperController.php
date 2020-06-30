<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HelperController extends Controller
{
    static function uploadImages($folder, $files)
    {
        $images = '';
        $i = 0;
        foreach ($files as $file) {
            $path = $file->storeAs('public/image/' . $folder, Carbon::now()->timestamp . $i . '.' . $file->extension());
            if ($i != 0) $images .= ',';
            $images .= str_replace('public', 'storage', $path);
            $i++;
        }
        return $images;
    }

    static function uploadImage($folder, $file)
    {
        $path = $file->storeAs('public/image/' . $folder, Carbon::now()->timestamp . '.' . $file->extension());
        $images = str_replace('public', 'storage', $path);
        return $images;
    }
}
