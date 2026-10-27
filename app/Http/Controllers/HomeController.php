<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Caregiver;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Berita utama / Featured
        $featuredPost = Post::latest()->first();

        // Berita list samping (seperti gambar 2)
        $recentPosts = Post::latest()->skip(1)->take(5)->get();

        // Kajian/Dawuh Pengasuh
        $caregivers = Caregiver::orderBy('sort_order')->take(4)->get();

        return view('pages.home', compact('featuredPost', 'recentPosts', 'caregivers'));
    }
}