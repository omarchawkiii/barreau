<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }
    public function superAdmin()
    {
        return $this->state(function (array $attributes) {
            // Assurez-vous que le rôle SuperAdmin existe

            $user =[
                'name' => 'SuperAdmin',
                'email' => 'superadmin@example.com',
                'password' => bcrypt('12345678') // Mot de passe par défaut
            ];
            // Assigner le rôle à l'utilisateur


            return $user;
        });
    }

    /**
     * Créer un utilisateur avec le rôle Lawyer
     *
     * @return \Illuminate\Database\Eloquent\Factories\Factory
     */
    public function lawyer()
    {
        return $this->state(function (array $attributes) {
            // Assurez-vous que le rôle Lawyer existe

            $user = [
                'name' => 'Lawyer',
                'email' => 'lawyer@example.com',
                'password' => bcrypt('12345678') // Mot de passe par défaut
            ];
            // Assigner le rôle à l'utilisateur


            return $user;
        });
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
