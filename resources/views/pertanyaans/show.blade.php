@extends('layouts.app')

@section('content')
  <div class="container mt-5 mb-5 ">
    <div class="d-flex justify-content-center row">
      <div class="col-md-8">
      <a href="/home">Kembali</a>
        <div class="card mb-4">
          <div class="card-header">
             @if ($pertanyaan->user_id == Auth::user()->id)
            <a class="nav-link nav-link-right dropdown-toggle float-right " role="button" data-toggle="dropdown"></a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown " >
                <form action="{{$pertanyaan->id}}/edit" class="mt-2 ml-2 float-left"> 
                  @csrf
                  <button class="btn btn-warning "type="submit" >Edit</button>   
                </form>  
                <form action="{{$pertanyaan->id}} " class="mt-2 mr-2 float-right " method="post"> 
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger "type="submit" >Delete</button>   
                </form>
              </a>
            </div>
            @endif
            <div>{{ $pertanyaan->get_users->name}}</div>
            <div class="text-muted small">{{ $pertanyaan->created_at->diffForHumans() }}</div>
          </div>
          <div class="card-body">
            <p>{{ $pertanyaan->pertanyaan }}</p>
          </div>
          <div class="card-footer pl-3">
            <div class="text-muted small "><strong>Edited at</strong> {{ $pertanyaan->updated_at->diffForHumans() }}</div>
          </div>
        </div>


        <!-- BUAT KOMENTAR -->
        <h5> Tambahkan Komentar </h5>
        <form method="post" action="/jawabans">
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="jawaban" name=jawaban rows="3"></textarea>
                <input hidden type="text" class="form-control" id="user_id" name=user_id value="{{ Auth::user()->id }}">  
                <input hidden type="text" class="form-control" id="pertanyaan_id" name=pertanyaan_id value="{{ $pertanyaan->id }}"> 
            </div>
            <button class="btn btn-primary mb-5" type="submit">Kirim</button>
        </form>
        
        <!-- DAFTAR KOMENTAR -->
        <h3 class="mb-3">Komentar </h3>
        @foreach ($jawaban as $jwb)
        <div class="card bg-white ">
          <div class="card-header">
            @if ($jwb->user_id == Auth::user()->id)
            <a class="nav-link nav-link-right dropdown-toggle float-right " role="button" data-toggle="dropdown"></a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
              <a class="dropdown " >
                <form action="/jawabans/{{$jwb->id}}/edit" class="mt-2 ml-2 float-left"> 
                  @csrf
                  <button class="btn btn-warning "type="submit" >Edit</button>   
                </form>  
                
                <form action="/jawabans/{{$jwb->id}} " class="mt-2 mr-2 float-right " method="post"> 
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger "type="submit" >Delete</button>   
                </form>
              </a>
            </div>
            @endif
            <div>{{ $jwb->get_users->name}}</div>
            <div class="text-muted small">{{ $jwb->created_at->diffForHumans() }}</div>
          </div>
          <div class="comment-text-sm ml-3">
            <span>{{ $jwb->jawaban }}</span>
          </div>
          <div class="card-footer pb-0 pt-0 pl-3">
            <div class="text-muted small "><strong>Edited at</strong> {{ $jwb->updated_at->diffForHumans() }}</div>
          </div>
        </div>
        <h1> </h1>
        @endforeach
      </div>
    </div>
  </div>




@endsection
