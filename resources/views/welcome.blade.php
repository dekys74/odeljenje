@extends('main')

@section('title', '| Почетна')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <ul class="list-group">
                <li class="list-group-item">
                    <span class="badge">{{ \App\Student::all()->count() }}</span>
                    Укупно ученика:
                </li>
                <li class="list-group-item">
                    <span class="badge"> {{ \App\Student::where(['pol' => 'Мушки'])->get()->count() }}</span>
                    Дечака:
                </li>
                <li class="list-group-item">
                    <span class="badge">{{ \App\Student::where(['pol' => 'Женски'])->get()->count() }}</span>
                    Девојчица:
                </li>
            </ul>   
        </div>
    </div>
@endsection