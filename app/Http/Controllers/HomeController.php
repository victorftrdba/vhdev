<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;

class HomeController extends Controller
{
    public function index() {
        $title = "Início | VHDEV";
        $description = "Desenvolvimento de sites e muito mais!";

        SEO::setTitle($title);
        SEO::setDescription($description);

        return view('home.index', compact('title', 'description'));
    }
}