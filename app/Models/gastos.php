<?php
//php artisan make:controller controlador1 
//php artisan make:model gastos 
//php artisan make:migration create_table_gastos --create gastos
//php artisan tinker //servidor de pruebas(insertar una prueba)

//php artisan make:migration create_table_gastos --create gastos //crear una tabla
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\detalles;

class gastos extends Model
{
    public function gastosDetalles(){
        // un gasto tiene muchos detalles
        return $this->hasMany(detalles::class);
    }
}
//php artisan make:migration create_column_descripcion2 --table gastos //Crear columnas