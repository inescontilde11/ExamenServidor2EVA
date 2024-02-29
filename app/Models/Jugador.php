<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $table = "jugadores";
    public $timestamps = false;
    protected $fillable = ['dni', 'nombre', 'email', 'nick', 'password'];

    public static function findDni(string $dni)
    {
        foreach (Jugador::all() as $jugador) {
            if($jugador->dni == $dni) {
                return $jugador;
            }
        }
    }

    public static function findEmail(string $email)
    {
        foreach (Jugador::all() as $jugador) {
            if ($jugador->email == $email) {
                return $jugador;
            }
        }
    }


}
