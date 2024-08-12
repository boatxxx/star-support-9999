<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use App\Models\Shop; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use App\Models\User; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง

class WorkRecordController extends Controller
{
    public function create()
    {
        // ดึงข้อมูลสินค้า, ร้านค้า, และยูเซอร์
        $products = Product::all();
        $shops = Shop::all();
        $users = User::all();

        // ส่งข้อมูลไปยัง view
        return view('work_records.create', compact('products', 'shops', 'users'));
    }
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลที่ส่งมาจากฟอร์ม
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric',
            'order_date' => 'required|date',
            'description' => 'nullable|string',
            'shop_id' => 'required|exists:shops,id',
            'user_id' => 'required|exists:users,id',
            'status' => 'required|in:pending,completed,cancelled',
        ]);

        // สร้างออเดอร์ใหม่
        WorkRecord::create([
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'order_date' => $request->input('order_date'),
            'description' => $request->input('description'),
            'shop_id' => $request->input('shop_id'),
            'user_id' => $request->input('user_id'),
            'status' => $request->input('status'),
        ]);

        // เปลี่ยนเส้นทางหลังการบันทึก
        return redirect()->route('work_records.index')->with('success', 'ออเดอร์ถูกเพิ่มเรียบร้อยแล้ว!');
    }
}
