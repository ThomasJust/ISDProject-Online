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

<<<<<<< HEAD
        DB::table('generic_sensors')->insert([
			'alias' => 'Carbon-Dioxide',
			'name' => 'MD62',
			'symbol' => 'CO^2',
			'unit' => 'ppm',
			'range' => '300-2500',
			'producer' => 'Hanwei Electronics',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Carbon-Monoxide',
			'name' => 'MQ7',
			'symbol' => 'CO',
			'unit' => 'ppm',
			'range' => '100-4000',
			'producer' => 'Hanwei Electronics',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Volume',
			'name' => 'MAX4465',
			'symbol' => 'Vol',
			'unit' => 'dB',
			'range' => '0-100',
			'producer' => 'Challenge Electronics',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Light intensity',
			'name' => 'TSL2561',
			'symbol' => 'Ev',
			'unit' => 'Lux',
			'range' => '50-500',
			'producer' => 'TAOS',
=======
        App\GenericSensor::create([
            'name' => 'ADXL330 Analog Devices Accelerometer',
            'alias' => 'Accelerometer',
            'unit' => 'G',
        ]);

        App\GenericSensor::create([
            'name' => 'BME280 Bosch combined humidity and pressure sensor',
            'alias' => 'Humidity',
            'unit' => '',
        ]);

        App\GenericSensor::create([
            'name' => 'BME280 Bosch combined humidity and pressure sensor',
            'alias' => 'Pressure',
            'unit' => 'kPa',
        ]);

        App\GenericSensor::create([
            'name' => 'BME280 Bosch combined humidity and pressure sensor',
            'alias' => 'Temperature',
            'unit' => '°C',
>>>>>>> b51a384a905271dbb232aef23e0745e8c7f7f16e
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Acceleration',
			'name' => 'ADXL330',
			'symbol' => 'a',
			'unit' => 'g',
			'range' => '0-5',
			'producer' => 'Analog Devices',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Temperature',
			'name' => 'BME280',
			'symbol' => 'T',
			'unit' => '°C',
			'range' => '0-40',
			'producer' => 'Bosch',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Humidity',
			'name' => 'BME280',
			'symbol' => 'Hr',
			'unit' => '%',
			'range' => '0-100',
			'producer' => 'Bosch',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Pressure',
			'name' => 'BME280',
			'symbol' => 'P',
			'unit' => '3hPa',
			'range' => '300-2200',
			'producer' => 'Bosch',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Smoke',
			'name' => 'Optical',
			'symbol' => 'S',
			'unit' => '',
			'range' => 'Binary',
			'producer' => '-',
        ]);
		
		DB::table('generic_sensors')->insert([
			'alias' => 'Buzzer',
			'name' => 'KEYES S',
			'symbol' => 'B',
			'unit' => '',
			'range' => 'Binary',
			'producer' => '-',
        ]);
		
    }
}
