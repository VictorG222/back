<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UsuarioFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            // VALORES ALEATORIOS
            'nombre'=> fake()->name(),
            'edad'=> fake()->numberBetween(1, 100),
            'password'=> Hash::make(Str::random()),
            // 'password'=> Hash::make('dwevwclservervr'),
            'email' => fake()->safeEmail(),


            // VALORES FIJOS
            // 'nombre'=>'cesar',
            // 'edad'=> 25,
            // 'password'=> '465162',
            // 'email' => 'cesar@gmail.com'. Str::ramdom(10)
        ];
    }
}
