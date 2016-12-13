    <p>НАПОМЕНА: Поља обележена * су обавезна</p>

    <!-- Unos podataka o uceniku -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><STRONG>Основни подаци ученика</STRONG></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
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
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
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
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-sm-4">
                                {!! Form::label('rodjen', 'Датум рођења * :') !!}
                                {{ Form::text('rodjen',  $datum,  
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">                    
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
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
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
        </div>
    </div> <!-- end of .row -->
    </div>

    <!-- Unos podataka o ocu -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><STRONG> Основни подаци оца </STRONG></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
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
                </div>
            </div>
        </div >
    </div> <!-- end of .row -->

    <!-- Unos podataka o majci -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"> <STRONG>Основни подаци мајке</STRONG></h3>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
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
                            </div>
                        </div>
                    </div> <!-- end of .row>.col-md-12 -->

                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
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
                    </div><!-- end of .row>.col-md-12 -->
                </div>
            </div >
        </div> 
    </div> <!-- end of .row -->

    <!-- Dugmici -->
    <div class="row">
        <div class="col-md-12 col-md-offset-6">
            <div class="row">
                <div class="col-md-3">
                    {{ Form::button('Поништи', array('class' => 'btn btn-danger  btn-block', 'type'=>'reset')) }} 
                </div>
                <div class="col-md-3">
                    {{ Form::button('Прихвати',  array('class' => 'btn btn-success btn-block', 'type'=>'submit')) }} 
                </div>
            </div>  
        </div>
    </div> <!-- end of .row -->