<x-layout>
    

    <header>
        <div class="container-fluid books">
            <div class="row h-100 justify-content-center">
                <div class="row">
                    <h2 class="display-4 text-danger fw-bold text-center">Tutti i nostri Libri</h2>
                </div>
                @foreach ($books as $book)
                    <div class="col-12 col-md-3">
                       <x-card
                            :book="$book"

                            title="{{$book['title']}}"
                       />
                    </div>
                @endforeach
            </div>
        </div>
    </header>

</x-layout>