<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Homestay;
use App\Models\Kuliner;
use App\Models\Package;
use App\Models\Souvenir;
use App\Models\Testimoni;

class PortalController extends Controller
{
    public function  index()
    {
        $gallerys = Gallery::all();
        $homestays = Homestay::all();
        $kuliners = Kuliner::all();
        $packages = Package::all();
        $souvenirs = Souvenir::all();
        $about = About::all();
        return view('front.index', compact(
            'gallerys',
            'homestays',
            'kuliners',
            'packages',
            'souvenirs',
            'about'
        ));
    }

    //input testimoni
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required', 'name' => 'required'
        ]);

        $input = [
            'name' => $request->name,
            'description' => $request->description,
            'status' => '0'
        ];

        Testimoni::create($input);

        return redirect('/about')->with('message', 'Data Berhasil Ditambahkan');
    }

    public function about()
    {
        $homestays_footer = Homestay::all();
        $kuliners_footer = Kuliner::all();
        $souvenirs_footer = Souvenir::all();
        $packages_footer = Package::all();
        $about = About::all();
        $testimoni = Testimoni::where('status', '1')->get();
        return view('front.about', compact(
            'homestays_footer',
            'kuliners_footer',
            'packages_footer',
            'souvenirs_footer',
            'testimoni',
            'about'
        ));
    }

    public function package_list()
    {
        $homestays_footer = Homestay::all();
        $kuliners_footer = Kuliner::all();
        $souvenirs_footer = Souvenir::all();
        $packages_footer = Package::all();
        $about = About::all();
        $packages = Package::paginate(4, ['*'], 'packages');
        return view('front.paket', compact(
            'packages',
            'homestays_footer',
            'kuliners_footer',
            'packages_footer',
            'souvenirs_footer',
            'about'
        ));
    }

    public function gallery_list()
    {
        $gallerys = Gallery::paginate(8, ['*'], 'packages');
        $homestays_footer = Homestay::all();
        $kuliners_footer = Kuliner::all();
        $souvenirs_footer = Souvenir::all();
        $packages_footer = Package::all();
        $about = About::all();
        return view('front.gallery', compact(
            'gallerys',
            'homestays_footer',
            'kuliners_footer',
            'packages_footer',
            'souvenirs_footer',
            'about'
        ));
    }

    public function kuliner_list()
    {
        $homestays_footer = Homestay::all();
        $kuliners_footer = Kuliner::all();
        $souvenirs_footer = Souvenir::all();
        $packages_footer = Package::all();
        $about = About::all();
        $kuliners = Kuliner::paginate(4, ['*'], 'kuliners');
        return view('front.kuliner', compact(
            'kuliners',
            'homestays_footer',
            'kuliners_footer',
            'packages_footer',
            'souvenirs_footer',
            'about'
        ));
    }

    public function souvenir_list()
    {
        $homestays_footer = Homestay::all();
        $kuliners_footer = Kuliner::all();
        $souvenirs_footer = Souvenir::all();
        $packages_footer = Package::all();
        $about = About::all();
        $souvenirs = Souvenir::paginate(4, ['*'], 'homestays');
        return view('front.souvenir', compact(
            'souvenirs',
            'homestays_footer',
            'kuliners_footer',
            'packages_footer',
            'souvenirs_footer',
            'about'
        ));
    }

    public function homestay_list()
    {


        $homestays_footer = Homestay::all();
        $kuliners_footer = Kuliner::all();
        $souvenirs_footer = Souvenir::all();
        $packages_footer = Package::all();
        $about = About::all();
        $homestays = Homestay::paginate(4, ['*'], 'homestays');
        return view('front.homestay', compact(

            'homestays',
            'homestays_footer',
            'kuliners_footer',
            'packages_footer',
            'souvenirs_footer',
            'about'
        ));
    }
}