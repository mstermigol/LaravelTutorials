<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): view
    {
        $viewData = [];
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact';
        $viewData['email'] = 'migue@gmail.com';
        $viewData['address'] = 'cra 50 #1 - 86';
        $viewData['phoneNumber'] = '123456789';

        return view('home.contact')->with('viewData', $viewData);
    }

    public function about(): view
    {
        $viewData = [];
        $viewData['title'] = 'About us - Online Store';
        $viewData['subtitle'] = 'About us';
        $viewData['description'] = 'This is an about page ...';
        $viewData['author'] = 'Developed by: Miguel Jaramillo';

        return view('home.about')->with('viewData', $viewData);
    }
}
