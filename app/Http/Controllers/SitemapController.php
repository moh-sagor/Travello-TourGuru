<?php

namespace App\Http\Controllers;

use App\Models\Sitemap;
use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Auth;

class SitemapController extends Controller
{

    public function index()
    {
        $sitemap = Sitemap::first();
        $user = User::all();
        return view('sitemaps.index', compact('sitemap', 'user'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'contact' => 'nullable|string',
            'sitename' => 'nullable|string',
            'address' => 'nullable|string',
            'facebook' => 'nullable|string',
            'twitter' => 'nullable|string',
            'linkedin' => 'nullable|string',
            'about_1' => 'nullable|string',
            'about_2' => 'nullable|string',
            'banner_1' => 'nullable|string',
            'banner_2' => 'nullable|string',
        ]);
        $user = Auth::user();
        $sitemapData = [
            'user_id' => $user->id,
            'contact' => $request->contact,
            'sitename' => $request->sitename,
            'address' => $request->address,
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'about_1' => $request->about_1,
            'about_2' => $request->about_2,
            'banner_1' => $request->banner_1,
            'banner_2' => $request->banner_2,
        ];
        if ($request->file('image')) {
            $manager = new ImageManager(new Driver());
            $name_gen = hexdec(uniqid()) . '.' . $request->file('image')->getClientOriginalExtension();
            $img = $manager->read($request->file('image'));
            $img = $img->resize(370, 246);
            $img->save(base_path('public/All_Images/sitemap/' . $name_gen));
            $sitemapData['image'] = 'All_Images/sitemap/' . $name_gen;
        }

        $user->sitemap()->updateOrCreate(['user_id' => $user->id], $sitemapData);
        return redirect()->route('user.profile', $user->username);

    }



}
