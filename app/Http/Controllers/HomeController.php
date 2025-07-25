<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function eight() {
        return view('eight');
    }

    public function seven() {
        return view('seven');
    }

    public function six() {
        return view('six');
    }

    public function five() {
        return view('five');
    }

    public function four() {
        return view('four');
    }

    public function three() {
        return view('three');
    }

    public function posts() {
        return view('posts');
    }

    public function users() {
        return view('all-users');
    }

    public function success() {
        return view('success');
    }

    public function TestTwo() {
        return view('test-two');
    }

    public function products() {
        return view('products');
    }
}

