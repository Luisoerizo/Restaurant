<?php

namespace Database\Factories;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reservation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'persons' => $this->faker->randomDigitNot(0),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'client_name' => $this->faker->name(),
            'email' => $this->faker->email(),
            'reference' => $this->faker->bothify('#??##?#??##?#??'),

        ];
    }
}
