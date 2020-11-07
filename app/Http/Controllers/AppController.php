<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicantRequest;
use App\Models\Applicant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AppController extends Controller
{
    public function getApplicant(){

        $applicant = Applicant::all();

        return view('applicant_list')->with('applicants', $applicant);
    }

    public function appEdit(Applicant $applicant){

        return view('edit')->with('applicant',$applicant);
    }

    public function appUpdate(ApplicantRequest $request, Applicant $applicant){

        $applicant->update($request->all());

        return redirect('/applicants');

    }

    public function main(){
        return view('home');
    }
}
