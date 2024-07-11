<?php

namespace App\Http\Controllers;

use App\Models\Wine;
use Illuminate\Http\Request;
use File;
class WineController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $wines = Wine::orderBy('created_at', 'desc')->get();

        return view('admin.components.wines', compact(['wines']));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $wine = new Wine;
        $wine->name_ge = $request->name_ge;
        $wine->name_en = $request->name_en;
        $wine->descriprion_ge = $request->descriprion_ge;
        $wine->descriprion_en = $request->descriprion_en;
        $wine->color = $request->color;
        $wine->type = $request->type;
        $wine->years = $request->years;
        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/image/', $filename);
            $wine->image = "$filename";
        }
        $wine->save();
        return back();
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $wine = Wine::find($id);
        $wine->name_ge = $request->name_ge;
        $wine->name_en = $request->name_en;
        $wine->descriprion_ge = $request->descriprion_ge;
        $wine->descriprion_en = $request->descriprion_en;
        $wine->color = $request->color;
        $wine->type = $request->type;
        $wine->years = $request->years;
        if ($request->hasfile('image')) {
            $destination = 'assets/image/' . $wine->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('assets/image/', $filename);
            $wine->image = "$filename";
        }
        $wine->update();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $blog = Wine::find($id);
        $blog->delete();
        return back();
    }



    // website

    public function websiteIndex()
    {
        $blogs = Wine::orderBy('created_at', 'desc')->get();

        return view('website.components.blogs', compact(['blogs']));
    }
    public function websiteShow($id)
    {
        $blog = Wine::find($id);

        return view('website.components.blog', compact(['blog']));
    }
}
