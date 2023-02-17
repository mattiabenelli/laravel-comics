@extends('layouts.app')

@section('content')
    <div class="main-container">
        <div class="row">
        @foreach ($comics as $comic)
            <div class="card">
                <div class="card-image">
                    <img src="{{$comic['thumb']}}" alt="">
                </div>
                <div class="card-name">{{$comic['title']}}</div>
            </div>
        @endforeach
        </div>
    </div>
    <div class="blue-section">
        <div class="blue-container">
          @foreach ($itemBlueSection as $item)
            <div class="blue-section-links">
                <img src="{{ asset(Vite::asset($item['img'])) }}" alt="">
                <div class="blue-section-links-text">{{$item['description']}}</div>
            </div>
          @endforeach
        </div>
    </div>
@endsection