<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;
use App\Models\News as NewsModel;

class News extends Controller
{
    public $model = null;

    public function __construct()
    {
        $this->model = new NewsModel;
    }

    public function index()
    {
        $news = $this->model->getAllActiveNews();

        return view('modules.news.list',['list' => $news]);
    }

    public function show(Request $request, $url)
    {
        $news = NewsModel::where('url', $url)->first();
        if(!$news) {
            abort(404);
        }
        return view('modules.news.show',['simple' => $news]);
    }


}
