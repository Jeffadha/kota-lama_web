<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;

class KulinerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kuliners = kuliner::all();    

        return view('admin.kuliner.index', compact('kuliners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kuliner.create');
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
            $destinationPath = 'image/kuliner';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }

        kuliner::create($input);

        return redirect('/admin/kuliner')->with('message', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(kuliner $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(kuliner $kuliner)
    {
        return view('admin.kuliner.edit', compact('kuliner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, kuliner $kuliner)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        If ($image = $request->file('image')){
            $destinationPath = 'image/kuliner';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }else{
            unset($input['image']);
        }

        $kuliner->update($input);

        return redirect('/admin/kuliner')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(kuliner $kuliner)
    {
        $kuliner->delete();
        return redirect('/admin/kuliner')->with('message', 'Data Berhasil dihapus');

    }
}
