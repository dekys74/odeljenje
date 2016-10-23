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


<form class="form-horizontal" id="whereEntry" method='post' action=''>
   <fieldset>
    <input type="text" class="income_count span1 register_input" id="income" name="income" placeholder="% of income"> <br>
    <input type="text" class="income_count span1 register_input" id="income_2" name="income_2" placeholder="% of income"> <br>
<input type="text" class="income_count span1 register_input" id="income_3" name="income_3" placeholder="% of income"> <br>
<input type="text" class="income_count span1 register_input" id="income_4" name="income_4" placeholder="% of income"> <br>
    <input type="text" class="income_count span1 register_input" id="income_5" name="income_5" placeholder="% of income"> <br>
        <input type="text" class="income_count span1 register_input" id="income_6" name="income_6" placeholder="% of income"> <br><br><br>

   <input type="text" class="span2 register_input" id="income_sum" name="income_sum" placeholder="% of income"> <br>
       </fieldset>
       </form>
    <script>
            var $form = $('#whereEntry'),
            $summands = $form.find('.income_count'),
            $sumDisplay = $('#income_sum');

            $form.delegate('.income_count', 'change', function ()
            {
            var sum = 0;
            $summands.each(function ()
            {
                var value = Number($(this).val());
                if (!isNaN(value)) sum += value;
            });

            $sumDisplay.val(sum);
            });
    </script> 

@endsection