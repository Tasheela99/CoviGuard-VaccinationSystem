<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\VaccinationAppointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Helpers\Helper;
use Illuminate\Support\Str;


class HomeController extends Controller
{
    //

    //Welcome page
    public function welcomePage()
    {
        $doctors = doctor::all();
        return view('welcome', compact('doctors'));
    }


    //user dashboard
    public function userDashBoard()
    {
        return view('user.home');
    }


    //login change
    public function redirect()
    {
        if (Auth::id()) {
            if (Auth::user()->user_type == '0') {
                $doctor = doctor::all();
                return view('user.home', compact('doctor'));
            } else {
                $all_users = User::where('user_type','0')->count();
                $all_doctors = Doctor::count();
                $all_doctor_appointments = Appointment::count();
                $all_vaccination_appointments = VaccinationAppointment::count();
                $users_table = User::all();
                return view('admin.home', compact('users_table','all_users', 'all_doctors', 'all_doctor_appointments', 'all_vaccination_appointments')); // Add The retrived data to the afmin home page
            }
        } else {
            return redirect()->back();
        }
    }


    //doctors page
    public function doctorPage()
    {
        $doctors = doctor::all();
        return view('welcomepageitems.doctorpage', compact('doctors'));
    }


    //appointment page
    public function appointmentPage()
    {
        $doctors = doctor::all();
        return view('user.appointment', compact('doctors'));
    }


    //apponitment data to the database
    public function appointment(Request $request)
    {
        $data = new appointment;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->phone = $request->phone;
        $data->date = $request->date;
        $data->message = $request->message;
        $data->doctor_name = $request->doctor_name;
        $data->status = 'In Progress';

        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message', 'Appointment Request Successfully. We Will Contact You Soon');
    }



    public function my_appointment()
    {
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $appoint = appointment::where('user_id', $userid)->get();
            return view('user.my_appointment', compact('appoint'));
        } else {
            return redirect()->back();
        }
    }

    public function cancel_appoint($id)
    {
        $data = appointment::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function symptomsPage()
    {
        $doctors = Doctor::all();
        return view('user.symptomspage',compact('doctors'));
    }

    public function lungTest()
    {
        return view('user.lung_test');
    }

    public function vaccinationAppointment()
    {
        return view('user.vaccination_appointments');
    }

    public function vaccinationAppointmentSave(Request $request)
    {
        $vaccination_id = Helper::IDGenerator(new VaccinationAppointment, 'vaccination_id', '4', 'COVI');
        $data = new vaccinationappointment;
        $data->cust_id = Str::uuid()->toString();
        $data->vaccination_id = $vaccination_id;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->address = $request->address;
        $data->division = $request->division;
        $data->test_result = $request->test_result;
        $data->identity = $request->identity;
        $data->vaccine_type = $request->vaccine_type;
        $data->phone = $request->phone;
        $data->date = $request->date;
        if (Auth::id()) {
            $data->user_id = Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with([
            "message"=>"Vaccination Appointment Request Successfully",
            "vaccination_id"=>$vaccination_id
        ]);
    }

    public function vaccinationCard(){
        if (Auth::id()) {
            $userid = Auth::user()->id;
            $vaccine_details = VaccinationAppointment::where('user_id', $userid)->get();
            return view('user.vaccination_card', compact('vaccine_details'));
        } else {
            return redirect()->back();
        }
    }
}
