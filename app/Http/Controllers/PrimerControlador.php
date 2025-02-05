<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrimerControlador extends Controller
{
    function index() {
         return view('contact', ['name' => 'Primer Controlador']);
    }

    function otro($post) {
        echo $post;
    }
}
