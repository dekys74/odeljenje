
@extends('main')

@section('title', '| Списак предмета')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <h1>Предмети</h1>
                
            </div>
              <div class="col-md-2">
                <a href="{{ route('subject.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Додај предмет</a>
            </div>     
        
        </div> <!-- end of .row -->
        <hr/>

        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills">
                    <li role="presentation" class={{ Request::is('subject/5') ? "active" : "" }}><a href="{{ route('subject.show', '5') }}">Пети разред</a></li>
                    <li role="presentation" class={{ Request::is('subject/6') ? "active" : "" }}><a href="{{ route('subject.show', '6') }}">Шести разред</a></li>
                    <li role="presentation" class={{ Request::is('subject/7') ? "active" : "" }}><a href="{{ route('subject.show', '7') }}">Седми разред</a></li>
                    <li role="presentation" class={{ Request::is('subject/8') ? "active" : "" }}><a href="{{ route('subject.show', '8') }}">Осми разред</a></li>
                </ul>

                <div class="table-responsive">
                    <table class="table table-hover table-condensed table-striped ">
                    <thead>
                        <th>Назив предмета</th>
                        <th>Обавезан</th>
                        <th>Бројчано оцењивање</th>
                        <th>Улази у просек</th>
                        <th> </th>
                    </thead>
        
                    <tbody>
           
                        @foreach ($subjects as $subject)
                    
                            <tr>
                                <td><font {{ $subject->obavezan ? 'color=black' : 'color=LightGray' }} > {{ $subject->naziv}} </td>
                                <td align="center"><font {{ $subject->obavezan ? 'color=black' : 'color=LightGray ' }} > {{ $subject->obavezan ? 'Да' : 'Не' }} </td>
                                <td align="center"><font {{ $subject->obavezan ? 'color=black' : 'color=LightGray ' }} > {{ $subject->brojcano ? 'Да' : 'Не' }} </td>
                                <td align="center"><font {{ $subject->obavezan ? 'color=black' : 'color=LightGray ' }} > {{ $subject->prosek ? 'Да' : 'Не'}} </td>

                                <td class="td" align="right"> <a href="{{ route('subject.edit', $subject->id) }}" class="btn btn-default btn-sm">Измени</a> 
  
                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
                <div class="text-center">
                    {!! $subjects->links(); !!}
                </div>     
               </div> 

            </div>
        </div>
    </div>

@endsection
