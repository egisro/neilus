<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');

    }
    public function services(){
        $data = array(
            'title' => 'services',
            'services' => ['Web design', 'programing', 'SEO']);
        return view('pages.services')->with($data);
    }
    public function callendar(){
        return view('pages.callendar');

    }
    public function orders(){
        return view('pages.orders');

    }
    public function contacts(){
        return view('pages.contacts');

    }
}
