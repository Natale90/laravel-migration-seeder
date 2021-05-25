@extends('layouts.main-layout')

@section('sectionCreate')


    <form method="POST" action="{{ route('store') }}">

        @csrf
        @method('POST')

        <div class="form-group row">
            <label for="title" class="col-md-4 col-form-label text-md-right">Title</label>
            <div class="col-md-6">
                <input id="title" type="text" class="form-control" name="title">
            </div>


            <label for="original_title" class="col-md-4 col-form-label text-md-right">Original Title</label>
            <div class="col-md-6">
                <input id="originaltitle" type="text" class="form-control" name="original_title">
            </div>

            <label for="nationality" class="col-md-4 col-form-label text-md-right">nationality</label>
            <div class="col-md-6">
                <input id="nationality" type="text" class="form-control" name="nationality">
            </div>

            <label for="date_of_release" class="col-md-4 col-form-label text-md-right">Date of release</label>
            <div class="col-md-6">
                <input id="date" type="text" class="form-control" name="date_of_release">
            </div>

            <label for="vote" class="col-md-4 col-form-label text-md-right">vote</label>
            <div class="col-md-6">
                <input id="vote" type="text" class="form-control" name="vote">
            </div>

        </div>

        <div class="container">

            <div class="row text-center">
                <div class="col-12">

                <button type="submit" class="btn btn-primary">
                    CREATE
                </button>

                </div>
            </div>
        </div>

    </form>

@endsection
