<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class attorneyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function lassiter()
    {
        return view("attorneys.lassiter");
    }

    public function cassinelli()
    {
        return view("attorneys.cassinelli");
    }

    public function collins()
    {
        return view("attorneys.collins");
    }
}
