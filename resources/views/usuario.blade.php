<x-app-layout>
<div class="max-w-3xl mx-auto mt-6">
    <h1 class="text-2xl font-bold mb-4">{{ $usuario->name }}</h1>
    <p class="text-gray-600">Perfil de usuario</p>

    <h2 class="mt-6 text-xl font-semibold">Publicaciones</h2>

    @if ($usuario->publicaciones && $usuario->publicaciones->count())
        @foreach ($usuario->publicaciones as $publicacion)
            <div class="mt-4 border p-4 rounded bg-white shadow">
                <p class="text-sm text-gray-500">{{ $publicacion->created_at->diffForHumans() }}</p>
                <p class="mt-2">{{ $publicacion->contenido }}</p>

                {{-- Si más adelante querés mostrar imágenes --}}
                {{-- @foreach ($publicacion->imgs as $img)
                    <img src="{{ asset('imgs/' . $img->url_img) }}" class="mt-2 rounded" width="300">
                @endforeach --}}
            </div>
        @endforeach
    @else
        <p class="mt-2 text-gray-500">Este usuario aún no tiene publicaciones.</p>
    @endif
</div>
</x-app-layout>
