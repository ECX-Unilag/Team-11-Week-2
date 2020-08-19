@extends('layouts.applicant_view')

@section('content')


<div class="content my-4">
    <div class="text-center">
        @if ($applicant && $applicant->status == 'admitted')
        <!-- Success Div (If the candidate is sucessful, uncomment the div down)  -->
        <div class="success">
        <i class="my-4 fa-10x text-success fas fa-check-circle"></i>
        <h1>Congratulations!!!</h1>
        <p>You have been admitted to the department of <b>{{$department->department}}</b></p>
        </div>
        @else
        <div class="await">
        <i class="my-4 fa-10x fas fa-spinner"></i>
        <h1>Admission in Progress</h1>
        </div>
        @endif
    </div>
    </div>
@endsection

