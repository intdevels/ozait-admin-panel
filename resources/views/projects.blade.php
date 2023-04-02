@extends('layouts.projects')

@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/index.css') }}">
@endpush

@section('content')
    <div class="right">
       <div style="display: flex;justify-content: space-between;">
           <h2>Наши проекты </h2>
           <h2>
               <a href="/"> Главная </a>
           </h2>
       </div>
        <div class="table">
            @foreach($projects as $project)
                <div class="row">
                    @foreach($project as $el)
                        <div class="el">
                            <div class="image" style="background: url({{ asset('storage/'.$el->image) }});background-position: center;background-size: cover;"></div>
                            <h3>{{ $el->name }}</h3>
                            <a href="{{ $el->url }}" target="_blank">Ссылка на проект</a>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>
@endsection
