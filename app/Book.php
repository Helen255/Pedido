<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
	/*este codigo sirve para insertar a la BD.*/
    protected $fillable = ['title', 'autor', 'pages', 'total_copies', 'avaliable_copies'];
    
    /*este codigo sirve para insertar con las foraneas si no tenemos foraneas no es necesario.*/   
	public function orderDetails(){
    	return $this->hasMany('App\OrderDetail');
    }
}
