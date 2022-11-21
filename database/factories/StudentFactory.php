<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nrp'                   => $this->faker->numberBetween($min = 1000000000, $max = 9999999999),
            'name'                  => $this->faker->name(),
            'study_program_id'      => $this->faker->numberBetween($min = 1, $max = 16),
            'semester'              => $this->faker->numberBetween($min = 1, $max = 8),
            'parallel'              => $this->faker->randomElement($array = array ('A','B')),
            'guardian_lecturer_id'  => $this->faker->numberBetween($min = 1, $max = 10),
            'status'                => $this->faker->randomElement($array = array ('active','inactive')),
            'birth_date'            => $this->faker->date(),
            'birth_place'           => $this->faker->city(),
            'gender'                => $this->faker->randomElement($array = array ('men','women')),
            'citizenship'           => $this->faker->randomElement($array = array ('WNI','WNA', 'WNI', 'WNI')),
            'religion_id'           => $this->faker->numberBetween($min = 1, $max = 6),
            'blood_type'            => $this->faker->randomElement($array = array ('A','O', 'B', 'AB')),
            'address'               => $this->faker->address(),
            'phone'                 => $this->faker->phoneNumber(),
            'graduate_date'         => null,
            'acceptance_path_id'    => $this->faker->numberBetween($min = 1, $max = 6),
        ];
    }
}
