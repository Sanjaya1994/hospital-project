<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use\App\Patient;
use\App\Drug;
use\App\Prescribe;
use\App\Ulab;
use\App\Lab;
use\App\User;
use\App\Massege;
use\App\Bill;
class PatientController extends Controller
{
    public function deletedrug($Med_id){
        $drug=Drug::find($Med_id);
       
         $drug->delete();
        return redirect()->back();
    
    }
    public function getbloodlab(){
        return view('bloodlab');
    }
    public function getblooddoc(){
        return view('blooddoc');
    }
    public function geturinedoc(){
        return view('urinedoc');
    }
 
    public function geturinelab(){
        return view('urinelab');
    }
    public function getdocpres(){
        return view('docpres02');
    }
    public function getlabtechblood(){
        return view('labtechblood');
    }
    public function getbloodhistory(){
        return view('bloodhistory');
    }
    public function geturinehistory(){
        return view('urinehistory');
    }

    //getbloodhistory
    //getlabtechblood
    public function updateTasklabAsCompleted($id){
        $patient=Patient::find($id);
        $patient->blood=1;
        $patient->save();
        return redirect()->back();
   
    }
    public function adminmes($id){
        $massege=Massege::find($id);
        $massege->receive=0;
        $massege->save();
        return redirect()->back();
   
    }
   
    public function updatebloodlab($id){
         $patient=Patient::find($id);
         return view('bloodlab')->with('labdata',$patient);
     }
    
     public function updatedrugs($id){
        $drug=Drug::find($id);
        return view('updatedrugdet')->with('drugdata',$drug);
    }
     public function updateurinelab($id){
        $patient=Patient::find($id);
        return view('urinelablab')->with('urinedata',$patient);
    }
    
    public function updateTaskurineAsCompleted($id){
        $patient=Patient::find($id);
        $patient->urine=1;
        $patient->save();
       // return view('urinelab');
        return redirect()->back();
    }

        public function docprescribe($id){
            $patient=Patient::find($id);
            $patient->prescription=1;
            $patient->save();
           return view('docpres02')->with('docdata',$patient);
           
    }
    public function updateTasklabsubAsCompleted($id){
        $patient=Patient::find($id);
        $patient->blood=1;
        $patient->save();
        return view('getlabtechblood');
      //  return redirect()->back();
    
    }
//
    //updateTaskurineAsCompleted
   /* public function getdocprescribe(){
     return view('docpres02');
    }*/
public function store(Request $request){
    $patient=new Patient();
   
    $patient->first_name=$request->first_name;
    $patient->last_name=$request->last_name;
    $patient->gender=$request->gender;
    $patient->age=$request->age;
    $patient->dob=$request->dob;
    $patient->identity=$request->identity;
    $patient->address=$request->address;
    $patient->phone_number=$request->phone_number;
    $patient->appdate=$request->appdate;
    $patient->doctor_fee=$request->doctor_fee;
    $patient->save();
    return redirect()->back()->with('message','Patient Add Successfully');
}
public function drugstore(Request $request){
    $this->validate($request,  [
            
        'Med_No'=>'required|min:2|',
        'Exp_date'=>'required|min:2|',
        'Mnf_date'=>'required',
        
      //
        ]);
    $drug=new Drug();
    $drug->Med_No=$request->Med_No;
    $drug->Batch_No=$request->Batch_No;
    $drug->Med_name=$request->Med_name;
    $drug->Mnf_date=$request->Mnf_date;
    $drug->Exp_date=$request->Exp_date;
    $drug->Company_name=$request->Company_name;
    $drug->Quantity=$request->Quantity;
    $drug->Unit_Price=$request->Unit_Price;
    $drug->save();
    return redirect()->back()->with('message','Drugs Successfully Add to Database');
}





public function messagetask(Request $request){
    $this->validate($request,  [
            
        'first_name'=>'required|min:2|',
        'identity'=>'required|min:2|',
        'role'=>'required',
        
      //
        ]);
    $massege=new Massege();
    $massege->first_name=$request->first_name;
    $massege->last_name=$request->last_name;
    $massege->identity=$request->identity;
    $massege->role=$request->role;
    $massege->message=$request->message;
    $massege->receive=1;
  
    $massege->save();
    return redirect()->back()->with('message','Message send Successfully');
}


public function drugupdate(Request $request){
   
    $id=$request->id;
    $Med_No=$request->Med_No;
    $Batch_No=$request->Batch_No;
    $Med_name=$request->Med_name;
    $Mnf_date=$request->Mnf_date;
    $Exp_date=$request->Exp_date;
    $Company_name=$request->Company_name;
    $Quantity=$request->Quantity;
    $Unit_Price=$request->Unit_Price;
    $drug=new Drug;
  // $drug=Drug::find($id);
    $drug->Med_No=$Med_No;
    $drug->Med_name=$Med_name;
    $drug->Batch_No=$Batch_No;
    $drug->Mnf_date=$Mnf_date;
    $drug->Exp_date=$Exp_date;
    $drug->Company_name=$Company_name;
    $drug->Quantity=$Quantity;
    $drug->Unit_Price=$Unit_Price;
    $drug->save();
    $drugs=Drug::all();
     return view('updatedrug')->with('drugs',$drugs);
}


public function billstore(Request $request){
   
    $bill=new Bill();
    $bill->first_name=$request->first_name;
    $bill->id=$request->id;
    $bill->identity=$request->identity;
    $bill->address=$request->address;
    $bill->medprice=$request->medprice;
    $bill->active=1;
    $bill->save();
    return redirect()->back();
  /*  $bill=new Bill();
    $bill->id=$request->id;
    $bill->first_name=$request->first_name;
    $bill->identity=$request->identity;
    $bill->address=$request->address;
    $bill->active=1;
    $bill->save();
    return redirect()->back();*/
}
   // $patient=new Patient();
   
