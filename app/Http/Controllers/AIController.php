<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function index()
    {
        return view('ai');
    }

    public function ask(Request $request)
    {
        $question = $request->question;

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post(
            'https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash:generateContent',
            [
                'contents' => [
                    [
                        'role' => 'user',
                        'parts' => [
                            ['text' => $question]
                        ]
                    ]
                ],
                'generationConfig' => [
                    'temperature' => 0.7,
                    'maxOutputTokens' => 256,
                ],
                'key' => env('GOOGLE_AI_API_KEY'),
            ]
        );

        $data = $response->json();

        if (isset($data['candidates'][0]['content']['parts'][0]['text'])) {
            $answer = $data['candidates'][0]['content']['parts'][0]['text'];
        } else {
            $answer = 'Google AI không trả về nội dung.';
        }

        return view('ai', compact('question', 'answer'));
    }
}
