<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'nip' => $this->faker->randomNumber(9, true),
            'nik' => $this->faker->randomNumber(9, true),
            'email' => $this->faker->unique()->safeEmail(),
            'jabatan' => $this->faker->jobTitle(),
            'agama' => 'islam',
            'jk_user' => 'laki-laki',
            'email_verified_at' => now(),
            'role' => $this->faker->randomElement(['admin', 'user']),
            'password' => bcrypt('123'),
            'no_tel' => $this->faker->phoneNumber(),
            'no_hp' => $this->faker->phoneNumber(),
            'satuan_kerja' => $this->faker->company(),
            'alamat' => $this->faker->address(),
            'tempat_lahir' => $this->faker->city(),
            'tgl_lahir' => $this->faker->date(),
            'foto' => 'uploads/photos/default.png',
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function admin()
    {
        return $this->state([
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'nip' => '456'
        ]);
    }
    public function user()
    {
        return $this->state([
            'role' => 'user',
            'email' => 'user@gmail.com',
            'nip' => '123'
        ]);
    }
}