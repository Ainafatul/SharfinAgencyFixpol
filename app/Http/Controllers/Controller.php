<?php

namespace App\Http\Controllers;

use App\Article;
use App\Property;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use function GuzzleHttp\Promise\all;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    static function getRecommendedProperty()
    {
        return Property::orderBy('updated_at', 'desc')->limit(6)->get();
    }

    static function getLatestProperty()
    {
        return Property::orderBy('created_at', 'ASC')->limit(4)->get();
    }

    static function getLatestArticle()
    {
        return Article::orderBy('created_at', 'ASC')->limit(3)->get();
    }
}
