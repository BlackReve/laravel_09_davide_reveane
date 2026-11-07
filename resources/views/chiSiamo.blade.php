<x-layout>
   

    <header>
        <div class="container-fluid header">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="col-6">
                    <h2 class="text-danger text-center">CHI SIAMO</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora quibusdam aspernatur tenetur
                        odio quod pariatur officiis cumque sapiente molestiae. Porro, eum doloribus. Debitis ratione
                        porro dolorem corporis unde eos inventore.</p>
                </div>
                <div class="col-6">
                    <img src="/media/team.jpg" alt="foto libri" class="shadow rounded">
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container userHeight">
            <div class="row h-100 justify-content-around align-items-center">
                <div class="row">
                    <h2 class="display-5 text-white text-center">tutti i nostri libri</h2>
                </div>
                @foreach ($users as $user)
                    <div class="col-12 md-4">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5 class="card-title">{{$user['name']}} {{$user['surname']}}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{$user['role']}}</h6>
                                <a href="{{route('chiSiamoDetail', ['name'=>$user['name']])}}" class="card-link">Leggi di più</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

</x-layout>