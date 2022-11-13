<?php

namespace App\Http\Livewire\Backend\Auth\Admin;

use Livewire\Component;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Validator;
use App\Models\Auth\Admin;
use App\Models\Auth\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SignupController extends Component
{
    public function render()
    {
        return view('livewire.backend.auth.admin.signup-controller')->layout('layouts.admin-auth');
    }

    public function AdminSignup(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        $Admin = new Admin();
        $Admin->name = $request->ADM_Name;
        $Admin->email = $request->ADM_Email;
        $Admin->password = bcrypt($request->ADM_Password);

        if ($Admin->save()) {
            return redirect()->route('login_form')->with('Success!', 'Admin Register Successfylly!');
        }
    }

    public function CompanySignup(Request $request)
    {
        // dd($request->all());

        $validator = Validator::make($request->all(), [
                    'ADM_Email' => 'required|email',
                    'ADM_Password' => 'required'
                ]);

        if ($validator->fails()) {
            return back()->with('Error!', '400 Bad Request \n Validations Failed');
        }

        $Admin = new Company();
        $Admin->name = $request->ADM_Name;
        $Admin->email = $request->ADM_Email;
        $Admin->password = bcrypt($request->ADM_Password);

        if ($Admin->save()) {
            return redirect()->route('Company.Login')->with('Success!', 'Company Register Successfylly!');
        }
    }
}
