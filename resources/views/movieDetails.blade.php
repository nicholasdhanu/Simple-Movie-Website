@extends('layouts')
@section('content')

<div class="container">

    <div class="d-flex flex-column justify-content-center">
        <div class="d-flex justify-content-center p-4">
            <img class="d-flex align-items-center detail-border-img image-thumb"
                src="{{asset("assets/$movieDetails->photo")}}" alt="">
        </div>

        <div class="card text-center d-flex justify-content-center m-4">

            <div class="card-body card-detail-title text-center blue-font">
                {{$movieDetails->title}}
            </div>

            <div class="card-body card-text text-center card-content">
                {{$movieDetails->description}}
            </div>

            <div class="card-body card-text card-content">
                <p class="">Rating : {{$movieDetails->rating}}</p>
            </div>
        </div>

        <div class="list-group list-group-flush d-flex justify-content-center">
            <span class="d-flex episode-text-title mb-4">
               <h1-cust>Episode</h1-cust>
            </span>
            @foreach ($episodeList as $item)
            <div class="list-group-item main-card-font ">
                {{$item->episode}}
            </div>
            <div class="list-group-item main-card-font2 ">
                {{$item->title}}
            </div>
            @endforeach

            <div class="pagination-lg d-flex justify-content-center main-card-font2 mt-4">
                {{$episodeList->links()}}
            </div>

        </div>
    </div>

    @endsection()
