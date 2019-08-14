<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	/*este codigo sirve para describir la tabla que necesitamos. y este modelo es de una tabla hijo*/
 //   protected $table = 'order_detail';
    
    /*aqui los campos que tiene la tabla.*/
    protected $fillable = [ 'client_id', 'user_information', 'deliver_date', 'delivery_time', 'return_date', 'state', 'order_number'];
   
    /*este codigo sirve para desirle que la funcion que quiero es la del client.*/
    public function client(){
    	return $this->belongsTo('App\Client');
    }
    
    /*aqui describo que la funcion ordeDetail es la que quiero porque con esa tabla tiene relacion.*/
    public function order(){
    	return $this->belongsTo('App\Order');
    }
}


 
           