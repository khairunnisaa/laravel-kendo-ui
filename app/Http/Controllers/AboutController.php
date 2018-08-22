<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Riesenia\Kendo\Kendo; 


class AboutController extends Controller
{
    //
    public function index()
    {
        $data['users'] = [
            [
                'name' => 'A',
                'email' => 'a@email.com',
            ],
            [
                'name' => 'B',
                'email' => 'b@email.com',
            ],
        ];
       
        return view('about', $data);
    }
}