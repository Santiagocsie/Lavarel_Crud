<?php

namespace App\Http\Controllers; // Define el espacio de nombres del controlador, ubicado en "app/Http/Controllers"
use Illuminate\Http\Request; // Importa la clase Request para manejar datos de formularios y solicitudes HTTP
use App\Models\Producto; // Importa el modelo Producto para interactuar con la base de datos

// Define la clase ProductoController, que maneja las operaciones CRUD de los productos
class ProductoController extends Controller
{
    
    //Muestra una lista de todos los productos.

    public function index()
    {
        $productos = Producto::all(); // Obtiene todos los productos de la base de datos
        return view('productos.index', compact('productos')); // Retorna la vista 'productos.index' y le pasa los productos
    }

    // Muestra el formulario para crear un nuevo producto.

    public function create()
    {
        return view('productos.create'); // Retorna la vista 'productos.create' para ingresar datos de un nuevo producto
    }

    // Almacena un nuevo producto en la base de datos.

    public function store(Request $request)
    {
        Producto::create($request->all()); // Crea un nuevo producto con los datos enviados en la solicitud
        return redirect()->route('productos.index'); // Redirige a la lista de productos
    }
    
    // Muestra los detalles de un producto específico.

    public function show(Producto $producto)
    {
        return view('productos.show', compact('producto')); // Retorna la vista 'productos.show' con los detalles del producto
    }

     // Muestra el formulario para editar un producto existente.

    public function edit(Producto $producto)
    {
        return view('productos.edit', compact('producto')); // Retorna la vista 'productos.edit' con los datos del producto a editar
    }

    // Actualiza un producto en la base de datos.

    public function update(Request $request, Producto $producto)
    {
        $producto->update($request->all()); // Actualiza el producto con los nuevos datos enviados en la solicitud
        return redirect()->route('productos.index'); // Redirige a la lista de productos
    }

    // Elimina un producto de la base de datos.

    public function destroy(Producto $producto)
    {
        $producto->delete(); // Elimina el producto de la base de datos
        return redirect()->route('productos.index'); // Redirige a la lista de productos
    }
}
