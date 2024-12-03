<?php

namespace App\Http\Controllers;

use App\Models\Income;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

use App\Models\Sale;
use App\Models\Order;
use App\Models\Stock;

class ApiDataController extends Controller
{
    private $apiHost;
    private $apiKey;

    public function __construct()
    {
        $this->apiHost = env('API_HOST');
        $this->apiKey = env('API_KEY');
    }

    public function fetchOrders()
    {
        try {
            $response = Http::get("{$this->apiHost}/api/orders", [
                'dateFrom' => now()->subMonth()->toDateString(),
                'dateTo'   => now()->toDateString(),
                'page'     => 1,
                'limit'    => 500,
                'key'      => $this->apiKey,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                Order::Create(
                    [
                        'response' => json_encode($data),
                    ]
                );

                return response()->json(['message' => 'Orders fetched successfully!']);
            }

            return response()->json(['error' => 'Failed to fetch'], 500);
        } catch (\Exception $e) {
            Log::error("Error fetching: {$e->getMessage()}");
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    public function fetchSales()
    {
        try {
            $response = Http::get("{$this->apiHost}/api/sales", [
                'dateFrom' => now()->subMonth()->toDateString(),
                'dateTo'   => now()->toDateString(),
                'page'     => 1,
                'limit'    => 500,
                'key'      => $this->apiKey,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                Sale::Create(
                    [
                        'response' => json_encode($data),
                    ]
                );

                return response()->json(['message' => 'Sales fetched successfully!']);
            }

            return response()->json(['error' => 'Failed to fetch'], 500);
        } catch (\Exception $e) {
            Log::error("Error fetching: {$e->getMessage()}");
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    public function fetchStocks()
    {
        try {
            $response = Http::get("{$this->apiHost}/api/stocks", [
                'dateFrom' => now()->toDateString(),
                'page'     => 1,
                'limit'    => 500,
                'key'      => $this->apiKey,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                Stock::Create(
                    [
                        'response' => json_encode($data),
                    ]
                );

                return response()->json(['message' => 'Stocks fetched successfully!']);
            }

            return response()->json(['error' => 'Failed to fetch'], 500);
        } catch (\Exception $e) {
            Log::error("Error fetching: {$e->getMessage()}");
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }

    public function fetchIncomes()
    {
        try {
            $response = Http::get("{$this->apiHost}/api/incomes", [
                'dateFrom' => now()->subMonth()->toDateString(),
                'dateTo'   => now()->toDateString(),
                'page'     => 1,
                'limit'    => 500,
                'key'      => $this->apiKey,
            ]);

            if ($response->successful()) {
                $data = $response->json();

                Income::Create(
                    [
                        'response' => json_encode($data),
                    ]
                );

                return response()->json(['message' => 'Incomes fetched successfully!']);
            }

            return response()->json(['error' => 'Failed to fetch'], 500);
        } catch (\Exception $e) {
            Log::error("Error fetching: {$e->getMessage()}");
            return response()->json(['error' => 'An error occurred'], 500);
        }
    }
}

