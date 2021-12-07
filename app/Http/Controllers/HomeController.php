<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('pages.Home.index');
    }

    public function about_us()
    {
        return view('pages.about_us');
    }


    public function faq()
    {
        return view('pages.faq');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function testimonial()
    {
        return view('pages.testimonial');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function services_detail()
    {
        return view('pages.services-detail');
    }

    public function projects()
    {
        return view('pages.projects');
    }

    public function project1()
    {
        return view('pages.projects.projects1');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}
