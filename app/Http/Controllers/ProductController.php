<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Product; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use App\Models\Warehouse;

class ProductController extends Controller
{
 // app/Http/Controllers/ProductController.php

public function create()
{
    $user = Auth::User();

    $warehouses = Warehouse::all();

    return view('Product.create', compact('user','warehouses'));

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

