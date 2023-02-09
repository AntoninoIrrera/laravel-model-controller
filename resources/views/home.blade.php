@extends("layouts.app")


@section("main-content")

<main class="bg-dark">
    <div class="container">
        <div class="row pt-5">

            @foreach($movies as $movie)
            <div class="col-4 mb-3">
                <div class="card">
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text">Data: {{$movie->date}}, Voto: {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>
</main>


@endsection