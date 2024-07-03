<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\User;
use App\Models\Wine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;


class MainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $company = User::find(1);
        $wines = Wine::orderBy('created_at', 'desc')->get();
        $news = Blog::orderBy('created_at', 'desc')->get();

        return view('website.components.main', compact(['company', 'wines', 'news']));
    }

    /**
     * Display a listing of the resource.
     */
    public function about()
    {
        $company = User::find(1);

        return view('website.components.about', compact(['company']));
    }
    
    /**
     * Display a listing of the resource.
     */
    public function wines()
    {
        $wines = Wine::orderBy('created_at', 'desc')->get();

        return view('website.components.wines', compact(['wines']));
    }

    /**
     * Display a listing of the resource.
     */
    public function showWines($id)
    {
        $wine = Wine::find($id);

        return view('website.components.wine', compact(['wine']));
    }

    /**
     * Display a listing of the resource.
     */
    public function gallery()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();

        return view('website.components.gallery', compact(['gallery']));
    }

    /**
     * Display a listing of the resource.
     */
    public function news($id)
    {
        $news = Blog::find($id);

        return view('website.components.news', compact(['news']));
    }


}
