@foreach ($comentarios as $comentario)
    @if (is_null($comentario->id_padre))
        <div>
            <strong>{{ $comentario->usuario->name }}</strong>: {{ $comentario->comentario }}
            
            @foreach ($comentario->respuestas as $respuesta)
                <div style="margin-left: 20px;">
                    <strong>{{ $respuesta->usuario->name }}</strong>: {{ $respuesta->comentario }}
                </div>
            @endforeach
        </div>
    @endif
@endforeach
