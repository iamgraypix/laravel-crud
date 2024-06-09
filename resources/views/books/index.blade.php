<x-layout>
    <x-status />
    <h1 class="text-center">e-Book Library System</h1>
    <x-border>
        <table class="table table-striped">
            <thead>
                <tr>
                    {{-- <th scope="col">link</th> --}}
                    <th scope="col">Book Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Privacy</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($books as $book)
                    <tr>
                        {{-- <th scope="row">
                    <a href="#">
                      {{ $book->id }}
                    </a>
                  </th> --}}
                        <td>
                            <a href="/show/{{ $book->id }}">
                                {{ $book->title }}
                            </a>
                        </td>
                        <td>{{ $book->author }}</td>
                        <td>
                            Private
                            <i class="bi bi-person-fill"></i>
                        </td>
                        <td>
                            <a href="/edit/{{ $book->id }}" class="btn btn-warning">
                                Edit
                            </a>

                            <form class="d-inline" action="/delete/{{ $book->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    Delete
                                </button>
                            </form>
                            
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="text-center mb-2">
            <a class="btn btn-success" href="/create">
                Add new book
            </a>

        </div>
    </x-border>
</x-layout>
