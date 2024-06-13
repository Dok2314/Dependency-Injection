<?php

namespace Src\App\Repositories;

use Src\App\Models\Car;

class CarRepository
{
    public function getCars(): array
    {
        return Car::get();
    }
}