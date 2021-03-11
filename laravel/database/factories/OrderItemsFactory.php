<?php

namespace Database\Factories;

use App\Models\order_items;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderItemsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = order_items::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
        ];
    }
}
