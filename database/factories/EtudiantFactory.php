<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etudiant;
use App\Models\Model;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' =>$this->faker->lastname(),
            'prenom' =>$this->faker->firstname(),
            'classe_id' => rand(1,6),
        ];
    }
}
