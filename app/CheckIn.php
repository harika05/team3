<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class CheckIn extends Model {

    public function item() 
    {
        return $this->belongsTo('App\Item');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }
}
