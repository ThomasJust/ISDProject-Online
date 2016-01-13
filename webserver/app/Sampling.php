<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Sampling
 *
 * @property integer $id
 * @property integer $sensor_id
 * @property integer $sampled
 * @property \Carbon\Carbon $created_at
 */
class Sampling extends Model
{
    //
		public $timestamps = false; //no elo timestamps here (updated_at not needed)
}
