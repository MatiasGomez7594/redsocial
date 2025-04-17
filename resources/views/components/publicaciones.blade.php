@foreach ($publicaciones as $publicacion)
    @foreach($imgs_publicacion as $img)
        @if ($publicacion->id == $img->id_publicacion)
            <div>
                <img src="{{$img->url_img}}" alt="">
            </div>
        @endif
    @endforeach
@endforeach
