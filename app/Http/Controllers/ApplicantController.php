<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Department;
use App\Faculty;
use App\Next_of_kin;
use App\Sponsor;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexes($id)
    {
        return view('administrator.applicant.profile')
        ->with('applicant', Applicant::where('applicant_id', $id)->first())
        ->with('department',Department::orderBy('dept_id','ASC')->get())
        ->with('faculties',Faculty::orderBy('faculties_id','ASC')->get())
        ->with('kin',Next_of_kin::orderBy('kin_id','ASC')->get())
        ->with('sponsor',Sponsor::orderBy('sponsor_id','ASC')->get());
    }
    public function index()
    {
        return view('applicant.create-profile')
        ->with('user', auth()->user());
    }

    /**->with('applicant',Applicant::orderBy('lastname','ASC')->get()); 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'firstname' => 'required | min:3',
            'lastname' => 'required | min:3',
            'date' => 'required',
            'gender' => 'required',
            'marital' => 'required',
            'religion' => 'required',
            'blood-group' => 'required',
            'nationality' => 'required',
            'faculty' => 'required',
            'department' => 'required',
            'type' => 'required',
            'jamb-reg' => 'required',
            'score' => 'required',
            'kin-name' => 'required',
            'kin-email' => 'required',
            'sponsor-name' => 'required',
            'sponsor-email' => 'required',
        ]);
        $applicant = new Applicant;
        $applicant->email = auth()->user()->email;
        $applicant->title = $request->input('course');
        $applicant->save();
        return redirect()->action('courseController@index')
            ->with('success','Course Added')
            ->with('course',Course::orderBy('course_id','DESC')->get());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(Applicant $applicant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(Applicant $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Applicant $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Applicant  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Applicant $applicant)
    {
        //
    }
}
