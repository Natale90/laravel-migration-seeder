@extends('layouts.main-layout')
@section('sectionHome')
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h1>
                    Welcome Home
                </h1>
                <div class="row text-center">
                    <div class="col-12">
                        <a class='btn btn-primary' href="{{ route('newMovie') }}">
                            Create new movie
                        </a>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-12">

                        <ul>
                            @foreach ($movies as $movie)
                                <li>
                                    <a href="{{ route('details', $movie -> id)}}">
                                        {{ $movie -> title }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>

            
            </div>
        </div>
    </div>
@endsection
