<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PatientsController extends Controller
{
    public function store(){
        //return request()->all();
        $patient = new Patient();
        $patient->name = request('name');
        $patient->lname1 = request('lname1');
        $patient->lname2 = request('lname2');
        $patient->email = request('email');
        $patient->day = request('day');
        $patient->month = request('month');
        $patient->year = request('year');
        $patient->riskage = request('riskage');
        $patient->cigsmoke = request('cigsmoke');
        $patient->yearssmoke = request('yearssmoke');
        $patient->hourswood = request('hourswood');
        $patient->yearswood = request('yearswood');
        $patient->save();

        return redirect('/');
    }
}