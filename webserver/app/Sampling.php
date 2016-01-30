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
<<<<<<< HEAD
    //
		public $timestamps = false; //no elo timestamps here (updated_at not needed)
=======
    protected $fillable = ['sensor_id', 'sampled', 'created_at'];

    public function sensor() {
        return $this->belongsTo('App\Sensor');
    }
>>>>>>> b51a384a905271dbb232aef23e0745e8c7f7f16e
}
