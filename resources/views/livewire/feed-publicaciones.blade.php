<section>
    @foreach ($publicaciones as $publicacion)
    <div class="mb-6 border p-4 rounded">
        <p><strong>{{ $publicacion->usuario->name }}</strong></p>
        <p>{{$publicacion->created_at->diffForHumans() }}</p>
        <p>{{ $publicacion->contenido }}</p>

        {{-- Imágenes si hay --}}
        @foreach ($publicacion->imgs as $img)
            <img src="{{ asset('imgs/' . $img->url_img) }}" alt="Imagen" class="my-2 rounded" width="300">
        @endforeach

        {{-- Comentarios --}}
        <div class="mt-4 ps-4 border-l">
            <livewire:comentarios-publicacion :publicacion="$publicacion" :key="$publicacion->id" />
        </div>
    </div>
@endforeach

</section>
