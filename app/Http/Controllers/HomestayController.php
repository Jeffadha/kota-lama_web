<?php

namespace App\Http\Controllers;

use App\Models\Homestay;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homestays = homestay::all();    

        return view('admin.homestay.index', compact('homestays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homestay.create');
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

        If ($image = $request->file('image')){
            $destinationPath = 'image/homestay';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }

        homestay::create($input);

        return redirect('/admin/homestays')->with('message', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(homestay $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(homestay $homestay)
    {
        return view('admin.homestay.edit', compact('homestay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, homestay $homestay)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        If ($image = $request->file('image')){
            $destinationPath = 'image/homestay';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }else{
            unset($input['image']);
        }

        $homestay->update($input);

        return redirect('/admin/homestays')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(homestay $homestay)
    {
        $homestay->delete();
        return redirect('/admin/homestays')->with('message', 'Data Berhasil dihapus');

    }
}
