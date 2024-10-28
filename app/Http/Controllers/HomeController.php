<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        
        //dd($blogs);
        return view('pages.index');
    }
    public function who_we_are()
    {
        
        //dd($blogs);
        return view('pages.who-we-are');
    }
    public function reviews()
    {
        
        //dd($blogs);
        return view('pages.reviews');
    }
    public function success_stories()
    {
        
        //dd($blogs);
        return view('pages.stories');
    }
    public function team()
    {
        
        //dd($blogs);
        return view('pages.team');
    }
    public function student_admission()
    {
        
        //dd($blogs);
        return view('pages.student-admission');
    }
    public function visa_processing()
    {
        
        //dd($blogs);
        return view('pages.visa');
    }
    public function universities()
    {
        
        //dd($blogs);
        return view('pages.index');
    }
    public function courses()
    {
        
        //dd($blogs);
        return view('pages.index');
    }
    public function campus()
    {
        
        //dd($blogs);
        return view('pages.index');
    }
    public function become_agent()
    {
        
        //dd($blogs);
        return view('pages.index');
    }
    public function jobs()
    {
        
        //dd($blogs);
        return view('pages.index');
    }
    public function news()
    {
        
        //dd($blogs);
        return view('pages.blogs');
    }
}
