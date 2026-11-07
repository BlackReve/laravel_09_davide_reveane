<x-layout>
    
    <header>
        <div class="container-fluid books">
            <div class="row h-100 justify-content-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center">Dettaglio del libro: {{$books['title']}}</h2>
                </div>
               <div class="col-12 col-md-6 text-white d-flex flex-column justify.content-center aling-items-center">
                    <h3>Titolo: {{$books['title']}}</h3>
                    <h4>Autore: {{$books['author']}}</h4>
                    <p>Genere: {{$books['genre']}}</p>
               </div>
               <div class="col-12 col-md-6 d-flex justify-content-center">
                    <img src="{{$books['img']}}" alt="poster di {{$books['title']}}">
               </div>
            </div>
        </div>
    </header>


</x-layout>