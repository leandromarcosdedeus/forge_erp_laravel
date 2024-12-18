<?php

namespace App\Services;
use App\Models\Production;

class ProductionService
{
    public function index()
    {
        return Production::all();
    }
}
