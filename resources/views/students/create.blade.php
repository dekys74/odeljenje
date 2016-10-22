@extends('main')

@section('title', '| Додавање новог ученика')

@section('stylesheets')

    <!-- datetimepicker CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css" />
    <!-- end of datetimepicker CSS -->

    <!-- parsley CSS -->
    {!! Html::style('css/parsley.css') !!}

@endsection


@section('content')  

    <?php $pol = array(
        'Мушки'     => 'Мушки', 
        'Женски'    => 'Женски'
        );
    ?>
    <?php $sprema = array(
        '1'     => 'I степен - четири разреда основне школе',
        '2'     => 'II степен - основна школа',
        '3'     => 'III степен - ССС средња школа',
        '4'     => 'IV степен - ССС средња школа',
        '5'     => 'V степен - ВКВ - ССС средња школа',
        '6'     => 'VI степен - ВШС - виша школа',
        '7'     => 'VII - ВСС - висока стручна спрема',
        '8'     => 'VII/1 - Специјалиста',
        '9'     => 'VII/2 степен - Магистар',
        '10'    => 'VIII степен - Докторат'
        );
    ?>

    <div class="row">
        <div class="col-md-10">
            <h1> Нови ученик </h1>
        </div>
    </div> <!-- end of .row -->

    {!! Form::open(array('route' => 'student.store', 'data-parsley-validate' =>'')) !!}
    <h3 class="panel-title">НАПОМЕНА: Поља обележена * су обавезна</h3>

    <!-- Unos podataka o uceniku -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><STRONG>Основни подаци ученика</STRONG></h3>
                </div>
                <div class="panel-body">
           
                <div class="row">
                    <div class="col-sm-4">
                        {!! Form::label('ime', 'Име * :') !!}
                        {{ Form::text('ime', null, 
                            [
                            'class' => 'form-control',
                            'placeholder'=>'Име ученика',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'',  
                            'maxlength'=>"20", 
                            'type'=>"text"
                            ])
                        }} 
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('prezime', 'Презиме * :') !!}
                        {{ Form::text('prezime', null, 
                            [
                            'class' => 'form-control',
                            'placeholder'=>'Прeзиме ученика',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'', 
                            'maxlength'=>"50"
                            ])
                        }}   
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('rod_star', 'Средње име * :') !!}
                        {{ Form::text('rod_star', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Средње име ученика','
                            data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'', 
                            'maxlength'=>"20"
                            ])
                        }}   
                    </div> 

                    <div class="col-sm-4">
                        {!! Form::label('jmbg', 'ЈМБГ * :') !!}
                        {{ Form::text('jmbg', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Јединствени матични број',
                            'trequired data-parsley-pattern'=>"^[0-9 ]+$",
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'data-rangelength-message'=>"Ово поље мора имати тачно 13 бројева",
                            'data-rangelength' => "[13,13]",
                            'required' =>'', 
                            'minlength'=>"13",
                            'maxlength'=>"13",
                            
                            ])
                        }}
                    </div>       

                    <div class="col-sm-4">
                        {!! Form::label('maticni', 'Матични број у матичној књизи * :') !!}
                        {{ Form::text('maticni', null, 
                            [
                            'class' => 'form-control',
                            'placeholder'=>'Матични број у матичној књизи',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'', 
                            'maxlength'=>"7"
                            ])
                        }}
                    </div>          

                    <div class="col-sm-4">
                        {!! Form::label('pol', 'Пол * :') !!}
                        {{ Form::select('pol', $pol, null,
                            [
                            'class'=>'form-control',
                            'placeholder'=>'Пол ученика',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'' 
                            ])
                        }}
                    </div> 

                    <div class="col-sm-4">
                        {!! Form::label('rodjen', 'Датум рођења * :') !!}
                        {{ Form::text('rodjen', null,  
                            [
                            'class' => 'form-control', 
                            'id'=>'datetimepicker2', 
                            'placeholder'=>'dd.mm.yyyy.',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'', 
                            'maxlength'=>"20",
                            ])
                        }} 
                    </div> 

                    <div class="col-sm-4">
                        {!! Form::label('rodjen_mesto', 'Место рођења у * :') !!}
                        {{ Form::text('rodjen_mesto',null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Место рођења (нпр. Крушевцу, Нишу, Новом Саду)',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'', 
                            'maxlength'=>"50"
                            ])
                        }}
                    </div>  

                    <div class="col-sm-4">
                        {!! Form::label('rodjen_opstina', 'Општина у којој је рођен * :') !!}
                        {{ Form::text('rodjen_opstina', null, 
                            [
                            'class' => 'form-control', 
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'placeholder'=>'Општина рођења',
                            'required' =>'', 
                            'maxlength'=>"50"
                            ])
                        }}
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('rodjen_drzava', 'Држава у којој је рођен * :') !!}
                        {{ Form::text('rodjen_drzava', null, 
                            [
                            'class' => 'form-control', 
                            'data-parsley-required-message' => 'Ово поље је обавезно',
                            'placeholder'=>'Држава рођења', 
                            'required' =>'', 
                            'maxlength'=>"50"
                            ])
                        }}
                    </div>

                    <div class="col-sm-4">
                        {{ Form::label('adresa', 'Адреса пребивалишта:') }}
                        {{ Form::text('adresa', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Адреса пребивалишта',
                            'maxlength'=>"50"
                            ])
                        }}
                    </div>

                    <div class="col-sm-4">
                        {{ Form::label('telefon', 'Контакт телефон:') }}
                        {{ Form::text('telefon', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Број телефона',
                            'maxlength'=>"50"
                            ]) 
                        }}
                    </div>  

                    <div class="col-sm-4">
                        {{ Form::label('nacionalnost', 'Националност:') }}
                        {{ Form::text('nacionalnost', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Националност',
                            'maxlength'=>"255"
                            ]) 
                        }}
                    </div>  

                    <div class="col-sm-4">
                        {{ Form::label('drzavljanstvo', 'Држављанство:') }}
                        {{ Form::text('drzavljanstvo', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Држављанство',
                            'maxlength'=>"255"
                            ]) 
                        }}
                    </div> 

                    <div class="col-sm-4">
                        {{ Form::label('izabrani_lekar', 'Име изабраног лекара:') }}
                        {{ Form::text('izabrani_lekar', null, 
                            [
                            'class' => 'form-control', 
                            'placeholder'=>'Име изабраног лекара',
                            'maxlength'=>"50"
                            ])
                        }}
                    </div>                        
                     

            
                </div>  
     
                </div>
            </div>
        </div>
    </div> <!-- end of .row -->

    <!-- Unos podataka o ocu -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title"><STRONG> Основни подаци оца </STRONG></h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-sm-4">
                            {!! Form::label('otac_ime', 'Име оца * :') !!}
                            {{ Form::text('otac_ime', null, 
                                [
                                'class' => 'form-control',
                                'placeholder'=>'Име',
                                'data-parsley-required-message' => 'Ово поље је обавезно', 
                                'required' =>'',  
                                'maxlength'=>"20", 
                                'type'=>"text"
                                ])
                            }} 
                        </div>

                        <div class="col-sm-4">
                            {!! Form::label('otac_prezime', 'Презиме оца * :') !!}
                            {{ Form::text('otac_prezime', null, 
                                [
                                'class' => 'form-control',
                                'placeholder'=>'Прeзиме',
                                'data-parsley-required-message' => 'Ово поље је обавезно', 
                                'required' =>'', 
                                'maxlength'=>"50"
                                ]) 
                            }}   
                        </div>

                        <div class="col-sm-4">
                            {{ Form::label('otac_jmbg', 'Јединствени матични број оца:') }}
                            {{ Form::text('otac_jmbg', null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Јединствени матични број оца',
                                'minlength'=>"13",
                                'maxlength'=>"13",
                                'trequired data-parsley-pattern'=>"^[0-9 ]+$"
                                ]) 
                            }}
                        </div>
                   
                        <div class="col-sm-4">
                            {{ Form::label('otac_adresa', 'Адреса пребивалишта оца:') }}
                            {{ Form::text('otac_adresa', null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Адреса пребивалишта',
                                'maxlength'=>"50"
                                ]) 
                            }}
                        </div>

                        <div class="col-sm-4">
                            {{ Form::label('otac_telefon', 'Контакт телефон оца:') }}
                            {{ Form::text('otac_telefon', null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Број телефона',
                                'maxlength'=>"50"
                                ])
                            }}
                        </div>

                         <div class="col-sm-4">
                            {{ Form::label('otac_sprema', 'Стручна спрема оца:') }}
                            {{ Form::select('otac_sprema', $sprema, null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Стручна спрема',
                                'maxlength'=>"50"
                                ]) 
                            }}
                        </div>

                    </div>
                </div>
            </div>
        </div >
    </div> <!-- end of .row -->

    <!-- Unos podataka o majci -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title"> <STRONG>Основни подаци мајци</STRONG></h3>
                </div>

                <div class="panel-body">
                    <div class="row">
                        
                        <div class="col-sm-4">
                            {!! Form::label('majka_ime', 'Име мајке * :') !!}
                            {{ Form::text('majka_ime', null, 
                                [
                                'class' => 'form-control',
                                'placeholder'=>'Име',
                                'data-parsley-required-message' => 'Ово поље је обавезно', 
                                'required' =>'',  
                                'maxlength'=>"20", 
                                'type'=>"text"
                                ])
                            }} 
                        </div>

                        <div class="col-sm-4">
                            {!! Form::label('majka_prezime', 'Презиме мајке * :') !!}
                            {{ Form::text('majka_prezime', null, 
                                [
                                'class' => 'form-control',
                                'placeholder'=>'Прeзиме',
                                'data-parsley-required-message' => 'Ово поље је обавезно', 
                                'required' =>'', 
                                'maxlength'=>"50"
                                ])
                            }}   
                        </div>

                        <div class="col-sm-4">
                            {{ Form::label('majka_jmbg', 'Јединствени матични број мајке:') }}
                            {{ Form::text('majka_jmbg', null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Јединствени матични број мајке',
                                'minlength'=>"13",
                                'maxlength'=>"13",
                                'trequired data-parsley-pattern'=>"^[0-9 ]+$"
                                ]) 
                            }}
                        </div>
                   
                        <div class="col-sm-4">
                            {{ Form::label('majka_adresa', 'Адреса пребивалишта мајке:') }}
                            {{ Form::text('majka_adresa', null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Адреса пребивалишта',
                                'maxlength'=>"50"
                                ])
                            }}
                        </div>

                        <div class="col-sm-4">
                            {{ Form::label('majka_telefon', 'Контакт телефон мајке:') }}
                            {{ Form::text('majka_telefon', null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Број телефона',
                                'maxlength'=>"50"
                                ])
                            }}
                        </div>

                        <div class="col-sm-4">
                            {{ Form::label('majka_sprema', 'Стручна спрема мајке:') }}
                            {{ Form::select('majka_sprema', $sprema, null, 
                                [
                                'class' => 'form-control', 
                                'placeholder'=>'Стручна спрема',
                                'maxlength'=>"50"
                                ])
                            }}
                        </div>

                    </div>
                </div>
            </div>
        </div >
    </div> <!-- end of .row -->

    <!-- Dugmici -->
    <div class="row">
        <div class="col-md-12 col-md-offset-6">
            <div class="row">
                <div class="col-md-3">
                    {{ Form::button('Поништи унос', array('class' => 'btn btn-danger  btn-block', 'type'=>'reset')) }} 
               
                </div>
                <div class="col-md-3">
                    {{ Form::button('Прихвати',  array('class' => 'btn btn-success btn-block', 'type'=>'submit')) }} 
                </div>
            </div>  
        </div>
    </div> <!-- end of .row -->
                
    {!! Form::close() !!}   

@endsection


@section('scripts')

    <!-- datetimepicker JS-->
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker2').datetimepicker({
                locale: 'sr-cyrl',
                format: 'D.M.YYYY.'
            });
        });
    </script> 

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment-with-locales.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <!-- end of datetimepicker -->

    <!-- parsley JS-->
    {!! Html::script('js/parsley.min.js') !!}

@endsection