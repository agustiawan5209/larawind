<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_stock_produk'=> $this->faker->numerify('KSP####'),
            'tgl_stock_produk'=> $this->faker->dateTimeInInterval('-20 week', '+3 days'),
            'jumlah_stock_produk'=> $this->faker->randomNumber(3, true),
        ];
    }
}
