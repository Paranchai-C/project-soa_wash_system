<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiController extends Controller
{
    //
    

    public function test(Request $request)
    {
        //$response = Http::post('localhost:8081/employees/add')->json();

        //dd($response);
    }
    
    function login_post(Request $request) {
        echo $request->Username;
        //return view('user.index');
    }

    public function getsoftener()
    {
        try {
            // ใช้ Guzzle HTTP Client เพื่อดึงข้อมูลจาก API
            $apisoftener = "http://localhost:8081/softener/";
            $response = Http::get($apisoftener);
            
            // ตรวจสอบว่าการร้องขอ API สำเร็จหรือไม่
            if ($response->successful()) {
                // แปลงข้อมูลที่ได้รับกลับมาเป็น JSON
                $data = $response->json();
                
                // ทำสิ่งที่คุณต้องการกับข้อมูลที่ได้รับมา
                // เช่น ส่งข้อมูลไปยัง View เพื่อแสดงผล
                return $response->object();
            } else {
                // กรณีร้องขอ API ไม่สำเร็จ
                return response()->json(['message' => 'Failed to fetch data from API'], 500);
            }
        } catch (\Exception $e) {
            // กรณีเกิดข้อผิดพลาดในการเชื่อมต่อ API
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }

}
?>