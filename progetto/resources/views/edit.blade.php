<x-layout>
    <form action="{{ route('articles.update', ['article' => $article->id]) }}" method="POST" enctype="multipart/form-data"
        class="mt-5 mx-auto col-lg-6">
        @csrf
        @method('PUT')
        <h1>Modifica il tuo articolo</h1>
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title"
                value="{{ old('title', $article->title) }}">

            @error('title')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" name="description" class="form-control" id="description"
                value="{{ old('description', $article->description) }}">
            @error('description')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Categoria</label>
            <input type="text" name="category" class="form-control" id="category"
                value="{{ old('category', $article->category) }}">
            @error('category')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Immagine</label>
            <input type="file" name="image" class="form-control" id="image" value="{{ old('image') }}">
            @error('image')
                <div><span class="text-danger">{{ $message }}</span></div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva modifiche</button>


    </form>

</x-layout>
