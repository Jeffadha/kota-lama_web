<?php

namespace App\Http\Controllers;

use App\Models\Souvenir;
use Illuminate\Http\Request;

class SouvenirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $souvenirs = souvenir::all();    

        return view('admin.souvenir.index', compact('souvenirs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.souvenir.create');
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
            $destinationPath = 'image/souvenir';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }

        souvenir::create($input);

        return redirect('/admin/souvenir')->with('message', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(souvenir $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(souvenir $souvenir)
    {
        return view('admin.souvenir.edit', compact('souvenir'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, souvenir $souvenir)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        If ($image = $request->file('image')){
            $destinationPath = 'image/souvenir';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }else{
            unset($input['image']);
        }

        $souvenir->update($input);

        return redirect('/admin/souvenir')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(souvenir $souvenir)
    {
        $souvenir->delete();
        return redirect('/admin/souvenir')->with('message', 'Data Berhasil dihapus');

    }
}
