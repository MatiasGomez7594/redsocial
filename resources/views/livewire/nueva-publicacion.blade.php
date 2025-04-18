<div>
    {{-- Formulario para publicar --}}
    @auth
        <form wire:submit.prevent="nuevaPublicacion" class="mt-4">
            <textarea wire:model.defer="contenidoPublicacion" style="width:500px" class="p-2 border rounded" rows="2" placeholder="Escribe algo..."></textarea>

            <div class="mt-2">
                <input wire:model="imgsPublicacion" type="file" multiple id="imgPublicacion" accept="image/*">
                @error('imgsPublicacion.*') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
            </div>

            {{-- Vista previa de las imágenes --}}
            <div class="flex flex-wrap gap-2 mt-3">
                @foreach ($imgsPublicacion as $img)
                    <div class="relative">
                        <img src="{{ $img->temporaryUrl() }}" class="w-32 h-32 object-cover rounded border" alt="Vista previa">
                    </div>
                @endforeach
            </div>

            <button type="submit" class="mt-3 px-4 py-1 bg-indigo-500 text-white rounded hover:bg-indigo-700">
                Aceptar
            </button>
        </form>
    @else
        <p class="mt-4 text-sm text-gray-600">Debes iniciar sesión para publicar.</p>
    @endauth
</div>
