<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Applicant;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('applicant.home')->with('user', auth()->user());
    }
    public function adminindex()
    {
        $applicant_list = Applicant::orderBy('applicant_id', 'ASC')->get();
        $admitted_list = Applicant::where('admission_status', 'admitted')->get();
        $admin_list = User::where('type', 'admin')->get();
        return view('administrator.dashboard')
        ->with('applicant_no', $applicant_list->count())
        ->with('admitted_no', $admitted_list->count())
        ->with('admin_no', $admin_list->count());
    }
}
