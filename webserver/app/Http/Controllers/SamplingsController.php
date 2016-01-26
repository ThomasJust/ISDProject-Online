<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShowingSamplingsRequest;
use App\Product;
use App\Sampling;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SamplingsController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $productId
     * @param Requests\ShowingSamplingsRequest $request
     * @return \Illuminate\Http\Response
     */
    public function show($productId, ShowingSamplingsRequest $request)
    {
        Product::findOrFail($productId); // Just to throw a failure if the product is not found
        $samplingsQueryBuilder = Sampling::query();

        $dateFilter = false;

        $samplingsQueryBuilder->join('sensors', 'sensor_id', '=', 'sensors.id');
        $samplingsQueryBuilder->join('products', 'sensors.product_id', '=', 'products.id');
        $samplingsQueryBuilder->where('products.id', $productId);

        $limit = $request->has('limit') && $request->limit < 1000 ? $request->limit : 1000;

        if ($request->date)
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '=', $request->date);
            $dateFilter = true;
        }
        elseif ($request->exists("today"))
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '=', Carbon::today()->toDateString());
            $dateFilter = true;
        }
        elseif ($request->exists("yesterday"))
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '=', Carbon::today()->subDay()->toDateString());
            $dateFilter = true;
        }
        elseif ($request->start)
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '>=', $request->start);
            $dateFilter = true;

            if ($request->end)
            {
                $samplingsQueryBuilder->whereDate('samplings.created_at', '<=', $request->end);
                $dateFilter = true;
            }
        }

        if ( ! $dateFilter)
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '=', Carbon::today()->toDateString());
        }

        if ($request->generic_sensor_id)
        {
            $samplingsQueryBuilder->join('generic_sensors', 'sensors.generic_sensor_id', '=', 'generic_sensors.id');
            $samplingsQueryBuilder->where('generic_sensors.id', $request->generic_sensor_id);
        }

        $samplingsQueryBuilder->orderBy('samplings.created_at', 'desc');
        $samplingsQueryBuilder->take($limit);

        return $samplingsQueryBuilder->get(
            array(
                'samplings.id',
                'samplings.sensor_id',
                'samplings.sampled',
                'samplings.created_at'
            )
        );
    }
}
