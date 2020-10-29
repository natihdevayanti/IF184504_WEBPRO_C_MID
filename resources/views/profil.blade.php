@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">User Profil</div>

                <div class="card-body">
                    <div class="d-flex">
                        <medium>Nama : {{ Auth::user()->name }}</medium>
                    </div>
                    <div class="d-flex">
                        <medium>Username : {{ Auth::user()->username }}</medium>
                    </div>
                    <medium>E-mail : {{ Auth::user()->email }}</medium>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="content-wrap ">
                <div class="card">
                    <div class="card-header">
                        <h5>Pertanyaan {{ Auth::user()->name }}</h5>
                    </div>
                </div>
                @forelse ($pertanyaans as $pertanyaan)
                <div class="list-group list-group-flush">
                    <div class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <small class="mb-1">{{ $pertanyaan->get_users->username }} |
                                {{ $pertanyaan->created_at }}</small>
                            <small class="ml-auto">{{ $pertanyaan->updated_at->diffForHumans() }}</small>
                        </div>
                        <a href="/pertanyaans/{{$pertanyaan->id}}">
                            <p style="color:black;">{{ $pertanyaan->pertanyaan }}</p>
                        </a>
                        <div class="d-flex justify-content-between">
                            <div class="mr-auto">
                                <small>{{ $pertanyaan->get_jawaban->count() }} jawaban</small>
                            </div>
                            <div class="ml-auto">
                                <form action="/pertanyaans/{{$pertanyaan->id}}/edit" class="mt-2 ml-2 float-left">
                                    @csrf
                                    <button class="btn btn-warning btn-sm" type="submit"><small
                                            style="color:black;">EDIT</small></button>
                                </form>
                                <form action="/pertanyaans/{{$pertanyaan->id}} " class="mt-2 mr-2 float-right "
                                    method="post">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm" type="submit"><small
                                            style="color:white;">DELETE</small></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="list-group list-group-flush">
                    <medium>Tidak ada pertanyaan</medium>
                </div>
                @endforelse
                <nav aria-label="Page navigation example mt-5">
                    <ul class="pagination justify-content-center">
                        {{ $pertanyaans->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection