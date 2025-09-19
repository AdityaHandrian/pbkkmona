<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\GeminiAIService;
use Exception;

class OcrController extends Controller
{
    protected $geminiAI;

    public function __construct(GeminiAIService $geminiAI)
    {
        $this->geminiAI = $geminiAI;
    }

    public function getAIResponse(Request $request)
    {
        $request->validate(['image' => 'required|image|max:4096']);
        
        try {
            $imageFile = $request->file('image');
            $response = $this->geminiAI->extractReceiptData($imageFile);
            return response()->json($response);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}