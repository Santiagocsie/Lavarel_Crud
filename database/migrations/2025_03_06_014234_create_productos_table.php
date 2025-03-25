<?php
// Etiqueta de apertura de PHP

// Importa la clase Migration, que permite crear y gestionar migraciones en Laravel
use Illuminate\Database\Migrations\Migration;

// Importa la clase Blueprint, que se usa para definir la estructura de las tablas en la base de datos
use Illuminate\Database\Schema\Blueprint;

// Importa la clase Schema, que proporciona métodos para manipular la base de datos (crear, modificar y eliminar tablas)
use Illuminate\Support\Facades\Schema;

// Se define una clase anónima que extiende de Migration
return new class extends Migration
{
    /**
     * Método que se ejecuta al aplicar la migración.
     * Crea la tabla "productos" con sus respectivas columnas.
     *
     * @return void
     */
    public function up()
    {
        // Se crea la tabla "productos"
        Schema::create('productos', function (Blueprint $table) {
            $table->id(); // Crea una columna "id" de tipo entero, clave primaria y autoincremental
            $table->string('nombre'); // Crea una columna "nombre" de tipo VARCHAR para almacenar el nombre del producto
            $table->decimal('precio', 8, 2); // Crea una columna "precio" de tipo DECIMAL con 8 dígitos en total y 2 decimales (Ej: 99999.99)
            $table->integer('stock'); // Crea una columna "stock" de tipo entero para almacenar la cantidad disponible de productos
            $table->timestamps(); // Crea las columnas "created_at" y "updated_at" para registrar la fecha y hora de creación y modificación
        });
    }

    /**
     * Método que se ejecuta al revertir la migración.
     * Elimina la tabla "productos" si existe.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos'); // Borra la tabla "productos" si existe para deshacer la migración
    }
};
