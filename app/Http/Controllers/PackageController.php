<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packages = package::all();    

        return view('admin.package.index', compact('packages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.package.create');
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
            $destinationPath = 'image/package';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }

        package::create($input);

        return redirect('/admin/packages')->with('message', 'Data Berhasil Ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(package $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(package $package)
    {
        return view('admin.package.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, package $package)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image'
        ]);

        $input = $request->all();

        If ($image = $request->file('image')){
            $destinationPath = 'image/package';
            $imagename = $image->getClientOriginalName();
            $image->move($destinationPath, $imagename);
            $input['image'] = $imagename; 
        }else{
            unset($input['image']);
        }

        $package->update($input);

        return redirect('/admin/packages')->with('message', 'Data Berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(package $package)
    {
        $package->delete();
        return redirect('/admin/packages')->with('message', 'Data Berhasil dihapus');

    }
}
