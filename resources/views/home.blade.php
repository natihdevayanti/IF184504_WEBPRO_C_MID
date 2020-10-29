@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <!-- <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    You are logged in!
                </div> -->

                <div class="list-group list-group-flush">
                    @foreach ($pertanyaans as $pertanyaan)
                    <a href="/pertanyaans/{{$pertanyaan->id}}" class="list-group-item list-group-item-action">
                        <div class="d-flex">
                            <small class="mb-1">{{ $pertanyaan->get_users->username }} |
                                {{ $pertanyaan->created_at }}</small>
                            <small class="ml-auto">{{$pertanyaan->updated_at->diffForHumans()}}</small>
                        </div>
                        <p>{{ $pertanyaan->pertanyaan }}</p>
                        <div class="d-flex w-100 justify-content-between">
                            <small>{{ $pertanyaan->get_jawaban->count() }} jawaban</small>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>

            <nav aria-label="Page navigation example mt-5">
                <ul class="pagination justify-content-center">
                    {{ $pertanyaans->links() }}
                </ul>
            </nav>

        </div>
    </div>
</div>
@endsection
