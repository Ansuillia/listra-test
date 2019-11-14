<?php

namespace App\Http\Controllers\Api;

use App\Car;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function index()
    {
        return ['status' => true];
    }
}
