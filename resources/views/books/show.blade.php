<x-layout>

    <x-border>
        <h1>{{ $book->title }}</h1>

        <p class="lead">
            {{ $book->description ? $book->description : "No Description" }}
        </p>

    </x-border>

</x-layout>
