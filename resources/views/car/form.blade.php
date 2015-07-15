<div class='form-group'>
   {!! Form::label('make', 'Make:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-2'>
       {!! Form::text('make', null, ['class' => 'form-control', 'maxlength' => '15', 'size' => '15']) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('model', 'Model:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-2'>
       {!! Form::text('model', null, ['class' => 'form-control', 'maxlength' => '15', 'size' => '15']) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('year', 'Year:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-2'>
       {!! Form::number('year', null, ['class' => 'form-control', 'min' => '1950', 'max' => '2020']) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('description', 'Description:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-4'>
       {!! Form::textarea('description', null, ['class' => 'form-control', 'maxlength' => '255', 'rows' => 3]) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('mpg', 'MPG:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-2'>
       {!! Form::number('mpg', null, ['class' => 'form-control', 'min' => '0', 'max' => '100']) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('hp', 'HP:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-2'>
       {!! Form::number('hp', null, ['class' => 'form-control', 'min' => '0', 'max' => '1200']) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('msrp', 'MSRP:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-2'>
       {!! Form::number('msrp', null, ['class' => 'form-control', 'min' => '0', 'max' => '9999999']) !!}
   </div>
</div>

<div class='form-group'>
   {!! Form::label('offer', 'Offer:', ['class' => 'control-label col-lg-1']) !!}
   <div class='col-lg-4'>
       {!! Form::textarea('offer', null, ['class' => 'form-control', 'maxlength' => '255', 'rows' => 3]) !!}
   </div>
</div>

<div class='form-group'>
   <div class='col-lg-2'>
       {!! Form::submit("Submit", ['class' => 'btn btn-primary form-control']) !!}
   </div>
</div>
