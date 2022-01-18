<?php

namespace Database\Factories;

use App\Models\Client; 
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str; 

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        require_once __DIR__ . '/Document.php'; 

        $cpfs = cpfs();
        return [
            'name' => $this->faker->name, 
            'document_number' => $cpfs[array_rand($cpfs, 1)], 
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'date_birth' => $this->faker->date(),
            'sex' => rand(1,10) % 2 == 0 ? 'm' : 'f',
            'marital_status' => rand(1,3),
            'physical_desability' => rand(1, 10) % 2 == 0 ? $this->faker->word : null, 
            'defaulter' => rand(0,1)
        ];
    }
    
}
