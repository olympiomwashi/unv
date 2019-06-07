
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
 <div class="card-header"> <h4>Projects <h4> <a style="align:right;" href="/projects/create" class="btn btn-success right">Add New Project</a> </div>

<div class="card-body">
<table class="tbl table-stripper">

@if(count($projects)>0)

<tr>
<th>Country</th>
<th>implementing_office</th>
<th>project_title</th>
<th>Grant_amount</th>
<th>date_from_CGF</th>
<th>start_Date</th>
<th>end_Date</th>
<th>Status</th>
<th>..</th>
</th>

<!-- <td>readiness_or_NAP_Date</td>
<td>type_of_readiness_Monts</td>
<td>First_disbursement_amount</td> -->

<tbody>
@foreach($projects as $project)
<tr>
<td>{{$project->country}}</td>
<td>{{$project->implementing_office}}</td>
<td>{{$project->project_title}}</td>
<td>{{$project->Grant_amount}}</td>
<td>{{$project->date_from_CGF}}</td>
<td>{{$project->start_Date}}</td>
<td>{{$project->end_Date}}</td>
<td>{{$project->status}}</td>
</tr>
<!-- <td>{{$project->readiness_or_NAP_Date}}</td>
<td>{{$project->type_of_readiness_Monts}}</td>
<td>{{$project->First_disbursement_amount}}</td> -->
@endforeach
</tbody>
@else
<tr><td>Currently there is no data to display</td></tr>
@endif
</table>

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
