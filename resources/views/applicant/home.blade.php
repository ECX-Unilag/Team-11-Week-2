@extends('layouts.applicant_view')

@section('content')
    <div>Welcome {{$user->firstname.' '.$user->lastname}}</div>
@endsection