<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="periodistas/create" class="btn btn-success">Agregar Periodista</a>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nombres</th>
                    <th scope="col">Apelidos</th>
                    <th scope="col">Edad</th>
                    <th scope="col">Especialidad</th>
                    <th scope="col">Numero de Celular</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($periodistas as $periodista)
                <tr>
                    <th scope="row">{{$periodista->id}}</th>
                    <td>{{$periodista->nombres}}</td>
                    <td>{{$periodista->apellidos}}</td>
                    <td>{{$periodista->edad}}</td>
                    <td>{{$periodista->especialidad}}</td>
                    <td>{{$periodista->numerocelular}}</td>
                    <td>
                        @if ($periodista->estado === '1')
                        <i class="fas fa-circle text-success"></i>
                        @else
                        <i class="fas fa-circle text-danger"></i>
                        @endif
                    </td>
                    <td>
                        <a href="/periodistas/{{$periodista->id}}/edit" class="btn btn-outline-secondary">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('periodistas.destroy', $periodista->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</x-app-layout>