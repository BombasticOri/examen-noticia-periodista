<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/periodistas/{{$periodista->id}}" method="POST">
        @csrf
        @method('PUT');
        <div class="mb-3">
            <label class="form-label">Nombres</label>
            <input name="nombres" type="text" class="form-control" value="{{$periodista->nombres}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input name="apellidos" type="text" class="form-control" value="{{$periodista->apellidos}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input name="edad" type="number" class="form-control" value="{{$periodista->edad}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Especialidad</label>
            <input name="especialidad" type="text" class="form-control" value="{{$periodista->especialidad}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Numero de Celular</label>
            <input name="numerocelular" type="number" class="form-control" value="{{$periodista->numerocelular}}">
        </div>
        <div class="float-end">
            <a href="/periodistas" class="btn btn-info">Cerrar</a>
            <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
        </div>
    </form>
</x-app-layout>