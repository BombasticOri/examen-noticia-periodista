<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <a href="noticias/create" class="btn btn-success">Agregar Noticia</a>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Pais</th>
                    <th scope="col">Ciudad</th>
                    <th scope="col">Distrito</th>
                    <th scope="col">Periodista</th>
                    <th scope="col" colspan="2">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($noticias as $noticia)
                <tr>
                    <th scope="row">{{$noticia->id}}</th>
                    <td>{{$noticia->pais}}</td>
                    <td>{{$noticia->ciudad}}</td>
                    <td>{{$noticia->distrito}}</td>
                    @if ($noticia->periodista_id)
                    <td><a href="">({{$noticia->periodista_id}}) {{$noticia->periodista->nombres}}</a></td>
                    @else
                    <td>Ningun Periodista</td>
                    @endif
                    <td>
                        <a href="/noticias/{{$noticia->id}}/edit" class="btn btn-outline-secondary">Editar</a>
                    </td>
                    <td>
                        <form action="{{route('noticias.destroy', $noticia->id)}}" method="POST">
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