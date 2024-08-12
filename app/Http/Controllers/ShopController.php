<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index()
    {        $user = Auth::User();

        $shops = Shop::all();
        return view('shops.index', compact('shops','user'));
    }

    public function create()
    {
        $user = Auth::User();
        $shops = Shop::all();

        return view('shops.create', compact('shops','user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'Link_google' => 'nullable|string',
            'sta' => 'required|boolean',
            'Latitude' => 'nullable|string|max:255',
            'Longitude' => 'nullable|string|max:255',
        ]);

        $shop = new Shop();
        $shop->name = $request->name;
        $shop->address = $request->address;
        $shop->Link_google = $request->Link_google;
        $shop->sta = $request->sta;
        $shop->Latitude = $request->Latitude;
        $shop->Longitude = $request->Longitude;
        $shop->save();

        return redirect()->route('shops.create')->with('success', 'ร้านค้าถูกบันทึกเรียบร้อยแล้ว');
    }

    public function show(Shop $shop)
    {
        return view('shops.show', compact('shop'));
    }

    public function edit(Shop $shop)
    {        $user = Auth::User();

        return view('shops.edit', compact('shop','user'));
    }

   // ตรวจสอบว่าใช้ชื่อคอลัมน์ที่ถูกต้อง
public function update(Request $request, Shop $shop)
{
    $request->validate([
        'name' => 'required|string|max:20',
        'address' => 'required|string|max:255',
        'Link_google' => 'nullable|string',
        'sta' => 'required|boolean',
        'Latitude' => 'nullable|string|max:255',
        'Longitude' => 'nullable|string|max:255',
    ]);

    $shop->name = $request->input('name');
    $shop->address = $request->input('address');
    $shop->link_google = $request->input('link_google'); // Make sure this matches the column name
    $shop->sta = $request->input('sta');
    $shop->latitude = $request->input('latitude'); // Ensure this matches
    $shop->longitude = $request->input('longitude'); // Ensure this matches
    $shop->save();

    return redirect()->route('shops.index')->with('success', 'ร้านค้าถูกอัปเดตเรียบร้อยแล้ว');
}


    public function destroy(Shop $shop)
    {
        $shop->delete();
        return redirect()->route('shops.index')->with('success', 'ร้านค้าถูกลบเรียบร้อยแล้ว');
    }
}
