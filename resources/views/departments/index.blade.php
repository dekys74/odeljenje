
@extends('main')

@section('title', '| Списак одељења')

@section('content')

    <div class="row">
        <div class="col-md-10">
            <h1>Списак одељења</h1>
            
        </div>
          <div class="col-md-2">
            <a href="{{ route('department.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Додај новог</a>
        </div>     
    

    </div> <!-- end of .row -->
    <hr/>

    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <table class="table table-hover table-condensed table-striped ">

                <thead>
                    <th>#</th>
                    <th>Индекс одељења</th>
                    <th>Разредни старешина</th>
                    <th> </th>
                </thead>
    
     
                <tbody>
       
                    @foreach ($departments as $department)
                
                        <tr>
                            <td> {{ $department->id }} </td>
                            <td> {{ $department->odeljenje}} </td>
                            <td> {{ $department->razredni}} </td> 
                            <td class="td" align="right">
                        
                                <a href="{{ route('student.odeljenje', $department->id) }}"  class="btn btn-default btn-sm" >Прикажи одељење</a> 

                                <a href="{{ route('department.edit', $department->id) }}" class="btn btn-default btn-sm">Измени</a> 
                                {{ Form::open([
                                    'method' => 'DELETE', 
                                    'route' => ['department.destroy', $department->id],
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
                {!! $departments->links(); !!}
            </div>     
           </div> 

        </div>
    </div>

@endsection
