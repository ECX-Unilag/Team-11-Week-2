<?php

namespace App\Http\Controllers;

use App\Applicant_olevel;
use App\Applicant;
use Illuminate\Http\Request;

class OlevelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applicant.add-result')
        ->with('user', auth()->user());
    }

    /**
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
        $result = new Applicant_olevel;
        $applicant = Applicant::where('email', auth()->user()->email)->first();
        $result->application_number = $applicant->application_number;
        $result->type = $request->input('oLevelType');
        $result->subject1 = $request->input('subject1');
        $result->grade1 = $request->input('grade1');
        $result->subject2 = $request->input('subject2');
        $result->grade2 = $request->input('grade2');
        $result->subject3 = $request->input('subject3');
        $result->grade3 = $request->input('grade3');
        $result->subject4 = $request->input('subject4');
        $result->grade4 = $request->input('grade4');
        $result->subject5 = $request->input('subject5');
        $result->grade5 = $request->input('grade5');
        $result->subject6 = $request->input('subject6');
        $result->grade6 = $request->input('grade6');
        $result->subject7 = $request->input('subject7');
        $result->grade7 = $request->input('grade7');
        $result->subject8 = $request->input('subject8');
        $result->grade8 = $request->input('grade8');
        $result->subject9 = $request->input('subject9');
        $result->grade9 = $request->input('grade9');

        return redirect()->action('OlevelController@index')
            ->with('success','Educational Profile Created Successfully, Please Proceed.')
            ->withCookie(cookie()->forever('Education', 'Educational Profile Created Successfully, Please Proceed.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
