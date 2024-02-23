<?php

namespace Database\Factories;

use App\Models\Deal;
use App\Models\Organizations;
use App\Models\Contacts;
// use App\Models\Deals_Stages;
use Illuminate\Database\Eloquent\Factories\Factory;

class DealFactory extends Factory
{
/**
* The name of the factory's corresponding model.
*
* @var string
*/
protected $model = Deal::class;

/**
* Define the model's default state.
*
* @return array
*/
public function definition()
{
return [
'account_id' => Organizations::factory(),
'contact_id' => Contacts::factory(),
// 'stage' => Deals_Stages::factory(),
'value' => $this->faker->randomFloat(2, 100, 10000),
'probability' => $this->faker->numberBetween(1, 100),
'expected_close_date' => $this->faker->dateTimeBetween('+1 week', '+1 year')->format('Y-m-d'),
'notes' => $this->faker->text,
];
}
}
