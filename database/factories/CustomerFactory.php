<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $tel = str_replace('-', '', $this->faker->phoneNumber);
        $address = mb_substr($this->faker->address, 9);
        // 電話番号-> ハイフンを削除
        // 住所-> 郵便番号と半角スペースをカット
        // ↑リターンする前に予め編集しておく
        // php.netで検索

        return [
            'name' => $this->faker->name,
            'kana' => $this->faker->kanaName,
            'tel' => $tel,
            'email' => $this->faker->email,
            'postcode' => $this->faker->postcode,
            'address' => $address,
            'birthday' => $this->faker->dateTime,
            'gender' => $this->faker->numberBetween(0, 2),
            'memo' => $this->faker->realText(50),
        ];
        // FakerとFactoryを使うと大量のデータを簡単に作ることができる
        // Fakerは「Faker チートシート」で検索
    }
}
