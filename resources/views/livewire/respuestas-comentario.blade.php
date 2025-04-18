<section>
        {{-- Formulario para responder --}}
        @auth
        <form wire:submit.prevent="enviarRespuesta" class="mt-4">
            {{-- <p>Usuario logueado: {{ Auth::user()->name ?? 'No logueado' }}</p>--}}
            <textarea wire:model.defer="respuestaNueva"  style="width:300px" class=" p-2 border rounded" rows="2" placeholder="Escribe una respuesta..."></textarea>
            <button type="submit" class="mt-2 px-4 py-1 bg-indigo-500 text-black rounded hover:bg-blue-700">
                Responder
            </button>
        </form>
    @else
        <p class="mt-4 text-sm text-gray-600">Debes iniciar sesión para comentar.</p>
    @endauth
    <h5 class="ms-4 mt-1 font-semibold">respuestas</h5>

    @foreach ($comentario->respuestas as $respuesta)
        <div class="ms-4 mt-1 text-sm text-gray-700 border-l ps-2">
            <p><strong>{{ $respuesta->usuario->name }}</strong> {{ $respuesta->contenido }}</p>
            <p>{{$respuesta->created_at->diffForHumans() }}</p>
        </div>
    @endforeach

</section>

