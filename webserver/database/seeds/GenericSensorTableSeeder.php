<?php

use Illuminate\Database\Seeder;

class GenericSensorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates types of used sensors
        //For each measured value one entry

        DB::table('generic_sensors')->insert([
            'name' => 'ADXL330 Analog Devices Accelerometer',
            'alias' => 'Accelerometer',
            'unit' => 'G',
        ]);

        DB::table('generic_sensors')->insert([
            'name' => 'BME280 Bosch combined humidity and pressure sensor',
            'alias' => 'Humidity',
            'unit' => '',
        ]);

        DB::table('generic_sensors')->insert([
            'name' => 'BME280 Bosch combined humidity and pressure sensor',
            'alias' => 'Pressure',
            'unit' => '',
        ]);

        DB::table('generic_sensors')->insert([
            'name' => 'BME280 Bosch combined humidity and pressure sensor',
            'alias' => 'Temperature',
            'unit' => '°C',
        ]);

    }
}
