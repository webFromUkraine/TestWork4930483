<?php

namespace App\Http\Controllers;

use App\Interfaces\RegionRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegionController extends Controller
{
    private RegionRepositoryInterface $regionRepository;

    public function __construct(RegionRepositoryInterface $regionRepository) 
    {
        $this->regionRepository = $regionRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->regionRepository->getAllRegions()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $regionDetails = $request->only([
            'region',
        ]);

        return response()->json(
            [
                'data' => $this->regionRepository->createRegion($regionDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function show(Request $request): JsonResponse 
    {
        $regionId = $request->route('id');

        return response()->json([
            'data' => $this->regionRepository->getRegionById($regionId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $regionId = $request->route('id');
        $regionDetails = $request->only([
            'region'
        ]);

        return response()->json([
            'data' => $this->regionRepository->updateRegion($regionId, $regionDetails),
            'details' => $this->regionRepository->getRegionById($regionId)
        ]);
    }

    public function delete(Request $request): JsonResponse 
    {
        $regionId = $request->route('id');
        $this->regionRepository->deleteRegion($regionId);

        return response()->json([
            'status' => 200,
            'message' => "Region Deleted Or Never Existed",
        ]);
    }
}
