<?php
namespace App\Http\Controllers;

use App\Applicant;
use App\Department;
use App\Faculty;
use App\Next_of_kin;
use App\Sponsor;
use App\Applicant_olevel;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexer()
    {
        $applicant = Applicant::where('email', auth()->user()->email)->first();
        return view('applicant.admission-status')
        ->with('applicant', $applicant)
        ->with('department',Department::where('dept_id',$applicant->dept_id)->first());
    }

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
        ->with('user', auth()->user())
        ->with('department',Department::orderBy('dept_id','ASC')->get())
        ->with('faculty',Faculty::orderBy('faculties_id','ASC')->get());
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
        
        /*$this->validate($request, [
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
        ]);*/
        
        
        $applicant = new Applicant;
        $result = new Applicant_olevel;
        $sponsor = new Sponsor;
        $kin = new Next_of_kin;
        $applicant->email = auth()->user()->email;
        $applicant->application_number = 6;
        $applicant->applicant_passport = 'soon';
        $applicant->firstname = $request->input('firstname');
        $applicant->lastname = $request->input('lastname');
        $applicant->middlename = $request->input('middlename');
        $applicant->date_of_birth = $request->input('date');
        $applicant->phone_no = $request->input('phone');
        $applicant->faculties_id = $request->input('faculty');
        $applicant->dept_id = $request->input('department');
        $applicant->enrollment_type = $request->input('enrollmentType');
        $applicant->jamb_no = $request->input('jambNumber');
        $applicant->jamb_score = $request->input('jambScore');
        $applicant->gender = $request->input('gender');
        $applicant->marital_status = $request->input('maritalStatus');
        $applicant->nationality = $request->input('nationality');
        $applicant->state_of_origin = $request->input('state');
        $applicant->local_government = $request->input('local');
        $applicant->home_town = $request->input('town');
        $applicant->home_address = $request->input('home');
        $applicant->religion = $request->input('religion');
        $applicant->genotype = $request->input('genotype');
        $applicant->bloodgroup = $request->input('bloodGroup');
        $applicant->session = '2020-2021';
        $applicant->guardian = $request->input('g-name');
        $applicant->guardian_email = $request->input('g-email');
        $applicant->guardian_phone_no = $request->input('g-no');
        $applicant->save();
        //////////////////////////////////


        $applicants = Applicant::where('email', auth()->user()->email)->first();
        
        ///////////////////////////////////////////
        $kin->application_number = $applicants->applicant_id;
        $kin->kin_name = $request->input('kinName');
        $kin->kin_address = $request->input('kinAddress');
        $kin->kin_phone = $request->input('kinNumber');
        $kin->kin_email = $request->input('kinEmail');
        $kin->kin_relationship = $request->input('kinRelationship');
        $kin->save();
        //////////////////////////////////////////////
        $sponsor->application_number = $applicants->applicant_id;
        $sponsor->sponsor_name = $request->input('s-name');
        $sponsor->sponsor_address = $request->input('s-address');
        $sponsor->sponsor_phone = $request->input('s-no');
        $sponsor->sponsor_email = $request->input('s-email');
        $sponsor->save();

        $key = str_replace('@', '', auth()->user()->email);


        return redirect()->action('ApplicantController@index')
            ->with('success','Personal Profile Created Successfully, Please Proceed.')
            ->withCookie(cookie()->forever(str_replace('.', '', $key).'Applicant', 'Personal Profile Created Successfully, Please Proceed.'));
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
