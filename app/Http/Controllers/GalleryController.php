<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $gallerys = gallery::all();

        return view('admin.gallery.index', compact('gallerys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'required|image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/gallery';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename;
        }

        gallery::create($input);

        return redirect('/admin/gallery')->with('message', 'Data Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(gallery $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gallery $gallery)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/gallery';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename;
        } else {
            unset($input['image']);
        }

        $gallery->update($input);

        return redirect('/admin/gallery')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        $gallery->delete();
        return redirect('/admin/gallery')->with('message', 'Data Berhasil dihapus');
    }
}