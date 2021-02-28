<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'propietarios';
    protected $fillable = [
        'documento', 'primer_nombre', 'segundo_nombre', 'apellido', 'direccion', 'telefono', 'ciudad'
    ];
    public function vehiculo(){

        return $this->hasMany(Vehiculo::class);
    }
}
