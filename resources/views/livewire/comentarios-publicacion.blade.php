<div>
    {{-- Formulario para comentar --}}
    @auth
        <form wire:submit.prevent="enviarComentario" class="mt-4">
            <p>Usuario logueado: {{ Auth::user()->name ?? 'No logueado' }}</p>
            <textarea wire:model.defer="comentarioNuevo"  style="width:300px" class=" p-2 border rounded" rows="2" placeholder="Escribe un comentario..."></textarea>
            <button type="submit" class="mt-2 px-4 py-1 bg-indigo-500 text-black rounded hover:bg-blue-700">
                Comentar
            </button>
        </form>
    @else
        <p class="mt-4 text-sm text-gray-600">Debes iniciar sesión para comentar.</p>
    @endauth

    <h4 class="font-semibold">Comentarios</h4>
    @foreach ($publicacion->comentarios as $comentario)
        <div class="mt-2">
            <div class=" mt-1 text-md text-black-700 border-l ps-2">
                <p><strong>{{ $comentario->usuario->name }}</strong> {{ $comentario->contenido }}</p>
                <p class="mt-1 text-sm text-gray-700 border-l ps-2">{{$comentario->created_at->diffForHumans() }}</p>
            </div>
            {{-- Respuestas a este comentario --}}
            <livewire:respuestas-comentario :comentario="$comentario" :key="$comentario->id" />
        </div>
    @endforeach
</div>
