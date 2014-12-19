<?php

// Composer: "fzaninotto/faker": "v1.3.0"
    use Faker\Factory as Faker;

    class TicketsTableSeeder extends Seeder {

        public function run()
        {
            $faker = Faker::create();

            foreach (range(1, 10) as $index) {
                Ticket::create([
                    "id"          => $faker->numberBetween(1, 100),
                    "customer_id" => $faker->numberBetween(1, 100),
                    "category_id" => $faker->numberBetween(1, 100),
                    "assigned"    => $faker->numberBetween(0, 1),
                    "employee_id" => $faker->numberBetween(1999, 9012),
                    "subject"     => $faker->sentence(1),
                    "body"        => $faker->paragraph(4),
                ]);
            }
        }

    }