
@extends('main')

@section('title', '| подаци о ученику')

@section('content')

    <div class="row">
        <div class="col-md-10">

 			<h1> {{ $students->ime }} {{mb_substr($students->rod_star, 0, 1, 'utf-8') }}. {{ $students->prezime }} </h1>
    
        </div>
        <div class="col-md-2">
            {{ Form::open(['method' => 'DELETE', 'route' => ['student.destroy', $students->id]]) }} 
            	{{ Form::submit('Delete', ['class' => 'btn btn-lg btn-block btn-danger btn-h1-spacing']) }}  
            {{ Form::close() }} 
        </div>
    </div> <!-- end of .row -->
    
    <hr>
	<!-- Podaci o uceniku -->
    <div class="row">
    	<div class=col-md-12>
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Основни подаци</h3>
			  	</div>

			  	<div class="panel-body">

				    <p><span class="neka"> Име:</span> <STRONG> {{ $students->ime }} </STRONG></p>
				    <p>Презиме: <STRONG> {{ $students->prezime }} </STRONG></p>
				    <p>ЈМБГ: <STRONG> {{ $students->jmbg }} </STRONG></p>
				    <p>Датум рођења: <STRONG> {{ Carbon::parse($students->rodjen)->format('d.m.Y.') }} </STRONG> </p>
				    <p>Место рођења: <STRONG> {{ $students->rodjen_opstina }}, {{ $students->rodjen_drzava }} </STRONG></p>
				    <p>Адреса становања: <STRONG> {{ $students->adresa }} </STRONG></p>
				    <p>Број телефона: <STRONG> {{ $students->telefon }} </STRONG></p>
				    <p>Националност: <STRONG> {{ $students->nacionalnost }} </STRONG></p>
				    <p>Држављанство: <STRONG> {{ $students->drzavljanstvo }} </STRONG></p>
			  	</div>
			</div>
	    </div>

	<!-- Podaci o ocu -->
	<div class=col-md-6>
			<div class="panel panel-default">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">Основни подаци оца</h3>
		  		</div>

			  	<div class="panel-body">
				    <p>Име: <STRONG>{{ $students->otac_ime }}</STRONG></p>
				    <p>Презиме: <STRONG>{{ $students->otac_prezime }}</STRONG></p>
				    <p>ЈМБГ: <STRONG>{{ $students->otac_jmbg }}</STRONG></p>
				    <p>Датум рођења: <STRONG> @if (is_null($students->otac_rodjen))  @else {{ Carbon::parse($students->otac_rodjen)->format('d.m.Y.') }} @endif </STRONG></p>
				    <p>Место рођења: <STRONG>{{ $students->otac_mesto }}</STRONG></p>
				    <p>Адреса становања: <STRONG>{{ $students->otac_adresa }}</STRONG></p>
				    <p>Број телефона: <STRONG>{{ $students->otac_telefon }}</STRONG></p>
				    <p>Е-маил: <STRONG>{{ $students->otac_email }}</STRONG></p>
				    <p>Стручна спрема: <STRONG>{{ $students->otac_sprema }}</STRONG></p>
			  	</div>
			</div>
		</div>

		<!-- Podaci o majci -->
        <div class=col-md-6>
			<div class="panel panel-default">
		  		<div class="panel-heading">
		    		<h3 class="panel-title">Основни подаци мајке</h3>
		  		</div>

			  	<div class="panel-body">
				    <p>Име: <STRONG>{{ $students->majka_ime }}</STRONG></p>
				    <p>Презиме: <STRONG>{{ $students->majka_prezime }}</STRONG></p>
				    <p>ЈМБГ: <STRONG>{{ $students->majka_jmbg }}</STRONG></p>
				    <p>Датум рођења: <STRONG> @if (is_null($students->majka_rodjen))  @else {{ Carbon::parse($students->majka_rodjen)->format('d.m.Y.') }} @endif </STRONG></p>
				    <p>Место рођења: <STRONG>{{ $students->majka_mesto }}</STRONG></p>
				    <p>Адреса становања: <STRONG>{{ $students->majka_adresa }}</STRONG></p>
				    <p>Број телефона: <STRONG>{{ $students->majka_telefon }}</STRONG></p>
				    <p>Е-маил: <STRONG>{{ $students->majka_email }}</STRONG></p>
				    <p>Стручна спрема: <STRONG>{{ $students->majka_sprema }}</STRONG></p>
			  	</div>		
			</div>
		</div>
		
	</div>
    

@endsection
