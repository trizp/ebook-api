<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return[
            'Nis' => 3103120224,
            'Name' => 'Tristan Satria Perdana Hermawan',
            'Phone' => '081229476786',
            'Class' => 'XII RPL 7'
        ];
    }
}
