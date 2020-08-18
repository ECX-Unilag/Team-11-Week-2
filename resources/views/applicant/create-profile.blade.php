@extends('layouts.applicant_view')

@section('content')
@if (Cookie::get('Applicant'))
    <div class="alert alert-success">{{ Cookie::get('Applicant') }}</div>
@else
<form action="create-profile" method="POST">
{{ csrf_field() }}
        <!--Personal details-->
        <section class="personal container">
          <h4>Personal Details</h4>
          <div class="line"></div>
          <div class="form-row mt-5">

            <!--First Name-->
            <div class="form-group col-md-6">
              <label for="firstName">First Name</label>
              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="First Name">
            </div>

            

            <!--Last name-->
            <div class="form-group col-md-6">
              <label for="lastName">Last Name</label>
              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Last Name">
            </div>

            <div class="form-group col-md-6">
              <label for="middleName">Middle Name</label>
              <input type="text" class="form-control" name="middlename" id="middlename" placeholder="Middle Name">
            </div>
          </div>

          <div class="form-row form-group">
            <label class="control-label" for="address">Address</label>
            <input class="form-control" id="address" name="address" placeholder="Address" type="text" />
          </div>

          <div class="form-row">
            <!--Date of Birth-->
            <div class="form-group col-md-6">
              <!-- Date input -->
              <label class="control-label" for="date">Date of Birth</label>
              <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="date" />
            </div>

            <!--Phone number-->
            <div class="form-group col-md-6">
              <label for="phoneNumber">Phone Number</label>
              <input type="text" class="form-control" id="phoneNumber" name="phone" placeholder="Phone">
            </div>
          </div>
          <div class="form-row">

            <!--Gender-->
            <label class="col-5 py-3">Gender</label>
            <div class="my-auto custom-control form-group custom-radio custom-control-inline">
              <input type="radio" id="male" name="gender" value="Male" class="custom-control-input">
              <label class="custom-control-label" for="male">Male</label>
            </div>
            <div class="my-auto custom-control form-group custom-radio custom-control-inline">
              <input type="radio" id="female" name="gender" value="Female" class="custom-control-input">
              <label class="custom-control-label" for="female">Female</label>
            </div>
          </div>
          <div class="form-row">

            <!--Marital Status-->
            <label class="col-5 pt-2 pb-3">Marital Status</label>
            <div class="my-auto custom-control form-group custom-radio custom-control-inline">
              <input type="radio" id="married" name="maritalStatus" value="Married" class="custom-control-input">
              <label class="custom-control-label" for="married">Married</label>
            </div>
            <div class="my-auto custom-control form-group custom-radio custom-control-inline ">
              <input type="radio" id="single" name="maritalStatus" value="Single" class="custom-control-input">
              <label class="custom-control-label" for="single">Single</label>
            </div>
            <div class="my-auto custom-control form-group custom-radio custom-control-inline ">
              <input type="radio" id="divorced" name="maritalStatus" value="Divorced" class="custom-control-input">
              <label class="custom-control-label" for="divorced">Divorced</label>
            </div>
          </div>
          <div class="form-row">
            <!--Religion-->
            <div class="col-12 my-1 form-group">
              <label class="mr-sm-2 " for="religion">Religion</label>
              <select class="custom-select mr-sm-2" id="religion" name="religion">
                <option selected hidden>Choose...</option>
                <option value="Christianity">Christianity</option>
                <option value="Islam">Islam</option>
                <option value="Other">Other</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <!--Genotype-->
            <div class="col-12 my-1 mt-4 form-group">
              <label class="mr-sm-2 " for="genotype">Genotype</label>
              <select class="custom-select mr-sm-2" id="genotype" name="genotype">
                <option selected hidden>Choose...</option>
                <option value="AA">AA</option>
                <option value="AS">AS</option>
                <option value="SS">SS</option>
              </select>
            </div>
          </div>
          <div class="form-row">
            <!--Blood Group-->
            <div class="col-12 my-1 form-group mt-4">
              <label class="mr-sm-2 " for="bloodGroup">Blood Group</label>
              <select class="custom-select mr-sm-2" id="bloodGroup" name="bloodGroup">
                <option selected hidden>Choose...</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
              </select>
            </div>
          </div>
          <!--<div class="form-group mt-4">
            Passport
            <label>Upload Passport</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="passport">
              <label class="custom-file-label" for="passport">Choose file</label>
            </div>
          </div>-->
          <div class="form-row ">
            <!--Parents/Guardian Name-->
            <div class="form-group col-6">
              <label for="parentName">Parent/Guardian Name</label>
              <input type="text" class="form-control" id="parentName" name="g-name" placeholder="Guardian Name">
            </div>

            <!--Parent/Guardian Number-->
            <div class="form-group col-6">
              <label for="parentNumber">Parent/Guardian Phone Number</label>
              <input type="number" class="form-control" id="parentNumber" name="g-no" placeholder="Guardian Phone">
            </div>

            <div class="form-group col-6">
              <label for="parentEmail">Parent/Guardian Email</label>
              <input type="email" class="form-control" id="parentEmail" name="g-email" placeholder="Guardian Email">
            </div>
          </div>
        </section>


        <!--Geographical Details-->
        <section class="personal container">
          <h4>Geographical Details</h4>
          <div class="line"></div>
          <div class="form-row">
            <!--Nationality-->
            <div class="col-12 my-1 form-group mt-4">
              <label class="mr-sm-2 " for="nationality">Nationality</label>
              <input type="text" class="form-control" name="nationality">
            </div>
          </div>
          <div class="form-row">
            <!--State of origin-->
            <div class="col-12 my-1 form-group mt-4">
              <label class="mr-sm-2" for="state">State of Origin</label>
              <input type="text" class="form-control" name="state" id="state">
            </div>
          </div>
          <div class="form-row">

            <!--Local Government-->
            <div class="form-group col-12 mt-3">
              <label for="localGovernment">Local Government</label>
              <input type="text" class="form-control" name="local" id="localGovernment">
            </div>
          </div>
          <div class="form-row">

            <!--Home Town-->
            <div class="form-group col-md-6">
              <label for="homeTown">Home Town</label>
              <input type="text" class="form-control" name="town" id="homeTown">
            </div>

            <!--Home Address-->
            <div class="form-group col-md-6">
              <label for="homeAddress">Home Address</label>
              <input type="text" class="form-control" name="home" id="homeAddress">
            </div>
          </div>
        </section>


        <!--Next of Kin-->
        <section class="container">
          <h4>Next Of Kin</h4>
          <div class="line"></div>
          <div class="form-row mt-4">
            <div class="form-group col-6">
              <label for="kinName">Name</label>
              <input type="text" class="form-control" name="kinName" id="kinName">
            </div>
            <div class="form-group col-6">
              <label for="kinAddress">Address</label>
              <input type="text" class="form-control" name="kinAddress" id="kinAddress">
            </div>
            <div class="form-group col-6 col-md-4">
              <label for="kinNumber">Phone Number</label>
              <input type="number" class="form-control" name="kinNumber" id="kinNumber">
            </div>
            <div class="form-group col-6 col-md-4">
              <label for="kinRelationship">Relationship</label>
              <input type="text" class="form-control" name="kinRelationship" id="kinRelationship">
            </div>
            <div class="form-group col-12 col-md-4">
              <label for="kinEmail">Email</label>
              <input type="email" class="form-control" name="kinEmail" id="kinEmail">
            </div>
          </div>
        </section>

        <!--Sponsor-->
        <section class="container">
          <h4>Sponsor</h4>
          <div class="line"></div>
          <div class="form-row mt-4">
            <div class="form-group col-6">
              <label for="sponsorName">Name</label>
              <input type="text" class="form-control" name="s-name" id="sponsorName">
            </div>
            <div class="form-group col-6">
              <label for="sponsorAddress">Address</label>
              <input type="text" class="form-control" name="s-address" id="sponsorAddress">
            </div>
            <div class="form-group col-6">
              <label for="sponsorNumber">Phone Number</label>
              <input type="number" class="form-control" name="s-no" id="sponsorNumber">
            </div>
            <div class="form-group col-6">
              <label for="sponsorEmail">Email</label>
              <input type="email" class="form-control" name="s-email" id="sponsorEmail">
            </div>
          </div>
          <section class="personal container">
          <h4>School</h4>
          <div class="line"></div>
          <div class="form-row">

            <!--Faculty-->
            <div class="col-6 my-1 form-group mt-4">
              <label class="mr-sm-2 " for="faculty">Faculty</label>
              <select class="custom-select mr-sm-2" id="faculty" name="faculty">
                @foreach($faculty AS $faculty)
                    <option value="{{ $faculty->faculties_id }}">{{ $faculty->title }}</option>
                @endforeach
              </select>
            </div>

            <!--Department-->
            <div class="col-6 my-1 form-group mt-4">
              <label class="mr-sm-2 " for="department">Department</label>
              <select class="custom-select mr-sm-2" id="department" name="department">
                @foreach($department AS $department)
                    <option value="{{ $department->dept_id }}">{{ $department->department }}</option>
                @endforeach
            </div>

            <!--Enrolment Type-->
            <label class="col-4 mt-4">Enrolment Type</label>
            <div class="custom-control mt-4 form-group custom-radio custom-control-inline">
              <input type="radio" id="jamb" value="JAMB" name="enrollmentType" class="custom-control-input">
              <label class="custom-control-label" for="jamb">JAMB</label>
            </div>
            <div class="custom-control form-group mt-4 custom-radio custom-control-inline ">
              <input type="radio" id="directEntry" value="Direct Entry" name="enrollmentType" class="custom-control-input">
              <label class="custom-control-label" for="directEntry">Direct Entry</label>
            </div>

            <!--Jamb Number-->
            <div class="form-group col-6">
              <label for="jambNumber">Jamb Number</label>
              <input type="text" class="form-control" id="jambNumber" name="jambNumber">
            </div>

            <!--Jamb Score-->
            <div class="form-group col-6">
              <label for="jambScore">JAMB Score</label>
              <input type="number" class="form-control" id="jambScore" name="jambScore">
            </div>
          </div>
        </section>
          
          {{csrf_field()}}
          <button type="submit" class="btn btn-primary p-md-3">Create Account</button>
        </section>
      </form>
@endif
@endsection

