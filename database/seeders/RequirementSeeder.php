<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\requirement;

class RequirementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        requirement::truncate();

        $csvFile = fopen(public_path("data/data.csv"), "r");

        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                requirement::create([
                    "id" => $data['0'],
                    "number" => $data['1'],
                    "title" => $data['2'],
                    "element_id" => $data['3'],
                    "n0" => $data['4'],
                    "n1" => $data['5'],
                    "n2" => $data['6'],
                    "n3" => $data['7'],
                    "n4" => $data['8'],
                ]);
            }
            $firstline = false;
        }
        fclose($csvFile);
    }
}
