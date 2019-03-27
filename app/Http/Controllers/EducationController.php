<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function index()
    {
    	return view('education.home');
    }
    public function course()
    {
    	return view('education.courses');
    }
    public function teachers()
    {
    	return view('education.teachers');
    }
    public function about()
    {
    	return view('education.about');
    }
    public function pricing()
    {
    	return view('education.pricing');
    }
     public function blog()
    {
        return view('education.blog');
    }
     public function contact()
    {
        return view('education.contact');
    }
}
