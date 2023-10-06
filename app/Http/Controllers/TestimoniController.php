<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimoni;

class TestimoniController extends Controller
{
    public function index()
    {
        $testimoni = Testimoni::all();

        return view('admin.testimoni.index', compact('testimoni'));
    }


    public function store(Request $request)
    {
        // $request->validate([
        //     'description' => 'required', 'name' => 'required'
        // ]);

        // $input = $request->all();

        // Testimoni::create($input);

        // return redirect('/')->with('message', 'Data Berhasil Ditambahkan');
    }

    public function show(testimoni $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(testimoni $testimoni)
    {
        // return view('admin.testimoni.edit', compact('testimoni'));
    }

    public function update(Request $request, testimoni $testimoni)
    {
        // $request->validate([
        //     'name' => 'required', 'description' => 'required', 'status' => 'required'
        // ]);

        // $input = $request->all();

        // $testimoni->update($input);

        // return redirect('/admin/testimoni')->with('message', 'Data Berhasil diedit');
    }

    public function tampil(testimoni $testimoni)
    {
        if ($testimoni->status == '1') {
            $testimoni->update(
                [
                    'status' => '0'
                ]
            );
        } elseif ($testimoni->status == '0') {
            $testimoni->update(
                [
                    'status' => '1'
                ]
            );
        }
        return redirect('/admin/testimoni')->with('message', 'Status Berhasil dirubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(testimoni $testimoni)
    {
        $testimoni->delete();
        return redirect('/admin/testimoni')->with('message', 'Data Berhasil dihapus');
    }
}