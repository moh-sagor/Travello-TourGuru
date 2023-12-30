<?php

namespace App\Http\Controllers;

use App\Models\Sitemap;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Auth;

class SitemapController extends Controller
{

    public function index()
    {
        $sitemap = Sitemap::first();
        return view('sitemaps.index', compact('sitemap'));
    }
    public function show($id)
    {
        $sitemap = Sitemap::findOrFail($id);

        // Check if the authenticated user owns this sitemap
        $user = Auth::user();

        return view('sitemaps.show', compact('sitemap'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
        ]);
        $user = Auth::user();
        $sitemapData = [
            'user_id' => $user->id,
            'contact' => $request->contact,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
        ];
        if ($request->file('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);
            $img->toJpeg(80)->save(base_path('public/All_Images/sitemap/' . $name_gen));
            $sitemapData['image'] = 'All_Images/sitemap/' . $name_gen;
        }

        $user->sitemap()->updateOrCreate(['user_id' => $user->id], $sitemapData);
        return view('sitemaps.show');

    }



}
