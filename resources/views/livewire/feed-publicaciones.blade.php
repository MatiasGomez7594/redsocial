<section>
@foreach ($publicaciones as $publi)
    <div class="mb-4 border p-2 rounded shadow">
        <p><strong>{{ $publi->usuario->name }}</strong> publicó:</p>
        <p>{{ $publi->contenido }}</p>

        @if ($publi->imgs->count())
            <div class="grid grid-cols-2 gap-2 mt-2">
                @foreach ($publi->imgs as $img)
                    <img src="{{ asset('imgs/' . $img->url_img) }}" alt="Imagen publicación" class="w-full rounded" />
                @endforeach
            </div>
        @endif
    </div>
@endforeach
</section>
