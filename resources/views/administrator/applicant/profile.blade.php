@extends('./layouts.admin_sidebar')

@section('content')
@php
    $facultylist = array();
@endphp
@php
    $departmentlist = array();
@endphp
@php
    $kinlist = array();
@endphp
@php
    $sponsorlist = array();
@endphp
@foreach ($faculties as $faculties)
    @php
        $facultylist[$faculties->faculties_id] = $faculties->title
    @endphp
@endforeach
@foreach ($department as $department)
    @php
        $departmentlist[$department->dept_id] = $department->department
    @endphp
@endforeach
@foreach ($kin as $kin)
    @php
        $kinlist[$kin->kin_id] = $kin->kin_firstname.' '.$kin->kin_lastname
    @endphp
@endforeach
@foreach ($sponsor as $sponsor)
    @php
        $sponsorlist[$sponsor->sponsor_id] = $sponsor->sponsor_firstname.' '.$sponsor->sponsor_lastname
    @endphp
@endforeach
<div>application_number: {{ $applicant->application_number }}</div>
<div>firstname: {{ $applicant->firstname }}</div>
<div>lastname: {{ $applicant->lastname }}</div>
<div>middlename: {{ $applicant->middlename }}</div>
<div>date_of_birth: {{ $applicant->date_of_birth }}</div>
<div>phone_no: {{ $applicant->phone_no }}</div>
<div>email: {{ $applicant->email }}</div>
<div>faculty: {{$facultylist[$applicant->faculties_id]}}</div>
<div>Next of Kin: {{$kinlist[$applicant->applicant_id]}}</div>
<div>Sponsor: {{$sponsorlist[$applicant->applicant_id]}}</div>
<div>department: {{$departmentlist[$applicant->dept_id]}}</div>
<div>enrollment_type: {{ $applicant->enrollment_type }}</div>
<div>jamb_no: {{ $applicant->jamb_no }}</div>
<div>jamb_score: {{ $applicant->jamb_score }}</div>
<div>gender: {{ $applicant->gender }}</div>
<div>marital_status: {{ $applicant->marital_status }}</div>
<div>nationality: {{$applicant->nationality}}</div>
<div>state_of_origin: {{ $applicant->state_of_origin }}</div>
<div>local_government: {{ $applicant->local_government }}</div>
<div>home_town: {{ $applicant->home_town }}</div>
<div>home_address: {{ $applicant->home_address }}</div>
<div>applicant_passport: {{ $applicant->applicant_passport }}</div>
<div>religion: {{ $applicant->religion }}</div>
<div>genotype: {{ $applicant->genotype }}</div>
<div>bloodgroup: {{ $applicant->bloodgroup }}</div>
<div>session: {{ $applicant->session }}</div>
<div>admission_status: {{ $applicant->admission_status }}</div>
<div>admission_batch: {{ $applicant->admission_batch }}</div>
<div>school_id: {{ $applicant->school_id }}</div>
<div>register_status: {{ $applicant->register_status }}</div>
<div>guardian: {{$applicant->guardian}}</div>
<div>guardian_email: {{$applicant->guardian_email}}</div>
<div>guardian_ phone: {{$applicant->guardian_phone_no}}</div>
@endsection



