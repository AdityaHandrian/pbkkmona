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

    /**
     * Process receipt for both Blade and React components
     * This method works with your existing /process-receipt route
     */
    public function processReceipt(Request $request)
    {
        $request->validate(['image' => 'required|image|max:4096']);
        
        try {
            $imageFile = $request->file('image');
            $response = $this->geminiAI->extractReceiptData($imageFile);
            
            // Format response for both Blade and React compatibility
            $formattedResponse = [
                'type' => 'expense', // Default type for Blade compatibility
                'amount' => $response['amount'] ?? '',
                'date' => $response['date'] ?? date('Y-m-d'),
                'description' => $response['description'] ?? 'Receipt transaction',
                'category' => $response['category'] ?? 'Food and Beverages' // For React compatibility
            ];
            
            return response()->json($formattedResponse);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}