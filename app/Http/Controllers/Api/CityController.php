<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCityRequest;
use Illuminate\Http\JsonResponse;

class CityController extends Controller
{
    // Professional Tip: Using a static variable to simulate persistence during a single process
    private static array $cities = [
        ['id' => 1, 'name' => 'Addis Ababa', 'country' => 'Ethiopia', 'population' => 5000000],
        ['id' => 2, 'name' => 'Dire Dawa', 'country' => 'Ethiopia', 'population' => 450000],
    ];

    public function index(): JsonResponse
    {
        return response()->json(['status' => 'success', 'data' => self::$cities]);
    }

    public function store(StoreCityRequest $request): JsonResponse
    {
        $newCity = array_merge(['id' => count(self::$cities) + 1], $request->validated());
        return response()->json(['message' => 'City added (In-Memory)', 'data' => $newCity], 201);
    }

    public function show(int $id): JsonResponse
    {
        $city = collect(self::$cities)->firstWhere('id', $id);
        return $city ? response()->json(['data' => $city]) : response()->json(['message' => 'Not found'], 404);
    }

    public function update(StoreCityRequest $request, int $id): JsonResponse
    {
        // Logic to simulate an update
        return response()->json(['message' => "City $id updated", 'data' => $request->validated()]);
    }

    public function destroy(int $id): JsonResponse
    {
        return response()->json(['message' => "City $id deleted successfully"]);
    }
}