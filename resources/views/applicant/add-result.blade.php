@extends('layouts.applicant_view')

@section('content')
@php
$key = str_replace('@', '', $user->email)
@endphp
@if (Cookie::get(str_replace('.', '', $key).'Education'))
    <div class="alert alert-success">{{ Cookie::get(str_replace('.', '', $key).'Education') }}</div>
@else
    <form method="POST" action="add-result">
    {{ csrf_field() }}
        <!--O-Level-->
        <section class="container">
          <h4>O-Level</h4>
          <div class="line"></div>
          <div class="form-row">
            <!--O-level Type-->
            <div class="col-12 my-1 form-group mt-4">
              <label class="mr-sm-2 " for="oLevelType">Type</label>
              <select class="custom-select mr-sm-2" id="oLevelType" name="oLevelType">
                <option selected hidden>Choose...</option>
                <option value="WASSCE">WASSCE</option>
                <option value="NECO">NECO</option>
                <option value="IGSCE">IGSCE</option>
              </select>
            </div>
          </div>

          <!--Scores-->
          <div class="form-row mt-4">
            <label class="col-12">Enter your O-Level scores</label>
            <div class="form-group col-12 mt-2">
              <label for="subject1" class="m-0">Subject 1</label>
              <div class="d-flex col-md-7 mt-3 p-0">
                <input type="text" name="subject1" id="subject1">
                <select class="custom-select mr-sm-2" name="grade1" id="grade1">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject2" class="m-0">Subject 2</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject2" id="subject2">
                <select class="custom-select mr-sm-2" name="grade2" id="grade2">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject3" class="m-0">Subject 3</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject3" id="subject3">
                <select class="custom-select mr-sm-2" name="grade3" id="grade3">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject4" class="m-0">Subject 4</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject4" id="subject4">
                <select class="custom-select mr-sm-2" name="grade4" id="grade4">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject5" class="m-0">Subject 5</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject5" id="subject5">
                <select class="custom-select mr-sm-2" name="grade5" id="grade5">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject6" class="m-0">Subject 6</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject6" id="subject6">
                <select class="custom-select mr-sm-2" name="grade6" id="grade6">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject7" class="m-0">Subject 7</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject7" id="subject7">
                <select class="custom-select mr-sm-2" name="grade7" id="grade7">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject8" class="m-0">Subject 8</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject8" id="subject8">
                <select class="custom-select mr-sm-2" name="grade8" id="grade8">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
            <div class="form-group col-12 mt-2">
              <label for="subject9" class="m-0">Subject 9</label>
              <div class="d-flex col-md-7 mt-3 p-0">
              <input type="text" name="subject9" id="subject9">
                <select class="custom-select mr-sm-2" name="grade9" id="grade9">
                    <option value="A1">A1</option>
                    <option value="B2">B2</option>
                    <option value="B3">B3</option>
                    <option value="C4">C4</option>
                    <option value="C5">C5</option>
                    <option value="C6">C6</option>
                    <option value="D7">D7</option>
                    <option value="E8">E8</option>
                    <option value="F9">F9</option>
                </select>
              </div>
            </div>
          </div>
        </section>

        <button type="submit" class="btn btn-primary px-5 py-2">Save</button>
    </form>
@endif
@endsection

