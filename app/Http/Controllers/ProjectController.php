<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\project;
use App\ProjectList;
use App\Country;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects= project::all();

        return view('/welcome')->with('projects',$projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $projLists= ProjectList::all();
        $countries= Country::all();

        return view('pages.create')->with('projLists',$projLists)->with('countries',$countries);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$this->validate($request, [
    'country'=>'required|string',
    'implementing_office'=>'required|string',
    'project_title'=>'required|string',
    'Grant_amount'=>'required|string',
    'date_from_CGF'=>'required|string',
    'start_Date'=>'required|string',
    'duration_Months'=>'required|string',
    'end_Date'=>'required|string',
    'readiness_or_NAP_Date'=>'required|string',
    'type_of_readiness_Monts'=>'required|string',
    'First_disbursement_amount'=>'required|string',
    'status'=>'required|string',
    ]);

    $project= new project;
    $project->country=$request->input('country');
    $project->implementing_office=$request->input('implementing_office');
    $project->project_title=$request->input('project_title');
    $project->Grant_amount=$request->input('Grant_amount');
    $project->date_from_CGF=$request->input('date_from_CGF');
    $project->start_Date=$request->input('start_Date');
    $project->duration_Months=$request->input('duration_Months');
    $project->end_Date=$request->input('end_Date');
    $project->readiness_or_NAP_Date=$request->input('readiness_or_NAP_Date');
    $project->type_of_readiness_Monts=$request->input('type_of_readiness_Monts');
    $project->First_disbursement_amount=$request->input('First_disbursement_amount');
    $project->status=$request->input('status');
    $project->save(); 
       return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proj=project::find($id);
        $projLists= ProjectList::all();
        $countries= Country::all();

        // return ['edit'];
        return view('pages.edit')->with('projLists',$projLists)->with('countries',$countries)->with('proj', $proj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'country'=>'required|string',
            'implementing_office'=>'required|string',
            'project_title'=>'required|string',
            'Grant_amount'=>'required|string',
            'date_from_CGF'=>'required|string',
            'start_Date'=>'required|string',
            'duration_Months'=>'required|string',
            'end_Date'=>'required|string',
            'readiness_or_NAP_Date'=>'required|string',
            'type_of_readiness_Monts'=>'required|string',
            'First_disbursement_amount'=>'required|string',
            'status'=>'required|string',
            ]);

$project =project::find($id);
$project->country=$request->input('country');
$project->implementing_office=$request->input('implementing_office');
$project->project_title=$request->input('project_title');
$project->Grant_amount=$request->input('Grant_amount');
$project->date_from_CGF=$request->input('date_from_CGF');
$project->start_Date=$request->input('start_Date');
$project->duration_Months=$request->input('duration_Months');
$project->end_Date=$request->input('end_Date');
$project->readiness_or_NAP_Date=$request->input('readiness_or_NAP_Date');
$project->type_of_readiness_Monts=$request->input('type_of_readiness_Monts');
$project->First_disbursement_amount=$request->input('First_disbursement_amount');
$project->status=$request->input('status');
$project->save();
return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        // return "Destroy".$id;
        $project =project::find($id);
        // if(storage::delete('public/photos/'.$photo->album_id.'/'.$photo->photo)){
        $project->delete();
    
        return redirect('/')->with('success','Photo Deleted');
        
    }
}
