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
        $product = Product::findOrFail($productId);
        $samplingsQueryBuilder = Sampling::query();

        $limit = $request->has('limit') && $request->limit < 1000 ? $request->limit : 1000;

        if ($request->date)
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '=', $request->date);
        }
        elseif ($request->start)
        {
            $samplingsQueryBuilder->whereDate('samplings.created_at', '>=', $request->start);

            if ($request->end)
            {
                $samplingsQueryBuilder->whereDate('samplings.created_at', '<=', $request->end);
            }
        }

        if ($request->generic_sensor_id)
        {
            $samplingsQueryBuilder->join('sensors', 'sensor_id', '=', 'sensors.id');
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
