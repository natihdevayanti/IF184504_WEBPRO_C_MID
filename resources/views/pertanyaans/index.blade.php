@extends('layout/main')


@section('title', 'Daftar Pertanyaan')

@section('container')
  <div class="container">
    <div class="row">
      <div class="col-10">
            <h1 class="mt-3">Daftar Pertanyaan</h1>
            <a href="/forums/create" class=" btn btn-primary my-3">Ajukan Pertanyaan</a>
            <ul class="list-group">
                @foreach ($forums as $forum)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$forum->pertanyaan}}
                   <span> {{$forum->created_at}} </span> 
                   <span> {{$forum->updated_at->diffForHumans()}} </span> 
                <a href="/forums/{{$forum->id}} " class="badge badge-info"> Detail</a>
                </li>
                @endforeach
            </ul>
      </div>
    </div>
  </div>
@endsection
