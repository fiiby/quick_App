<?php 
namespace Database\Factories;

use App\Models\Leads;
use Illuminate\Database\Eloquent\Factories\Factory;

class LeadsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Leads::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'message' => $this->faker->sentence,
        ];
   }
} 