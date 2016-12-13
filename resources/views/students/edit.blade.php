@extends('main')

@section('title', '| Измена података')

@section('stylesheets')
    <!-- datetimepicker CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    <!-- end of datetimepicker CSS -->

    <!-- parsley CSS -->
    {!! Html::style('css/parsley.css') !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h1> Измена података: {{ $students->ime }} {{mb_substr($students->rod_star, 0, 1, 'utf-8') }}. {{ $students->prezime }}</h1>
        </div>
    </div>    

    {!! Form::model($students, ['route' => ['student.update', $students->id], 'method' => 'PUT', 'data-parsley-validate' =>'']) !!}
        @include('students._form')  
    {!! Form::close() !!}   
@endsection

@section('scripts')
    <!-- datetimepicker JS-->
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker2').datetimepicker({
                locale: 'sr-cyrl',
                format: 'DD.MM.YYYY.'
            });
        });
    </script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <!-- end of datetimepicker -->

    <!-- parsley JS-->
    {!! Html::script('js/parsley.min.js') !!}
@endsection