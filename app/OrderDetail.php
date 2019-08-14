<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    /*este codigo sirve para describir la tabla que necesitamos. y este modelo es de una tabla hijo*/
    // protected $table = 'orders';
     
     /*aqui los campos que tiene la tabla.*/
     protected $fillable = ['book_id', 'order_id', 'quantity'];
     
     /*este codigo sirve para desirle que la funcion que quiero es la del book.*/
     public function book(){
    	return $this->belongsTo('App\Book');
    }

    /*aqui describo que la funcion orderDetail es la que quiero porque con esa tabla tiene relacion.*/
     public function order(){
    	return $this->belongsTo('App\Order');
    }
}
