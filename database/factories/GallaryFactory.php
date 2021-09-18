<?php

namespace Database\Factories;

use App\Models\Gallary;
use Illuminate\Database\Eloquent\Factories\Factory;

class GallaryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Gallary::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'status'=>$this->faker->randomElement(['active','inactive']),
            'image'=>$this->faker->imageUrl('485','600'),
        ];
    }
}
