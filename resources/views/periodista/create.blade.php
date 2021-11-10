<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/periodistas" method="POST">
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombres</label>
            <input name="nombres" type="text" class="form-control" wire:model="nombres">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellidos</label>
            <input name="apellidos" type="text" class="form-control" wire:model="apellidos">
        </div>
        <div class="mb-3">
            <label class="form-label">Edad</label>
            <input name="edad" type="number" class="form-control" wire:model="edad">
        </div>
        <div class="mb-3">
            <label class="form-label">Especialidad</label>
            <input name="especialidad" type="text" class="form-control" wire:model="especialidad">
        </div>
        <div class="mb-3">
            <label class="form-label">Numero de Celular</label>
            <input name="numerocelular" type="number" class="form-control" wire:model="numerocelular">
        </div>
        <div class="float-end">
            <a href="/periodistas" class="btn btn-info">Cerrar</a>
            <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
        </div>
    </form>
</x-app-layout>