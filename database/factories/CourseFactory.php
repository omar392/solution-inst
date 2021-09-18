<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

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
            'course_link'=>$this->faker->word,
            'description_ar'=>$this->faker->text,
            'description_en'=>$this->faker->text,
            'status'=>$this->faker->randomElement(['active','inactive']),
            'image'=>$this->faker->imageUrl('485','600'),
        ];
    }
}
