<?php

namespace Src\App\Controllers;

use Src\App\Services\CarService;

class CarController extends Controller
{
    public function __construct(private readonly CarService $carService)
    {
    }

    /**
     * @throws \Exception
     */
    public function index(): void
    {
        $cars = $this->carService->getCars();
        $this->render('car_index', compact('cars'));
    }
}