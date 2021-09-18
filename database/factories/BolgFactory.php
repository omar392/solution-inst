<?php

namespace Database\Factories;

use App\Models\Bolg;
use Illuminate\Database\Eloquent\Factories\Factory;

class BolgFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bolg::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_ar'=>$this->faker->word,
            'title_en'=>$this->faker->word,
            'description_ar'=>$this->faker->text,
            'description_en'=>$this->faker->text,
            'status'=>$this->faker->randomElement(['active','inactive']),
            'image'=>$this->faker->imageUrl('485','600'),
        ];
    }
}
