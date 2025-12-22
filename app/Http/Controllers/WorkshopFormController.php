<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkshopFormController extends Controller
{
    // แสดงฟอร์ม Workshop #HTML-FORM
    public function index()
    {
        return view('workshop.form');
    }

    // รับค่าจากฟอร์ม และตรวจสอบข้อมูล
    public function store(Request $request)
    {
        // ตรวจสอบข้อมูล
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'dob' => 'required|date',
            'age' => 'required|integer|min:0',
            'gender' => 'required',
            'address' => 'required',
            'agree' => 'accepted',
            'photo' => 'nullable|image|max:2048', // ตรวจสอบไฟล์รูป ถ้ามี
        ]);

        $data = $request->all();

        // ถ้ามีรูปอัปโหลด
        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $data['photo'] = $file->getClientOriginalName();
            // ปกติจะ save ไป storage แต่โจทย์บอกยังไม่ต้องอัปโหลด
        }

        // ส่งข้อมูลไปหน้า result
        return view('workshop.result', compact('data'));
    }
}
