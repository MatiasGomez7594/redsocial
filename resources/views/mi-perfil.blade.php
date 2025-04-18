<x-app-layout>
    <div class="max-w-4xl mx-auto mt-8 p-4 bg-white shadow rounded">
        <h1 class="text-2xl font-semibold mb-2">Mi Perfil</h1>
        <h1>{{ $usuario->name }}</h1>

        <p class="text-gray-600 mb-4">Te uniste hace {{ $usuario->created_at->diffForHumans() }}</p>

        <h2 class="text-xl font-semibold mt-6 mb-2">Mis publicaciones</h2>
        @forelse ($usuario->publicaciones as $publicacion)
            <div class="border p-4 rounded mb-4">
                <p class="text-gray-800">{{ $publicacion->contenido }}</p>
                <p class="text-sm text-gray-500">{{ $publicacion->created_at->diffForHumans() }}</p>

                @if ($publicacion->imgs->isNotEmpty())
                    <div class="mt-2 flex gap-2">
                        @foreach ($publicacion->imgs as $img)
                            <img src="{{ asset('storage/imagenes/' . $img->url_img) }}" class="w-32 rounded" alt="imagen">
                        @endforeach
                    </div>
                @endif
            </div>
        @empty
            <p class="text-gray-500">Aún no has creado publicaciones.</p>
        @endforelse
    </div>
</x-app-layout>



