<?php

namespace Database\Factories;

use App\Enums\FakeUserGender;
use App\Enums\FakeUserTitle;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FakeUser>
 */
class fakeUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->randomElement(array_column(FakeUserTitle::cases(), 'value')),
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement(array_column(FakeUserGender::cases(), 'value')),
            'email' => fake()->unique()->safeEmail(),
            'username' => fake()->userName(),
            'date_of_birth' => fake()->date(),
            'phone' => fake()->phoneNumber(),
            'nationality' => fake()->country(),
            'profile_picture' => fake()->imageUrl('https://tse2.mm.bing.net/th?id=OIP.Skh0ULBjJrw_imafAUKYSgHaGo&pid=Api&P=0&h=180'),
            'address_street' => fake()->streetName(),
            'address_city' => fake()->city(),
            'address_state' => fake()->state(),
            'address_postcode' => fake()->postcode(),
            'address_country' => fake()->country(),


        ];
    }
}
