<?php

namespace App\Repositories;

use App\Interfaces\RegionRepositoryInterface;
use App\Models\Customer;
use App\Models\Region;

class RegionRepository implements RegionRepositoryInterface 
{
    public function getAllRegions() 
    {
        return Region::all();
    }

    public function getRegionById($regionId) 
    {
        return Region::findOrFail($regionId);
    }

    public function deleteRegion($regionId) 
    {
        Region::destroy($regionId);
    }

    public function createRegion(array $regionDetails) 
    {
        return Region::create($regionDetails);
    }

    public function updateRegion($regionId, array $newDetails) 
    {
        return Region::whereId($regionId)->update($newDetails);
    }

    public function getFulfilledRegions() 
    {
        return Region::where('is_fulfilled', true);
    }
}