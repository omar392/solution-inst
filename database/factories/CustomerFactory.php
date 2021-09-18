<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Customer::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name_ar'=>$this->faker->word,
            'name_en'=>$this->faker->word,
            'status'=>$this->faker->randomElement(['active','inactive']),
            'image'=>$this->faker->imageUrl('95','130'),
        ];
    }
}
