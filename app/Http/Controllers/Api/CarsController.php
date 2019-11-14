<?php

namespace App\Http\Controllers\Api;

use App\Car;
use App\Http\Resources\CarCollection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CarsController extends Controller
{
    public function __construct(Car $cars)
    {
        $this->cars = $cars;
    }

    public function index()
    {
        return new CarCollection(Car::all());
    }
}
