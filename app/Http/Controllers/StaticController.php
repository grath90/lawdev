<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class StaticController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('index');
    }

    /**public function awards()
    {
        return view('awards');
    }**/

    public function location()
    {
        return view('location');
    }

    /**public function contact()
    {
        return view('contact');
    }**/



}