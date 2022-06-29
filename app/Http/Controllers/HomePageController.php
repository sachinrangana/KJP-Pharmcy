<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Facades\Stroage;
use File;
use Illuminate\Support\Facades\DB;


use App\Models\booking;
use App\Models\prescription;
use App\Models\doctorDetails;
use App\Models\product;
use App\Models\catergory;
use App\Models\appointment;



class HomePageController extends Controller
{

   // view Product
   public function viewHomePage()
   {
      $products = product::where('trending','1')->take(15)->get();
      return view('landingPage.index',compact(['products']));
   }


   // calender appointment
   public function viewAppoinment()
   {
         $joins=DB::table('appointments')
        ->join('doctor_details','doctor_details.id','=','appointments.id')
        ->select('appointments.*','doctor_details.*')
        ->get();

      $events = array();
      $bookings = booking::all();
         foreach($bookings as $booking){
            $events[] = [
               'title' => $booking->docName,
               'start' => $booking->startDate,
            
            ];
         }     
      return view('landingPage.viewAppoinment',['events' =>$events],compact(['joins']));
   }

   // view Prescription 
   public function viewUserPrescription()
   {
      return view('landingPage.prescription');
   }

   // upload prescription
   public function addPrescription(Request $request)
   {
      $recipt = new prescription;
      $recipt->userName =$request->userName;
      $recipt->age =$request->age;
      $recipt->gender =$request->gender;
      $recipt->phone =$request->phone;
      $recipt->address =$request->address;
      $recipt->street =$request->street;
      $recipt->city =$request->city;
      $recipt->postalCode =$request->postalCode;
      $recipt->prescriptionDate =$request->prescriptionDate;
      // Prescription Upload image
         $prescription=$request->prescription;
         $filename=time().'.'.$prescription->getClientOriginalExtension();
         $request->prescription->move('File',$filename);
         $recipt->prescription=$filename;
      $recipt->status = '1';        
      $recipt->save();
      return redirect()->back()->with('success','Your data is successfully stored !'); 
   }

   // view Doctor Details
   public function viewDoctor()
   {
      $docDetails = doctorDetails::all();
      return view('landingPage.doctor',compact(['docDetails']));
   }

   // Search Doctor
   public function searchDoc()
   {
      $searchText =$_GET['query'];
      $searchDoc = doctorDetails::where('docCatergory','LIKE','%'.$searchText.'%')->get();

      return view('landingPage.searchDoc',compact(['searchDoc']));
   }

   // Contact Page
   public function contact()
   {
      return view('landingPage.contact');
   }

   // productCatergory Page
   public function viewCatergoryHome()
   {
      $catergory = catergory::where('status','1')->get();
      return view('landingPage.product',compact(['catergory']));
   }

   // fetch product by catergory
   public function viewCatergory($slug)
   {
      if(catergory::where('slug',$slug)->first())
      {
         $catergory = catergory::where('slug',$slug)->first();
         $products = product::where('catid', $catergory->id)->where('status','0')->get();
         return view('landingPage.fetchProductByCatergory',compact(['catergory','products']));
      }
      else{

      }
   }
}
