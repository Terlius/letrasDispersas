@extends('dashboard.master')

@section('content')
@include('dashboard.partials.validation-error')
    <form enctype="multipart/form-data" action="{{ route("story.update", $story->id) }}" method="POST" >
        @method('PUT')
        @include('dashboard.story._form')
    </form>

@endsection