    //$patient->first_name=$request->first_name;





public function bloodstask(Request $request){  

    $lab=new Lab();
    $lab->first_name=$request->first_name;
    $lab->date=$request->date;
    $lab->id=$request->id;
    $lab->identity=$request->identity;
 $lab->lab_R_id=$request->lab_R_id;
$lab->hgp=$request->hgp;
$lab->vcm=$request->vcm;
$lab->rdw=$request->rdw;
$lab->plt=$request->plt;
$lab->leuc=$request->leuc;
$lab->linf=$request->linf;
$lab->l_Fee=$request->l_Fee;
$lab->active=1;
$lab->save();
return redirect()->back();
 



}

public function urinestask(Request $request){  

    $ulab=new Ulab();
    $ulab->first_name=$request->first_name;
 
    $ulab->id=$request->id;
    $ulab->identity=$request->identity;
 $ulab->lab_id=$request->lab_id;
$ulab->color=$request->color;
$ulab->appearance=$request->appearance;
$ulab->ph=$request->ph;
$ulab->glucose=$request->glucose;
$ulab->wpc=$request->wpc;
$ulab->rbc=$request->rbc;
$ulab->l_Fee=$request->l_Fee;
$ulab->protein=$request->protein;
$ulab->active=1;
$ulab->save();
return redirect()->back();
 



}
public function presstore(Request $request){
  
    $prescribe=new Prescribe();
    $prescribe->first_name=$request->first_name;
    
    $prescribe->id= $request->id;
    $prescribe->age= $request->age;
    $prescribe->bp=$request->bp;
    $prescribe->diagnose=$request->diagnose;
    $prescribe->invest=$request->invest;
    $prescribe->medname=$request->medname;
    $prescribe->medname01=$request->medname01;
    $prescribe->medname02=$request->medname02;
    $prescribe->medname03=$request->medname03;
    $prescribe->medname04=$request->medname04;
    $prescribe->medname05=$request->medname05;
    $prescribe->dose=$request->dose;
    $prescribe->dose01=$request->dose01;
    $prescribe->dose02=$request->dose02;
    $prescribe->dose03=$request->dose03;
    $prescribe->dose04=$request->dose04;
    $prescribe->dose05=$request->dose05;
    $prescribe->route=$request->route;
    $prescribe->route01=$request->route01;
    $prescribe->route02=$request->route02;
    $prescribe->route03=$request->route03;
    $prescribe->route04=$request->route04;
    $prescribe->route05=$request->route05;
    $prescribe->duration=$request->duration;
    $prescribe->duration01=$request->duration01;
    $prescribe->duration02=$request->duration02;
    $prescribe->duration03=$request->duration03;
    $prescribe->duration04=$request->duration04;
    $prescribe->duration05=$request->duration05;
    $prescribe->bday=$request->bday;
   
    $prescribe->plans=$request->plans;

    $prescribe->save();
    return redirect()->back()->with('message','Prescribe send Successfully');
    
}


}
