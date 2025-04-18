<section>
    @foreach ($publicaciones as $publicacion)
        <div class="mb-6 border p-4 rounded">
            @php
                // Verifica si es la publicación del usuario logueado
                $esMiPerfil = Auth::check() && Auth::id() === $publicacion->usuario->id;
            @endphp
            <p>
                <strong>
                    <!-- Verifica si es el perfil propio o de otro usuario y genera el enlace correctamente -->
                    <a href="{{ $esMiPerfil ? route('mi.perfil') : route('ver.usuario', ['id' => $publicacion->usuario->id]) }}" 
                        class="text-blue-600 hover:underline">
                        {{ $publicacion->usuario->name }}
                    </a>
                </strong>
            </p>
            <p>{{ $publicacion->created_at->diffForHumans() }}</p>
            <p>{{ $publicacion->contenido }}</p>

            {{-- Imágenes si hay --}}
            @foreach ($publicacion->imgs as $img)
                <img src="{{ asset('storage/imagenes/' . $img->url_img) }}" alt="Imagen" class="my-2 rounded" width="300">
            @endforeach

            {{-- Comentarios --}}
            <div class="mt-4 ps-4 border-l">
                <livewire:comentarios-publicacion :publicacion="$publicacion" :key="$publicacion->id" />
            </div>
        </div>
    @endforeach
</section>
