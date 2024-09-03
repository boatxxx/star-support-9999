<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Product; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use App\Models\Warehouse;

class ProductController extends Controller
{
 // app/Http/Controllers/ProductController.php
 public function destroy($id)
 {
     // ดึงข้อมูลสินค้าที่ต้องการลบโดยใช้ ID
     $product = Product::findOrFail($id);

     // ทำการลบสินค้า
     $product->delete();

     // กลับไปยังหน้ารายการสินค้าพร้อมกับข้อความแสดงความสำเร็จ
     return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
 }

public function create()
{
    $user = Auth::User();

    $warehouses = Warehouse::all();

    return view('Product.create', compact('user','warehouses'));

}
public function edit($id)
{
    $user = Auth::user();

    // ดึงข้อมูลสินค้าที่ต้องการแก้ไข
    $product = Product::findOrFail($id);

    // ดึงข้อมูลคลังสินค้าทั้งหมด
    $warehouses = Warehouse::all();

    // ส่งข้อมูลไปยังมุมมอง 'Product.edit'
    return view('Product.edit', compact('user', 'product', 'warehouses'));
}

public function store(Request $request)
{
    // Validate and store the product
    $validatedData = $request->validate([
        'name' => 'required|max:20',
        'description' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'expiration_date' => 'required|date',
        'Warehouse' => 'required|integer',
    ]);

    Product::create($validatedData);


    return redirect()->route('products.index')->with('success', 'Product created successfully.');
}
public function update(Request $request, $id)
{
    // ตรวจสอบความถูกต้องของข้อมูล
    $validatedData = $request->validate([
        'name' => 'required|max:20',
        'description' => 'required|max:255',
        'price' => 'required|numeric',
        'stock' => 'required|integer',
        'expiration_date' => 'required|date',
        'Warehouse' => 'required|integer',
    ]);

    // ดึงข้อมูลสินค้าที่ต้องการอัปเดต
    $product = Product::findOrFail($id);

    // อัปเดตข้อมูลสินค้า
    $product->update($validatedData);

    // กลับไปยังหน้ารายการสินค้าพร้อมกับข้อความแสดงความสำเร็จ
    return redirect()->route('products.index')->with('success', 'Product updated successfully.');
}


public function show(Product $product)
{$user = Auth::User();
    return view('Product.show', compact('product','user'));
}
public function index()
{    $user = Auth::User();

    $products = Product::all(); // ผลลัพธ์คือ Collection
    return view('Product.index', compact('products','user'));
}
}

