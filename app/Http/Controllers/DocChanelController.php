<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


use App\Models\booking;
use App\Models\appointment;
use App\Models\doctorDetails;





class DocChanelController extends Controller
{
    // ========================================================================================================
    // Admin Section
    public function viewDocByAdmin()
    {
        $chanels= booking::all();
        return view('.users.admin.doCchanel.viewDocChanel',compact(['chanels']));
    }

    // create new chanel
    public function createNewChanel(Request $request)
    {
        $user = booking::create([            
            'docName' => $request->docName,          
            'startDate' => $request->startDate,            
            'endDate' => $request->endDate,
        ]);
        return redirect()->back()->with('success','You Are successfully Registered !'); 
    }

    // View Customer appointment
    public function viewAppointment()
    {
        $viewAppointment = appointment::all();
        return view ('users.admin.doCchanel.viewAppoinment',compact(['viewAppointment']));
    }

    // make an appointment
    public function makeAppointment(Request $request)
    {

        $appointments = appointment::create([            
            'docName' => $request->docName,          
            'docCatergory' => $request->docCatergory,          
            'pName' => $request->pName,            
            'pAge' => $request->pAge,
            'pMobile' => $request->pMobile,
            'pAddress' => $request->pAddress,
            'pGender' => $request->pGender,
            'pStatus' => $request->pStatus,
            'appointmentDate' => $request->appointmentDate,
            'appointmentTime' => $request->appointmentTime,
            
        ]);
        return view('landingPage.appointmentDetails'); 
    }

    // ========================================================================================================
    // Doctor Section
    //viewApointment
    public function viewAppointmentByDoc()
    {

        $viewAppointment=DB::table('appointments')
        ->join('doctor_details','doctor_details.id','=','appointments.id')
        ->where('appointments.id','=','1')
        ->select('appointments.*','doctor_details.*')
        ->get();


       
        return view('users.doctor.appointment.viewApointment',compact(['viewAppointment']));
    }
}


