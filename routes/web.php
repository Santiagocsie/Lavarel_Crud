
<?php

use Illuminate\Support\Facades\Route; // Importa la clase Route, que permite definir rutas en Laravel
use App\Http\Controllers\ProductoController; // Importa el controlador ProductoController, que gestionará las operaciones CRUD de productos

// Redirigir la raíz "/" a la lista de productos
Route::get('/', function () {
    return redirect()->route('productos.index');
});
// Define un conjunto de rutas RESTful para el recurso 'productos' utilizando ProductoController
Route::resource('productos', ProductoController::class);