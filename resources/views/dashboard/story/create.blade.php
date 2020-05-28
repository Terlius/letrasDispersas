@extends('dashboard.master')

@section('content')
@include('dashboard.partials.validation-error')
    
<div class="row justify-content-center mt-4">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">{{ __('Ingresar') }}</div>

            <div class="card-body">
                <form action="{{ route("story.store") }}" method="POST" enctype="multipart/form-data">
                    @include('dashboard.story._form')
                </form>
    
            </div>
        </div>
    </div>
</div>   

    

@endsection