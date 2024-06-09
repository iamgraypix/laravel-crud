<x-layout>
    <a href="/">Back</a>
    <x-border class="p-5">
        <h1 class="text-center">Create New Book</h1>
        <form class="row g-3" method="POST" action="/store">
            @csrf
            @method('POST')
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Book Title</label>
                <input value="{{ old('title') }}" name="title" type="text" class="form-control" id="inputEmail4">

                @error('title')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror
                {{-- Validate --}}
                {{-- @if ($errors->first('b_title'))
                    <p class="text-danger">Book title is required!</p>
                @endif --}}

            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">Author of the Book</label>
                <input value="{{ old('author') }}" name="author" type="text" class="form-control"
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
                {{ old('description') }}
                </textarea>

                {{-- Validate --}}
                @error('description')
                    <p class="text-danger">
                        {{ $message }}
                    </p>
                @enderror

            </div>

            <div class="col-12 text-center">
                <button type="submit" class="btn-lg btn btn-success">
                    Create
                </button>
            </div>
        </form>
    </x-border>

</x-layout>
