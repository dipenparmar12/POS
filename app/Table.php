<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Table extends Model
{

    public function order(){
    	return $this->hasOne('App\Order');
    }

}
