@extends('main')

@section('title', '| Списак ученика')

@section('content')

    <div class="row">
        <div class="col-md-10">

            <h1> Списак ученика </h1> 
        </div>
        <div class="col-md-2">
            <a href="{{ route('student.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Додај новог</a>
        </div>

    </div> <!-- end of .row -->
    <hr/>
    
    <div class="row">

        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-condensed table-striped ">
                <thead>
                    <th>Матични бр.</th>
                    <th>Одељење</th>
                    <th>Име и презиме ученика</th>
                    <th>Датум рођења</th>
                    <th>Телефон</th>
                    <th>Адреса</th>
                    <th> </th>
                </thead>
    
     
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td> {{ $student->maticni }} </td>
                            <td> {!! mb_substr(date('Y' ), 2, 2, 'utf-8')  -  
                                     mb_substr($student->maticni, 5, 2, 'utf-8') + 
                                     mb_substr($student->maticni, 2, 1, 'utf-8') - $god!!}
                                     {{'/'}}
                                     {{ mb_substr($student->maticni, 4, 1, 'utf-8') }}
                            </td>
                            <td> {{ $student->ime }} {{mb_substr($student->rod_star, 0, 1, 'utf-8') }}. {{ $student->prezime }} </td>
                            <td> {{ date('d.m.Y.', strtotime( $student->rodjen)) }} </td>
                            <td> {{ $student->telefon}} </td>
                            <td> {{ $student->adresa}} </td> 
                            <td class="td" align="right">
                        
                                <a href="{{ route('student.show', $student->id) }}"  class="btn btn-default btn-sm" >шрикажи</a> 

                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-default btn-sm">Измени</a> 
                                {{ Form::open([
                                    'method' => 'DELETE', 
                                    'route' => ['student.destroy', $student->id],
                                    'style' => 'display:inline',
                                    'onsubmit' => "return confirm('Да ли сте сигурни да желите обрисати?')"
                                    ]) }} 
                                    {{ Form::submit('Избриши', ['class' => 'btn btn-sm btn btn-danger']) }}  
                                {{ Form::close() }} 
                            </td>
                        </tr>
                    @endforeach

                </tbody>  

                </table>

                <div class="text-center">
                    {!! $students->links(); !!}                
                </div>

            </div>
        </div>
    </div>

@endsection
