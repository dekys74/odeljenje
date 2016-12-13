@extends('main')

@section('title', '| Измена одељење')

@section('stylesheets')
    <!-- parsley CSS -->
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')  
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Измена одељење</h1>  
            </div>
        </div> <!-- end of .row -->
        <hr>  
        {!! Form::model($departments, ['route' => ['department.update', $departments->id], 'method' => 'PUT', 'data-parsley-validate' =>'']) !!}
            @include('departments._form')
        {!! Form::close() !!} 
    </div>  
@endsection

@section('scripts')
    <!-- parsley JS-->
    {!! Html::script('js/parsley.min.js') !!}
@endsection