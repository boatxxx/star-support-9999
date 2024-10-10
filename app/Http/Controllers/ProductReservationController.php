<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use Illuminate\Support\Facades\Auth;
use App\Models\Reservation; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง

class ProductReservationController extends Controller
{
    public function create()
    {    $user = Auth::user();
        $products = Product::all(); // ดึงสินค้าทั้งหมด

        return view('product_reservation.create', compact('products','user'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // บันทึกข้อมูลการจอง (สามารถสร้าง Model สำหรับบันทึกข้อมูลการจองเพิ่มเติมได้)
        Reservation::create([
            'product_id' => $validated['product_id'],
            'user_id' => Auth::id(),
            'quantity' => $validated['quantity'],
            'status' => 'reserved', // สถานะการจอง
        ]);

        return redirect('/user')->with('success', 'จองสินค้าสำเร็จ');
    }
}
