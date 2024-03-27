<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Config;

class ApiController extends Controller
{
    //


    public function test(Request $request)
    {
        //$response = Http::post('localhost:8081/employees/add')->json();

        //dd($response);
    }

    public function register_post(Request $request)
    {
        $username =  $request->Username;
        $pass = $request->Password;
        $name = $request->name;
        $tel = $request->phon;
        $address = $request->address;
        //return view('user.index');
        $response = Http::post('http://localhost:8081/users/add', [
            "username" => $username,
            "pass" => $pass,
            "name" => $name,
            "tel" => $tel,
            "address" => $address,
            "extra" => 79
        ]);

        if ($response->successful()) {
            // การร้องขอสำเร็จ
            return $response->json();
        } else {
            // การร้องขอไม่สำเร็จ
            return $response->json();
        }
    }

    public function pay()
    {
        return view('user/pay');
    }

    public function order_post(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
        ]);

        // Get the file from the request
        $file = $request->file('image');
        $package_id = $request->package;
        $softrner_id = $request->softener;
        $temperature_id  = $request->Temperature;
        $plusdry = $request->plusdry;

        // Generate a unique name for the file
        $id = Session::get('id_user');
        $response = Http::get('http://localhost:8081/users/' . $id);
        $user = $response->json();
        $filename = $user['username'] ."_"; //เพิ่ม id order
       
        // upload image
       $request->image->move(public_path('image_user'), $filename);
    }
    public function status()
    {
        return view('user/status');
    }

    public function order()
    {
        try {
            // ใช้ Guzzle HTTP Client เพื่อดึงข้อมูลจาก API
            $apipackage = "http://localhost:8081/package/";
            $apisoftener = "http://localhost:8081/softener/";
            $apiTemperature = "http://localhost:8081/WaterTemperature/";
            $response_softener = Http::get($apisoftener);
            $response_package = Http::get($apipackage);
            $response_Temperature = Http::get($apiTemperature);
            $package = $response_package->json();
            $softener = $response_softener->json();
            $Temperature = $response_Temperature->json();
            return view('user/order', compact('package', 'softener', 'Temperature'));
            // ตรวจสอบว่าการร้องขอ API สำเร็จหรือไม่
            /*if ($response->successful()) {
                // แปลงข้อมูลที่ได้รับกลับมาเป็น JSON
                $data = $response->json();

                // ทำสิ่งที่คุณต้องการกับข้อมูลที่ได้รับมา
                // เช่น ส่งข้อมูลไปยัง View เพื่อแสดงผล
                return $response->object();
            } else {
                // กรณีร้องขอ API ไม่สำเร็จ
                return response()->json(['message' => 'Failed to fetch data from API'], 500);
            }*/
        } catch (\Exception $e) {
            // กรณีเกิดข้อผิดพลาดในการเชื่อมต่อ API
            return response()->json(['message' => $e->getMessage()], 500);
        }
    }
    public function user()
    {
        return view('user/index');
    }
    public function login_post(Request $request)
    {
        $username =  $request->Username;
        $pass = $request->Password;
        $response = Http::post('http://localhost:8081/users/login', [
            "username" => $username,
            "pass" => $pass
        ]);
        if ($response->successful()) {
            // การร้องขอสำเร็จ
            $user = $response->json();
            Session::put('id_user', $user['id']);
            $id = Session::get('id_user');
            return redirect()->route('wel');
        } else {
            // การร้องขอไม่สำเร็จ
            $error = $response->json();
            echo "fff";
            return back()->withErrors($error);
        }
    }

    public function wel()
    {
        // เช็คว่ามี Session ของผู้ใช้หรือไม่
        if (!Session::has('id_user')) {
            return redirect()->route('login')->with('error_message', 'Please login first.');
        }

        // ถ้ามี Session ของผู้ใช้อยู่ ให้ดึงข้อมูลผู้ใช้
        $id = Session::get('id_user');

        $response = Http::get('http://localhost:8081/users/' . $id);
        if ($response->successful()) {
            // การร้องขอสำเร็จ
            $user = $response->json();
            return view('user.wel', compact('user'));
        } else {
            // การร้องขอไม่สำเร็จ
            $error = $response->json();
            return back()->withErrors($error);
        }
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

    public function checkApi()
    {
        $apiUrl = Config::get('api.url');
        $apiUrl = $apiUrl . "/add/" ;
        dd($apiUrl);
    }
}
