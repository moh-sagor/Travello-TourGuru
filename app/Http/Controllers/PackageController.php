<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PackageController extends Controller
{
    public function index()
    {
        $packages = Package::latest()->get();
        return view('packages.index', compact('packages'));
    }

    public function create()
    {
        return view('packages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'package_name' => 'required|string',
            'amount' => 'required|numeric',
            'phone_number' => 'required|string',
            'trxID' => 'required|string',
            'payment_type' => 'required|string',
        ]);

        // Get the authenticated user
        $user = Auth::user();

        $package = Package::create([
            'user_id' => $user->id,
            'name' => $request->name,
            'package_name' => $request->package_name,
            'amount' => $request->amount,
            'phone_number' => $request->phone_number,
            'trxID' => $request->trxID,
            'payment_type' => $request->payment_type,
            'status' => $request->status,
        ]);

        return response()->json(['success' => true, 'package' => $package]);
    }

    public function markAsRead(Package $package)
    {
        $package->update(['status' => 'read']);

        return response()->json(['success' => true]);
    }

}
