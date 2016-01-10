<?php

namespace App\Http\Controllers;

use App\GenericSensor;
use App\Product;
use App\Sensor;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    protected function validator(array $data)
    {
        return \Validator::make($data, [
            'id' => 'required|size:12|unique:products',
            'version' => 'required|max:255',
            'sensors' => 'required|array|exists:generic_sensors,id'
        ]);
    }

    public function create(Request $request) {
        $data = $request->all();
        $validator = $this->validator($data);

        dd($data);

        if ($validator->fails())
        {
            return $validator->messages();
        }

        $newProduct = Product::create([
            'id' => $data['id'],
            'version' => $data['version']
        ]);

        foreach ($data['sensors'] as $generic_sensor_id)
        {
            $newProduct->sensors()->save(
                new Sensor([
                    'generic_sensor_id' => $generic_sensor_id
                ])
            );
        }

        return $newProduct;
    }
}
