<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{   
	/*este codigo sirve para insertar a la BD.*/
    protected $fillable = ['code', 'fullname', 'date', 'is_active'];

    /*este codigo sirve para insertar con las foraneas si no queremos insertar ahi no es necesario este codigo.*/
    public function order(){
    	return $this->hasMany('App\Order');
    }
}
