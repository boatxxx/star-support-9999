<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkRecord; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use App\Models\Warehouses; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง
use App\Models\Product; // ตรวจสอบการใช้ชื่อโมเดลที่ถูกต้อง

class ProductLoadingController extends Controller
{
    public function create($workRecordId)
    {
        // ดึงข้อมูลออเดอร์ และสินค้าที่เกี่ยวข้อง
        $workRecord = WorkRecord::with('products')->findOrFail($workRecordId);
        $vehicles = Warehouses::all(); // รถที่มีอยู่ในระบบ

        return view('product_loading.create', compact('workRecord', 'vehicles'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'work_record_id' => 'required|exists:work_records,id',
            'product_id' => 'required|exists:products,id',
            'vehicle_id' => 'required|exists:vehicles,id',
            'quantity' => 'required|integer|min:1',
        ]);

        // บันทึกข้อมูลการขึ้นรถ
        ProductLoading::create([
            'work_record_id' => $validated['work_record_id'],
            'product_id' => $validated['product_id'],
            'vehicle_id' => $validated['vehicle_id'],
            'user_id' => Auth::id(),
            'quantity' => $validated['quantity'],
        ]);

        return redirect()->route('work_records.show', $validated['work_record_id'])->with('success', 'บันทึกสินค้าขึ้นรถเรียบร้อย');
    }}
