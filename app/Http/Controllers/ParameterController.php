<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ParameterController extends Controller
{
    public function index()
    {
        $company = User::find(1);

        return view('admin.components.parameter', compact(['company']));
    }
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request){

        $user = User::find(1);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->about_text_ge = $request->about_text_ge;
        $user->about_text_en = $request->about_text_en;
        $user->company_text_ge = $request->company_text_ge;
        $user->company_text_en = $request->company_text_en;

        $user->update();
        return redirect()->back();
    }
}
