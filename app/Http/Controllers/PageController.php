<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return '2241720088 Abdul Aziz';
    }
    public function articles($id)
    {
        return 'Halaman artikel dengan id ' . $id;
    }
}
