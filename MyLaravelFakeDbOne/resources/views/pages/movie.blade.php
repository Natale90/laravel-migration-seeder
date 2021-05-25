@extends('layouts.main-layout')

@section('sectionDetails')

    <div class="container">
        <div class="row text-center">

            <div class="col-12">
                <h3>
                    title :{{ $movie -> title }}
                </h3>
                <h5>
                    Original Title: {{ $movie -> original_title }}
                </h5>
                <h5>
                    Nationality: {{ $movie -> nationality }}
                </h5>
                <h5>
                    Date Of release: {{$movie -> date_of_release}}
                </h5>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <a class='btn btn-primary' href="{{ route('home') }}">
                    bring me at home
                </a>
            </div>
        </div>
    </div>
@endsection
