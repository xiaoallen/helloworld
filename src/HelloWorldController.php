<?php

namespace Allen\HelloWorld;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HelloWorldController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $message = 'Fuck World';
        return view('HelloWorld::welcome', compact('message'));
    }
}
