<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class imageProfil extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
    
        // Store the image
        $image = $request->file('image');
        $path = $image->store('images', 'public');
    
        // Create a new Image model instance
        $imageModel = new Image();
        $imageModel->filename = $image->getClientOriginalName();
        $imageModel->path = $path;
        $imageModel->username = $request->input('username');
        $imageModel->bio = $request->input('bio');
        $imageModel->save();
    
        // Redirect back with a success message
        return view('user_login.profilUtamaLogin');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required|string|max:255',
        ]);

        $image = $request->file('image');
        $path = $image->store('images', 'public');

        $imageModel = new Image();
        $imageModel->filename = $image->getClientOriginalName();
        $imageModel->path = $path;
        $imageModel->username = $request->input('username');
        $imageModel->bio = $request->input('bio');
        $imageModel->save();

        $article = Image::create([
            'judulArtikel'=>$request->judulArtikel,
            'isiArtikel'=>$request->isiArtikel
        ]);
        return view('user_login.profilUtamaLogin');
    }
    public function index()
    {
        $images = Image::all();
        return view('user_login.profilUtamaLogin');
    }
    public function updateProfile(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        'description' => 'required|string|max:255',
    ]);

    $image = $request->file('image');
    $path = $image->store('images', 'public');

    $imageModel = new Image();
    $imageModel->filename = $image->getClientOriginalName();
    $imageModel->path = $path;
    $imageModel->username = $request->input('username');
    $imageModel->bio = $request->input('bio');
    $imageModel->save();
    
    $article = Image::create([
        'judulArtikel'=>$request->judulArtikel,
        'isiArtikel'=>$request->isiArtikel
    ]);
    return redirect()->back();
}
}
