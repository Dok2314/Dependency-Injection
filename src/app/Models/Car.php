<?php

namespace Src\App\Models;

use Carbon\Carbon;

class Car extends Model
{
    public static function get(): array
    {
        return [
            [
                'id' => '1',
                'mark' => 'Audi',
                'model' => 'A8',
                'price' => '75000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '2',
                'mark' => 'BMW',
                'model' => 'M5',
                'price' => '80000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '3',
                'mark' => 'Mercedes Benz',
                'model' => 'G-class',
                'price' => '145000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '4',
                'mark' => 'Bentley',
                'model' => 'Bentaiga',
                'price' => '365000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '5',
                'mark' => 'Maserati',
                'model' => 'Ghilibi',
                'price' => '55000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id' => '6',
                'mark' => 'Rolls Royce',
                'model' => 'Phantom',
                'price' => '375000',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
    }
}