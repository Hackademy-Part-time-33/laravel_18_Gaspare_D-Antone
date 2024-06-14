<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        return view('articles.index');

    }

    public function create(){
        return view('articles.create');

    }

    public function edit(){
        return view('articles.edit');

    }

    public function show(){
        return view('articles.show');

    }
    
}
