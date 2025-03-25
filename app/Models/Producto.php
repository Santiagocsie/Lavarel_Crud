<?php

namespace App\Models; // Define el espacio de nombres del modelo. Laravel buscará este modelo en "app/Models".

// Importa el trait HasFactory, que permite crear instancias del modelo usando fábricas
use Illuminate\Database\Eloquent\Factories\HasFactory;

// Importa la clase Model, que permite que Producto herede las funcionalidades de un modelo Eloquent
use Illuminate\Database\Eloquent\Model;

// Define la clase Producto, que representa la tabla "productos" en la base de datos
class Producto extends Model
{
    use HasFactory; // Habilita el uso de fábricas para generar registros en la base de datos de forma automatizada

    protected $fillable = ['nombre', 'precio', 'stock'];
}
