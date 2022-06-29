<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Support\Facades\Stroage;
use File;



use App\Models\User;
use App\Models\prescription;
use App\Models\doctorDetails;


class UserController extends Controller
{
    // ========================================================================================================
    // These functions are use for all users
    // new user register
    public function newUserReg(Request $request)
    {
        // Isert the data to databse 
        $user = User::create([            
            'name' => $request->name,          
            'Lname' => $request->Lname,          
            'age' => $request->age,          
            'gender' => $request->gender,          
            'mobileNumber' => $request->mobileNumber,          
            'address' => $request->address,                
            'email' => $request->email,            
            'userRole' => $request->userRole,            
            'password' => Hash::make($request->password),
        ]);
        // Attach the user rolfdsza  
        $user->attachRole($request->role_id);
                
        event(new Registered($user));        
        
        return redirect()->back()->with('success','You Are successfully Registered !'); 
    }

  
    // ========================================================================================================
    // Users Layouts
    // admin layout
    public function viewAdminLayout()
    {
        return view('layout.admin.adminLayout');
    }
    // end Users Layouts


    // ========================================================================================================
    // Users Dashboards
    public function viewAdminDashboard()
    {
        return view ('dashboards.adminDashboard');
    }

    // ========================================================================================================
    // Admin Section

    // **************************************USERS**************************************
    // Customer view
    public function viewAdmin()
    {
        $admins = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'admin'); 
        })->get();
        return view('users.admin.viewUsers.viewAdmin',['admins'=>$admins]);
    }
    // Customer view
    public function viewAdminCustomer()
    {
        $customers = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'customer'); 
        })->get();
        return view('users.admin.viewUsers.viewCustomer',['customers'=>$customers]);
    }
    // Staff member view
    public function viewAdminStaff()
    {
        $staff = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'staff'); 
        })->get();
        return view('users.admin.viewUsers.viewStaff',['staff'=>$staff]);
    }
    // Dealer view
    public function viewAdminDealers()
    {
        $dealers = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'dealer'); 
        })->get();
        return view('users.admin.viewUsers.viewDealers',['dealers'=>$dealers]);
    }
    // Doctor view
    public function viewAdminDoctors()
    {
        $doctors = User::whereHas('roles', function ($q) {
            $q->where('roles.name', '=', 'doctor'); 
        })->get();
        return view('users.admin.viewUsers.viewDoctor',['doctors'=>$doctors]);
    }


    // delete users
    //   delete customer
      public function deleteUser($id)
      {
          $customer =User::where('id','=',$id)->update(['status' => '0']);
          return redirect()->back()->with('status', 'User details successfully deleted');
      }

    //   delete staffMember
    public function deleteStaff($id)
    {
        $satff =User::where('id','=',$id)->update(['status' => '0']);
        return redirect()->back()->with('status', 'User details successfully deleted');
    }

    //   delete staffMember
    public function deleteDoctor($id)
    {
        $doctor =User::where('id','=',$id)->update(['status' => '0']);
        return redirect()->back()->with('status', 'User details successfully deleted');
    }

    //   delete staffMember
    public function deleteDealer($id)
    {
        $dealer =User::where('id','=',$id)->update(['status' => '0']);
        return redirect()->back()->with('status', 'User details successfully deleted');
    }

  

    // **************************************ADMIN PROFILE**************************************
    // adminProfileView




    // update doctor details
    public function update(Request $request,$id)
    {
        $admin = User::find($id);
        $admin->name = $request->input('name');
        $admin->Lname = $request->input('Lname');
        $admin->age = $request->input('age');
        $admin->gender = $request->input('gender');
        $admin->mobileNumber = $request->input('mobileNumber');
        $admin->address = $request->input('address');
        $admin->email  = $request->input('email ');

        $admin->update();   

        return redirect('/viewDoctorDetailsTable')->with('status',"Data updated successfully");
    }

    
    // ========================================================================================================


    // **************************************USER PRESCRIPTION**************************************
    //view userPrescription
    public function viewPrescription()
    {
        $prescriptions = prescription::all();
        return view('users.admin.prescription.viewPrescription',compact(['prescriptions']));
    }  

    // preView Pescription
    public function preViewPrescription($id)
    {
        $pre = prescription::find($id);
        return view('users.admin.prescription.preViewPrescription',compact(['pre']));
    }


    
    // **************************************DOCTOR DETAILS**************************************
    // viewDoctoDetailsForm
    public function viewDocDetailForm($id)
    {
        $doctor = User::find($id);
        return view('users.admin.doctor.doctorAddDetail',compact(['doctor']));
    }

    // addDoctorDetails
    public function addDoctorDetail(Request $request)
    {
        $docDetails = new doctorDetails;
        $docDetails->docName = $request->docName;
        $docDetails->docHospital = $request->docHospital;
        $docDetails->docCatergory = $request->docCatergory;
        $docDetails->docQulification = $request->docQulification;
   

      // Doctor  image Upload
      $docPhoto=$request->docPhoto;
      $filename=time().'.'.$docPhoto->getClientOriginalExtension();
      $request->docPhoto->move('docImg',$filename);
      $docDetails->docPhoto=$filename;

        $docDetails->save();

        return redirect()->back()->with('status', 'User details successfully deleted');
    }

    // viewDoctorDetailsTable
    public function viewDoctorDetailsTable()
    {
        $docDetail = doctorDetails::all();
        return view('users.admin.doctor.doctorViewDetails',compact(['docDetail']));
    }

    // editDoctorDetails
    public function editDoctorDetail($id)
    {
        $doc = doctorDetails::find($id);
        return view('users.admin.doctor.editDoctorDetails',compact(['doc']));
    }

    // updateDoctorDetaills
    public function updateDoctorDetails(Request $request,$id)
    {
        $doc = doctorDetails::find($id);
        $doc->docName = $request->input('docName');
        $doc->docHospital = $request->input('docHospital');
        $doc->docCatergory = $request->input('docCatergory');
        $doc->docQulification = $request->input('docQulification');
              // Doctor  image Upload
        $docPhoto=$request->docPhoto;
        $filename=time().'.'.$docPhoto->getClientOriginalExtension();
        $request->docPhoto->move('docImg',$filename);
        $doc->docPhoto=$filename;
        $doc->update();   

        return redirect('/viewDoctorDetailsTable')->with('status',"Data updated successfully");
    }

    // deleteDoctorDetails
    public function deleteDoctorDetail($id)
    {
        $doc =doctorDetails::where('id','=',$id)->update(['status' => '0']);       
        return redirect()->back()->with('status', 'User details successfully deleted');       
    }

}
