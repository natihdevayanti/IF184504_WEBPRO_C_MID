@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-8">
        <h1 class="mt-3">Buat Pertanyaan</h1>
        <form method="post" action="/pertanyaans">
            @csrf
            <div class="form-group">
                <textarea class="form-control" id="pertanyaan" name=pertanyaan rows="5"></textarea>
                <input hidden type="text" class="form-control" id="user_id" name=user_id value="{{ Auth::user()->id }}"> 
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        
        </form>
      </div>
    </div>
  </div>
@endsection
