<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return [
            'NIS' => 3103120191,
            'Name' => 'Reva Dwi Fatharani',
            'Phone' => '08122233455',
            'Class' => 'XII RPL 6'
        ];
    }
}
