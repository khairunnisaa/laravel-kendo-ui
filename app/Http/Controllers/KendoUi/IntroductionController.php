<?php

namespace App\Http\Controllers\KendoUi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IntroductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('kendo-ui/introduction/index');
    }
}
