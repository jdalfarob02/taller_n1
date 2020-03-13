<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
        protected $primaryKey = 'id_producto';
        protected $table = 'producto';
          public $incrementing = false; //anulacion del autoincremento
        protected $fillable = [
                'nombre',
                'fecha',
                'descripcion',
                'user_id',
                'status'
            
       

        ];
        
        protected $casts = [
            'options' => 'array',
        ];

        protected $dates = [
            'created_at',
            'updated_at',
            'deleted_at'
        ];


        protected $appends = ['full_name', 'productos: id,nombre'];

        
        public function user(){
            return $this->belongsTo(App\User::class);
        }


              
        

    

                     
}
