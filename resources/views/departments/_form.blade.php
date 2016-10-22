    <!-- Unos podataka o uceniku -->
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><STRONG>Одељење</STRONG></h3>
                </div>
                <div class="panel-body">
           
                <div class="row">
                    <div class="col-sm-4">
                        {!! Form::label('odeljenje', 'Индекс одељења * :') !!}
                        {{ Form::text('odeljenje', null, 
                            [
                            'class' => 'form-control',
                            'placeholder'=>'Индекс одељења',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'',  
                            'maxlength'=>"2", 
                            'trequired data-parsley-pattern'=>"^[0-9 ]+$"
                            ])
                        }} 
                    </div>

                    <div class="col-sm-4">
                        {!! Form::label('razredni', 'Име и презиме разредног старешине * :') !!}
                        {{ Form::text('razredni', null, 
                            [
                            'class' => 'form-control',
                            'placeholder'=>'Име и презиме разредног старешине',
                            'data-parsley-required-message' => 'Ово поље је обавезно', 
                            'required' =>'',
                            'minlength'=>"5",
                            'maxlength'=>"100"
                            ])
                        }}   
                    </div>
            
                </div>  
     
                </div>
            </div>
        </div>
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