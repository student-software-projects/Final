<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $primaryKey='id';
    protected $table='vehiculos';
    protected $fillable=[
        'placa', 'color', 'marca', 'tipo', 'conductor_id','propietario_id'
    ];

    public function propietario(){
        return $this->belongsTo(Propietario::class);
    }
    public function conductor(){
        return $this->belongsTo(Conductor::class);
    }
}
