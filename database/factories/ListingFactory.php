<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this -> faker ->sentence(),
            'tags' =>'api , backend , laravel',
            'email'=> $this -> faker->companyEmail(),
            'company' =>$this -> faker->company(),
            'website'=> $this -> faker->URL(),
            'location' =>$this -> faker->city(),
            'description'=> $this -> faker->paragraph(5)
        ];
    }
}
