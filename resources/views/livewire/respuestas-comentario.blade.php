<section>
    <h5 class="ms-4 mt-1 font-semibold">respuestas</h5>

    @foreach ($comentario->respuestas as $respuesta)
        <div class="ms-4 mt-1 text-sm text-gray-700 border-l ps-2">
            <p><strong>{{ $respuesta->usuario->name }}</strong> {{ $respuesta->contenido }}</p>
            <p>{{$respuesta->created_at->diffForHumans() }}</p>
        </div>
    @endforeach

</section>

