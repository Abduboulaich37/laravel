<?php

use Illuminate\Http\Request;

class StaticController extends Controller 
{
    public function index() {
        return view ('welcome');
    }

    public function about() {
        return view ('about');
    }
}