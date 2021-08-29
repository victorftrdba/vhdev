<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SEO;
use App\Post;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::whereStatus('PUBLISHED')
        ->get();

        $title = "Início | VHDEV";
        $description = "Desenvolvimento de sites e muito mais!";

        SEO::setTitle($title);
        SEO::setDescription($description);

        return view('home.index', compact('title', 'description', 'posts'));
    }
}