<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use App\Models\VaccinationAppointment;
use Illuminate\Http\Request;
use function Symfony\Component\HttpKernel\HttpCache\save;

class AdminController extends Controller
{
    //

    public function admin()
    {
        $all_users = User::where('user_type', '0')->count();
        $all_doctors = Doctor::count();
        $all_doctor_appointments = Appointment::count();
        $all_vaccination_appointments = VaccinationAppointment::count();
        $users_table = User::all();
        return view('admin.home', compact('users_table','all_users', 'all_doctors', 'all_doctor_appointments', 'all_vaccination_appointments')); // Add The retrived data to the afmin home page
    }

    public function add_view()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {
        $doctor = new doctor;
        $image = $request->file;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->file->move('doctorimage', $imagename);
        $doctor->image = $imagename;
        $doctor->name = $request->name;
        $doctor->email = $request->email;
        $doctor->phone = $request->phone;
        $doctor->doctor_id = $request->doctor_id;
        $doctor->hospital = $request->hospital;
        $doctor->speciality = $request->speciality;
        $doctor->save();
        return redirect()->back()->with('message', 'Doctor Added Successfully');
    }

    public function show_appointment()
    {

        $data = Appointment::all();

        return view('admin.show_appointment', compact('data'));
    }

    public function approved($id)
    {
        $data = appointment::find($id);
        $data->status = 'Approved';
        $data->save();
        return redirect()->back();
    }

    public function canceled($id)
    {
        $data = appointment::find($id);
        $data->status = 'Canceled';
        $data->save();
        return redirect()->back();
    }

    public function show_doctor_view()
    {
        $data = doctor::all();
        return view('admin.show_doctor_view', compact('data'));
    }

    public function deleteDoctor($id)
    {
        $data = doctor::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function updateDoctor($id)
    {
        $data = doctor::find($id);
        return view('admin.update_doctor', compact('data'));
    }
    public function editDoctor(Request $request, $id)
    {
        $doctor = doctor::find($id);
        $doctor->name = $request->name;
        $doctor->phone = $request->phone;
        $doctor->email = $request->email;
        $doctor->speciality = $request->speciality;
        $doctor->doctor_id = $request->doctor_id;
        $doctor->save();
        return redirect()->back()->with('message', 'Details Updated Successfully');
    }

    public function vaccinationAppointment()
    {
        $vaccination_appointment_data = VaccinationAppointment::all();
        return view('admin.vaccination_appointments', compact('vaccination_appointment_data'));
    }

    public function appointmentUpdate(Request $request, $id)
    {
        $vaccination_appointment = VaccinationAppointment::find($id);
        $vaccination_appointment->vaccination_date = $request->vaccination_date;
        $vaccination_appointment->center = $request->center;
        $vaccination_appointment->save();
        return redirect()->back();
    }

    public function cancelVaccinationAppoint($id)
    {
        $vaccination_appointment = VaccinationAppointment::find($id);
        $vaccination_appointment->delete();
        return redirect()->back();
    }

    public function searchUsersByName(){
        $all_users = User::where('user_type', '0')->count();
        $all_doctors = Doctor::count();
        $all_doctor_appointments = Appointment::count();
        $all_vaccination_appointments = VaccinationAppointment::count();
        $search_text = $_GET['query'];
        $user = User::where('name','LIKE','%'.$search_text.'%')->get();
        return view('admin.searched_user',compact('user','all_users', 'all_doctors', 'all_doctor_appointments', 'all_vaccination_appointments'));
    }
}
