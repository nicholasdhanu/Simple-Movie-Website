@extends('layouts')

@section('content')

<div class="container">

    <div class="d-flex episode-text-title2 m-5">
        <h2-cust>{{app('request')->input('type')}}</h2-cust>
    </div>

    <div class="d-flex flex-wrap flex-row justify-content-center">

        @foreach ($categories as $item)

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

@endsection()
