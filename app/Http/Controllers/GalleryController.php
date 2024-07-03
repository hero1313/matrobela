<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galleries = Gallery::orderBy('created_at', 'desc')->get();

        return view('admin.components.gallery', compact(['galleries']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $gallery = new Gallery;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/image/', $filename);
            $gallery->image = "$filename";
        }
        $gallery->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $gallery = Gallery::find($id);
        if ($request->hasfile('image')) {
            $destination = 'assets/image/' . $gallery->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/image/', $filename);
            $gallery->image = "$filename";
        }
        $gallery->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $gallery = Gallery::find($id);
        $gallery->delete();
        return back();
    }

    // website
    public function websiteIndex()
    {
        $gallery = Gallery::orderBy('created_at', 'desc')->get();

        return view('website.components.gallery', compact(['gallery']));
    }
    public function websiteShow($id)
    {
        $gallery = Gallery::find($id);

        return view('website.components.gallery', compact(['gallery']));
    }
}
