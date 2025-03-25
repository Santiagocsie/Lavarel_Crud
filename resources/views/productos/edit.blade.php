@extends('layouts.app')  
@section('title', 'Editar Producto')  
@section('content')  

    <div class="card shadow p-4">  
    {{-- Contenedor con estilo de tarjeta, sombra y padding para mejorar la presentación --}}

        <h2 class="text-center text-primary">Editar Producto</h2>  
        {{-- Título centrado en color azul indicando la acción de edición --}}

        <form action="{{ route('productos.update', $producto) }}" method="POST">  
        {{-- Formulario para actualizar el producto, enviando datos a la ruta "productos.update" con el producto específico --}}

            @csrf @method('PUT')  
            {{-- Token CSRF para seguridad y método PUT para indicar actualización de datos --}}

            <div class="mb-3">  
            {{-- Grupo de formulario con margen inferior --}}

                <label class="form-label">Nombre</label>  
                <input type="text" name="nombre" value="{{ $producto->nombre }}" class="form-control" required>  
                {{-- Campo de entrada para nombre, de texto con el valor actual del nombre del producto, requerido --}}
            </div>

            <div class="mb-3">  
                <label class="form-label">Precio</label>  
                <input type="number" name="precio" step="0.01" value="{{ $producto->precio }}" class="form-control" required>  
                {{-- Campo numérico para el precio, mostrando el valor actual del producto con decimales, requerido --}}
            </div>

            <div class="mb-3">  
                <label class="form-label">Stock</label>  
                <input type="number" name="stock" value="{{ $producto->stock }}" class="form-control" required>  
                {{-- Campo numérico para el stock del producto, mostrando el valor actual, requerido --}}
            </div>

            <button type="submit" class="btn btn-primary w-100">Actualizar</button>  
            {{-- Botón de envío de color azul con ancho completo para actualizar el producto --}}
        </form>
    </div>
@endsection  

