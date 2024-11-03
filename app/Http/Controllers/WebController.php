<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index() /* Creating a function that could link to index page*/
    {
        return view('web.index');
    }

    public function aboutus() /* Creating a function that could link to aboutus page*/
    {
        return view('web.aboutus');
    }
    public function contactus() /* Creating a function that could link to contact us page*/
    {
        return view('web.contactus');
    }
    public function menu()
    {
        return view('web.menu'); /* Creating a function that could link to menu page*/
    }

    public function login() /* Creating a function that could link to login page*/
    {
        return view('web.login');
    }

    public function register() /* Creating a function that could link to signup page*/
    {
        return view('web.register');
    }

    public function info() /* Creating a function that could link to signup page*/
    {
        return view('web.info');
    }
}
