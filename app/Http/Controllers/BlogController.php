<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use SEO;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::whereStatus('PUBLISHED')
        ->get();

        $title = "Blog | VHDEV";
        $description = "Desenvolvimento de sites e muito mais!";

        SEO::setTitle($title);
        SEO::setDescription($description);

        return view('blog.index', compact('title', 'description', 'posts'));
    }

    public function show(Request $request, $slug) {
        $post = Post::whereStatus('PUBLISHED')
        ->whereSlug($slug)
        ->firstOrFail();

        $title = $post->title . " | VHDEV";
        $description = "Desenvolvimento de sites e muito mais!";

        SEO::setTitle($title);
        SEO::setDescription($description);

        return view('blog.show', compact('title', 'description', 'post'));
    }
}