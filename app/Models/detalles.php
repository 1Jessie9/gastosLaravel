<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gastos;

class detalles extends Model
{
    public function detallesGastos(){
        //un detalle solo un gasto(belogto)
        return $this->belongsTo(gastos::class);
    }
}
