@extends('layouts.app')  
@section('title', 'Crear Producto')  
@section('content')  

    <div class="card shadow p-4">  
    {{-- Contenedor con estilos de tarjeta, sombra y padding para mejorar la presentación --}}

        <h2 class="text-center text-success">Crear Producto</h2>  

        <form action="{{ route('productos.store') }}" method="POST">  
        {{-- Inicia el formulario, enviará datos a la ruta "productos.store" usando el método POST --}}
            @csrf  
            {{-- Token de seguridad de Laravel para evitar ataques CSRF --}}
            <div class="mb-3">  
            {{-- Grupo de formulario con margen inferior --}}
                <label class="form-label">Nombre</label>  
                {{-- Etiqueta para el campo de nombre --}}
                <input type="text" name="nombre" class="form-control" required>  
                {{-- Campo de entrada de texto para el nombre del producto, requerido --}}
            </div>
            <div class="mb-3">  
                <label class="form-label">Precio</label>  
                <input type="number" name="precio" step="0.01" class="form-control" required>  
                {{-- Campo de entrada numérica para el precio, con paso de 0.01 para decimales, requerido --}}
            </div>
            <div class="mb-3">  
                <label class="form-label">Stock</label>  
                <input type="number" name="stock" class="form-control" required>  
                {{-- Campo de entrada numérica para el stock del producto, requerido --}}
            </div>
            <button type="submit" class="btn btn-success w-100">Guardar</button>  
        </form>

    </div>
@endsection  



