<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title="Medium";
        return view('pages.index',compact('title'));
    }
    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data=[
            'title'=>'Services we Provide',
            'services'=>['Web Design',"programming",'SEO']
        ];
        return view('pages.services')->with($data);
    }
}
