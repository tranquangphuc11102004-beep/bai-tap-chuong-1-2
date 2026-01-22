<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return '
        <div style="font-family: Arial, sans-serif; display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f3f4f6;">
            <div style="background: white; padding: 40px; border-radius: 12px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; max-width: 400px;">
                <h3 style="color: #6366f1; margin: 0 0 10px 0; text-transform: uppercase; letter-spacing: 2px;">Sinh Viên</h3>
                <h1 style="color: #1f2937; margin: 10px 0; font-size: 28px;">Trần Quang Phúc</h1>
                <p style="color: #4b5563; font-size: 18px; margin-bottom: 20px;">MSSV: <span style="font-weight: bold; color: #ef4444;">12345678</span></p>
                
                <hr style="border: 0; height: 1px; background: #e5e7eb; margin: 20px 0;">
                
                <p style="color: #6b7280; font-size: 14px;">
                    Lớp: Web AI Lab 1 <br>
                    Khoa: Công Nghệ Thông Tin
                </p>
            </div>
        </div>
    ';
});

use App\Http\Controllers\AIController;

Route::get('/ai', [AIController::class, 'index']);
Route::post('/ai', [AIController::class, 'ask']);
