<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;

class SalesController extends Controller
{
    public function store(Request $request)
    {
        // รับข้อมูลสินค้าที่ส่งมา
        $items = json_decode($request->input('items'), true); // แปลง JSON เป็น Array

        // เริ่มต้นยอดรวม
        $total = 0;

        // บันทึกข้อมูลการขาย
        foreach ($items as $item) {
            // คำนวณราคาสินค้า
            $itemTotal = $item['quantity'] * $item['price'];
            $total += $itemTotal;

            // สร้างข้อมูลการขายในฐานข้อมูล
            Sale::create([
                'shop_id' => 1, // คุณสามารถเปลี่ยนเป็น ID ของร้านค้าที่ต้องการ
                'product_id' => $item['product_id'],
                'total_price' => $itemTotal,
                'sale_date' => now(),  // วันที่ขาย
                'user_id' => Auth::id(), // ID ของผู้ใช้งาน
                'promotion_id' => 12,
            ]);
        }

        // ส่งข้อมูลกลับไปยังหน้าแรก
        return redirect('user');
    }
}
