<x-layout>
    <a href="/">Back</a>
    <x-border class="p-5">
        <h1 class="text-center">Edit Book</h1>
        <form class="row g-3" method="POST" action="/update/{{ $book->id }}">
            @csrf
            @method('PUT')
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Book Title</label>
                <input value="{{ $book->title }}" name="title" type="text" class="form-control" id="inputEmail4">

                {{-- Validate --}}
                @error('title')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Author of the Book</label>
                <input value="{{ $book->author }}" name="author" type="text" class="form-control"
                    id="inputPassword4">

                {{-- Validate --}}
                @error('author')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div class="col-12">
                <label for="floatingTextarea">Description</label>
                <textarea style="height: 150px" name="description" class="form-control" placeholder="Optional" id="floatingTextarea">
                {{ $book->description }}
                </textarea>
            </div>
            
            @error('description')
                <p class="text-danger">
                    {{ $message }}
                </p>
            @enderror

            <div class="col-12 text-center">
                <button type="submit" class="btn-lg btn btn-warning">
                    Update
                </button>
            </div>
        </form>
    </x-border>

</x-layout>
