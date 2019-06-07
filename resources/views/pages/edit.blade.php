
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<h2>Edit Data</h2>

{!! Form::open(['method'=>'PUT','action'=>['ProjectController@update',$proj->id]]) !!}
<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('country', 'Country')}}
<!-- {{Form::text('country', '',  ['class' => 'form-control', 'placeholder' => ''])}} -->

<select name="country" class="form-control" id="">
@if(count($countries)>0)
<option value="{{$proj->country}}">{{$proj->country}}</option>
@foreach($countries as $country)
<option value="{{$country->country_Name}}">{{$country->country_Name}}</option>
@endforeach
@else
{{Form::text('country',$proj->country,  ['class' => 'form-control', 'placeholder' => ''])}}
@endif
</select>
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('implementing_office', 'implementing_office')}}
{{Form::text('implementing_office', $proj->implementing_office,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('project_title', 'project_title')}}
<select name="project_title" class="form-control" id="">
@if(count($projLists)>0)
<option value="{{$proj->project_title}}">{{$proj->project_title}}</option>
@foreach($projLists as $proj)
<option value="{{$proj->Project_Title}}">{{$proj->Project_Title}}</option>

@endforeach
@else
{{Form::text('project_title',$proj->project_title,  ['class' => 'form-control', 'placeholder' => ''])}}

@endif
</select>
</div>
</div>
</div>


<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('Grant_amount', 'Grant_amount_(USD)')}}
{{Form::text('Grant_amount', $proj->Grant_amount,  ['class' => 'form-control', 'placeholder' => ''])}}


</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('date_from_CGF', 'date_from_CGF')}}
{{Form::date('date_from_CGF',$proj->date_from_CGF,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
<div class="col-md-4">
<div class="form-group">
{{Form::label('start_Date', 'start_Date')}}
{{Form::date('start_Date',$proj->start_Date,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
</div>

<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('duration_Months', 'duration_Months')}}
{{Form::text('duration_Months',$proj->duration_Months,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('end_Date', 'end_Date')}}
{{Form::date('end_Date',$proj->end_Date,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('readiness_or_NAP_Date', 'readiness_or_NAP_Date')}}
{{Form::text('readiness_or_NAP_Date',$proj->readiness_or_NAP_Date,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>
</div>
<div class="form-row">
<div class="col-md-4">
<div class="form-group">
{{Form::label('type_of_readiness_Monts', 'type_of_readiness_Monts')}}
{{Form::text('type_of_readiness_Monts',$proj->type_of_readiness_Monts,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('First_disbursement_amount', 'First_disbursement_amount')}}
{{Form::text('First_disbursement_amount', $proj->First_disbursement_amount ,  ['class' => 'form-control', 'placeholder' => ''])}}
</div>
</div>

<div class="col-md-4">
<div class="form-group">
{{Form::label('Status', 'Status')}}
<select name="status" class="form-control">
<option value="{{$proj->status}}">{{$proj->status}}</option>
<option value="Completed">Completed</option>
<option value="Under Implementation">Under Implementation</option>
<option value="Requesting Funds">Requesting Funds</option>
</select>
<!-- {{Form::text('status', '',  ['class' => 'form-control', 'placeholder' => ''])}} -->
</div>
</div>
</div>

<div class="form-row">

<div style="text-align:right;" class="col-md-12">
  {{Form::submit('Update',['class'=>'btn btn-primary'])}}
</div>
</div>

{!! Form::close() !!}



            </div>
        </div>
    </div>
</div>
@endsection
