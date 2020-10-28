@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Ubah Komentar</h1>
        <form class="form" method="post" action="/jawabans/{{ $jawaban->id}}">
            @method('put')
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="jawaban" name=jawaban rows="5" > {{ $jawaban->jawaban }} </textarea>
                <input hidden type="text" class="form-control" id="user_id" name=user_id value="{{ $jawaban->get_users->id}}"> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
@endsection
