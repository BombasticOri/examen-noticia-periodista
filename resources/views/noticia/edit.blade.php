<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <form action="/noticias/{{$noticia->id}}" method="POST">
        @csrf
        @method('PUT');
        <div class="mb-3">
            <label class="form-label">Pais</label>
            <input name="pais" type="text" class="form-control" value="{{$noticia->pais}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Ciudad</label>
            <input name="ciudad" type="text" class="form-control" value="{{$noticia->ciudad}}">
        </div>
        <div class="mb-3">
            <label class="form-label">Distrito</label>
            <input name="distrito" type="text" class="form-control" value="{{$noticia->distrito}}">
        </div>
        <label class="form-label">Periodista ID</label>
                    <select aria-describedby="periodista_id" class="form-select" name="periodista_id">
                    @if (!$noticia->periodista)
                        <option value="" selected disabled>Seleccione un Periodista</option>
                        @foreach ($periodistas as $periodista)
                        <option value="{{ $periodista->id }}">
                            {{ $periodista->nombres }}</option>
                        @endforeach
                        @else
                        @foreach ($periodistas as $periodista)
                        <option value="{{ $periodista->id }}" @if($noticia->periodista->id === $periodista->id)
                            selected='selected'
                            @endif>
                            {{ $periodista->nombres }}</option>
                        @endforeach
                        @endif
                    </select>
                    @error('periodista_id')
                    <div id="periodista_id" class="form-text text-danger">*{{$message}}</div>
                    @enderror
        <div class="float-end">
            <a href="/noticias" class="btn btn-info">Cerrar</a>
            <x-jet-danger-button type="submit">Guardar</x-jet-danger-button>
        </div>
    </form>
</x-app-layout>