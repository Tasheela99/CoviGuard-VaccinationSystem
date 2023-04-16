<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsPageController extends Controller
{
    public function newsPage(){
        return view('user.News.news_page');
    }
}
