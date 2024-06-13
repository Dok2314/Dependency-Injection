<?php

namespace Src\App\Services;

use Src\App\Repositories\CarRepository;

class CarService
{
    public function __construct(private readonly CarRepository $carRepository)
    {
    }

    public function getCars(): array
    {
        return $this->carRepository->getCars();
    }
}