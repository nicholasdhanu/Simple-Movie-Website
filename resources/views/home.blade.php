@extends('layouts')

@section('content')

@foreach ($movies as $genre => $value)



        <div class="d-flex flex-column">

            <div class="d-flex episode-text-title m-5">
                <h1-cust>{{$genre}}</h1-cust>
            </div>

            <div class="d-flex flex-row justify-content-center">

                @foreach ($value as $item)
                <div class="card movie_card">

                    <a href="/details/{{$item->id}}">
                        <img src="{{asset("assets/$item->photo")}}" class="img-fluid" alt="...">
                    </a>

                    <div class="card-body d-flex justify-content-center">
                      <div class="card-title main-card-font d-flex">
                          {{$item->title }}
                      </div>
                     <div class="card-body d-flex pr-0">
                        <span class="main-card-font d-flex justify-content-end mb-3">
                            <i class="fas fa-star" style="color: #ffffff"></i>
                            {{$item->rating}}
                       </span>
                     </div>

                    </div>
                  </div>
                @endforeach

            </div>

        </div>


@endforeach
@endsection()
