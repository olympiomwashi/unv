
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<h2> Please fill Out form </h2>

{!! Form::open(['method'=>'POST','action'=>'ProjectController@store']) !!}
<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('country', 'Country')}}
{{Form::text('country', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('implementing_office', 'implementing_office')}}
{{Form::text('implementing_office', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('project_title', 'project_title')}}
{{Form::text('project_title', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
</div>


<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('Grant_amount', 'Grant_amount_(USD)')}}
{{Form::text('Grant_amount', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('date_from_CGF', 'date_from_CGF')}}
{{Form::text('jina_kamili', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
<div class="col-md-4">
<div class="form-group">
{{Form::label('start_Date', 'start_Date')}}
{{Form::text('kazi', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
</div>

<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('duration_Months', 'duration_Months')}}
{{Form::text('kazi_upendayo', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('end_Date', 'end_Date')}}
{{Form::text('jina_kamili', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('readiness_or_NAP_Date', 'readiness_or_NAP_Date')}}
{{Form::text('readiness_or_NAP_Date', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
</div>
<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('type_of_readiness_Monts', 'type_of_readiness_Monts')}}
{{Form::text('kazi_upendayo', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('First_disbursement_amount', 'First_disbursement_amount')}}
{{Form::text('jina_kamili', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('Status', 'Status')}}
{{Form::text('kazi', '',  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
</div>

<div class="form-row">

<div style="text-align:right;" class="col-md-12">
  {{Form::submit('Save',['class'=>'btn btn-success'])}}
</div>
</div>

{!! Form::close() !!}



            </div>
        </div>
    </div>
</div>
@endsection
