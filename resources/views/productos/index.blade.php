@extends('layouts.app')  
{{-- Extiende la plantilla principal "app.blade.php" ubicada en "resources/views/layouts/app.blade.php" --}}

@section('title', 'Lista de Productos')  

@section('content')  
{{-- Inicia la sección de contenido que se inyectará en la plantilla principal --}}

    <div class="d-flex justify-content-between align-items-center mb-3">  
        {{-- Contenedor flexible que separa el título y el botón de crear producto --}}

        <h1 class="text-primary">Lista de Productos</h1>  
        {{-- Muestra el título principal de la página --}}

        <a href="{{ route('productos.create') }}" class="btn btn-success">Crear Nuevo Producto</a>  
        {{-- Botón que redirige a la ruta de creación de productos --}}
    </div>

    <table class="table table-striped table-bordered">  
    {{-- Crea una tabla con estilos Bootstrap: filas alternadas (striped) y bordes (bordered) --}}

        <thead class="table-dark">  
        {{-- Encabezado de la tabla con fondo oscuro --}}

            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Acciones</th>
            </tr>
        </thead>

        <tbody>
            @foreach($productos as $producto)  
            {{-- Itera sobre la colección de productos pasados desde el controlador --}}

                <tr>
                    <td>{{ $producto->id }}</td>  
                    <td>{{ $producto->nombre }}</td>  
                    <td>${{ number_format($producto->precio, 2) }}</td>  
                    <td>{{ $producto->stock }}</td>  
                    <td>
                        <a href="{{ route('productos.edit', $producto) }}" class="btn btn-warning btn-sm">Editar</a>  
                        {{-- Botón para editar el producto, redirige a la ruta de edición --}}
                        
                        <form action="{{ route('productos.destroy', $producto) }}" method="POST" class="d-inline">  
                        {{-- Formulario para eliminar un producto con el método DELETE --}}

                            @csrf  
                            {{-- Token de seguridad de Laravel para evitar ataques CSRF --}}

                            @method('DELETE')  
                            {{-- Indica que este formulario debe ser tratado como una petición DELETE --}}

                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>  
                            {{-- Botón para eliminar el producto --}}
                        </form>
                    </td>
                </tr>
            @endforeach  
            {{-- Finaliza la iteración de productos --}}
        </tbody>
    </table>
@endsection  
