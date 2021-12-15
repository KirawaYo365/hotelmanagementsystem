<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

use App\Models\Doctor;

class AdminController extends Controller
{

    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function upload(Request $request)
    {

        $doctor=new doctor;
        $image=$request->file;
        $imagename=time().'.'.$image->getClientoriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->speciality=$request->speciality;
        $doctor->room=$request->room;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');

    }

    public function showappointment()
    {
        $data=appointment::all();
        return view('admin.showappointment',compact('data'));
    }

    public function approved($id)
    {
        $data=appointment::find($id);
        $data->status='Approved';
        $data->save();
        return redirect()->back();
    }

    public function cancelled($id)
    {
        $data=appointment::find($id);
        $data->status='Cancelled';
        $data->save();
        return redirect()->back();
    }
}
