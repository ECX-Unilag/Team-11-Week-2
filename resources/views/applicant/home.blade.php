@extends('layouts.applicant_view')

@section('content')
    <div class="alert alert-success"><p>Welcome {{$user->firstname.' '.$user->lastname}}</p>
        <p>Please Proceed to any of the pages to start/continue your application.</p>
    </div>
@endsection