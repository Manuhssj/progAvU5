<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    protected $fillable = [
        'price',
        'client_id',
        'fecha_entrada',
        'fecha_salida',
    ];

    public function client(){
        return $this->$belongsTo(Client::class); 
    }
}
