<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();

        return view('admin.about.index', compact('abouts'));
    }

    public function edit(about $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, about $about)
    {
        $request->validate([
            'wa' => 'required', 'description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/about';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename;
        } else {
            unset($input['image']);
        }

        $about->update($input);

        return redirect('/admin/abouts')->with('message', 'Data Berhasil diedit');
    }
}