<?php

namespace App\Services;
use App\Models\Production;

class ProductionService
{
    public function index()
    {
        return Production::all();
    }

    public function store($data)
    {
        if($data)
        {
            $production = Production::create($data);
            return response(null, 201);
        }
    }
}
