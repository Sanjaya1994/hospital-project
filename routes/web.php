<?php
use App\Lab;
use App\Ulab;
use App\Drug;
use App\Prescribe;
use Illuminate\Support\Facades\Input;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');*/
    Route::group(['middleware'=>['web']], function(){
      
            Route::get('/',[
                'uses'=>'SignUpController@indexhome',
                'as'=>'welcome'
            ]);
            Route::get('/Signup',[
                'uses'=>'SignUpController@getSignup',
                'as'=>'signup'
                ]);
               /* Route::get('/signup',[
                    'uses'=>'SignUpController@postSignUp',
                    'as'=>'signup'
                    ]);*/
                    Route::post('/signup',[
                        'uses'=>'SignUpController@postSignUp',
                        'as'=>'signup'
                    ]);

                  /*  Route::post('/savepres',[
                        'uses'=>'PatientController@presstore',
                        'as'=>'savepres'
                    ]);*/
                 
                    Route::get('/welcome',[
                        'uses'=>'SignUpController@getwelcome',
                        'as'=>'welcome'
                        ]);
                        Route::post('/login',[
                            'uses'=>'SignUpController@postLogin',
                            'as'=>'login'
                        ]);
                       Route::get('/admin',[
                            'uses'=>'SignUpController@getadmin',
                            'as'=>'admin'                    
                         ])->middleware('auth');

                         Route::get('/admindash',function(){
                            $user=App\User::all();
                            return view('admindash')->with('users',$user);
                        });
                      /*  Route::get('/doctormessage',function(){
                            $user=App\User::all();
                            return view('doctormessage')->with('users',$user);
                        });*/

                        Route::get('/adminremove',function(){
                            $user=App\User::all();
                            return view('adminremove')->with('users',$user);
                        }
                        );
                        Route::get('/removedrugs',function(){
                            $drug=App\Drug::all();
                            return view('removedrugs')->with('drugs',$drug);
                          
                        }
                        );
                        Route::get('/docpres',function(){
                            $patient=App\Patient::all();
                            return view('docpres')->with('patients',$patient);
                          
                        }
                        );
                        Route::get('/blooddoc',function(){
                            $lab=App\Lab::all();
                            $patient=App\Patient::all();
                            return view('blooddoc')->with('patients',$patient)
                            ->with('labs',$lab);
                          
                        }
                        );
                       // Route::get('/bloodlab',function(){
                           // $patient=App\Patient::all();
                          //  return view('bloodlab');//->with('patients',$patient);
                          
                     //   }
                      //  );
                        Route::get('/urinedoc',function(){
                            $ulab=App\Ulab::all();
                            $patient=App\Patient::all();                           
                            return view('urinedoc')->with('patients',$patient)
                            ->with('ulabs',$ulab);
                          
                        }
                        );
                        Route::get('/blooddoclab',function(){
                            $patient=App\Patient::all();
                            $lab=App\Lab::all();
                            return view('blooddoclab')->with('patients',$patient)
                            ->with('labs',$lab);
                          
                        }
                        );
                        Route::get('/urinedocrep',function(){
                            $patient=App\Patient::all();
                            $ulab=App\Ulab::all();
                            return view('urinedocrep')->with('patients',$patient)
                            ->with('ulabs',$ulab);
                          
                        }
                        );
                        Route::get('/urinelab',function(){
                            $patient=App\Patient::all();
                            $ulab=App\Ulab::all();
                            return view('urinelab')->with('patients',$patient)
                            ->with('ulabs',$ulab);
                        }
                        );
                        Route::get('/adminupdate',function(){
                            $user=App\User::all();
                            return view('adminupdate')->with('users',$user);
                        });
                        Route::get('/adminmassege',function(){
                            $massege=App\Massege::all();
                            return view('adminmassege')->with('masseges',$massege);
                        });
                        Route::get('/updatedrug',function(){
                            $drug=App\Drug::all();
                            return view('updatedrug')->with('drugs',$drug);
                        });
                        Route::get('/issuebill',function(){
                            $patient=App\Patient::all();
                            return view('issuebill')->with('patients',$patient);
                        });
                        
                        Route::get('/doctordash',[
                            'uses'=>'SignUpController@getdoctordash',
                            'as'=>'doctordash'
                        
                        ]);
                        Route::get('/labtech',[
                            'uses'=>'SignUpController@getlabtech',
                            'as'=>'labtech'
                        
                        ]);
                        Route::get('/pharmacist',[
                            'uses'=>'SignUpController@getpharmacist',
                            'as'=>'pharmacist'
                        
                        ]);
                        Route::get('/receiption',[
                            'uses'=>'SignUpController@getreceiption',
                            'as'=>'receiption'
                        
                        ]);
                        Route::get('/doctormessage',[
                            'uses'=>'SignUpController@getdoctormessage',
                            'as'=>'doctormessage'
                        
                        ]);
                        Route::get('/receiptionmessage',[
                            'uses'=>'SignUpController@getrepmessage',
                            'as'=>'receiptionmessage'
                        
                        ]);
                        Route::get('/pharmacistmessage',[
                            'uses'=>'SignUpController@getphamessage',
                            'as'=>'pharmacistmessage'
                        
                        ]);
                        Route::get('/labtechmessage',[
                            'uses'=>'SignUpController@getlabmessage',
                            'as'=>'labtechmessage'
                        
                        ]);
                   Route::get('/searchphadrug',[
                            'uses'=>'SignUpController@getphasearch',
                            'as'=>'searchphadrug'
                        
                        ]);
                        Route::get('/issuedrug',[
                            'uses'=>'SignUpController@getissuedrug',
                            'as'=>'issuedrug'
                        
                        ]);
                        Route::get('/bloodhistory',[
                            'uses'=>'PatientController@getbloodhistory',
                            'as'=>'bloodhistory'
                        
                        ]);
                        Route::get('/urinehistory',[
                            'uses'=>'PatientController@geturinehistory',
                            'as'=>'urinehistory'
                        
                        ]);
                        
                        
                        Route::get('/logout',[
                            'uses'=>'SignUpController@getLogout',
                            'as'=>'logout'
                        ]);
                     
                       
                      
                        Route::get('/labtechblood',function(){
                            $patient=App\Patient::all();
                            $lab=App\Lab::all();
                            return view('labtechblood')->with('patients',$patient)
                            ->with('labs',$lab);
                        }
                        );
                        Route::post('/savepatient','PatientController@store');
                     
                        Route::get('/markasapproved/{id}','SignUpController@updateTaskAsCompleted');
                        Route::get('/markasreject/{id}','SignUpController@updateTaskAsNotCompleted');

                        Route::post('/savebloodlab','PatientController@bloodstore');
                        Route::get('/markpresasapproved/{id}','PatientController@updateTasklabAsCompleted');
                        Route::get('//markurineasapproved/{id}','PatientController@updateTaskurineAsCompleted');
                        Route::get('/deletedrug/{id}','PatientController@deletedrug');
                        Route::get('/deletetask/{id}','SignUpController@deletetask');
                       Route::get('/updatetask/{id}','SignUpController@updatetaskview');
                   //    Route::get('/doctormessage','PatientController@doctormessagee');
                       Route::post('/updatetasks','SignUpController@updatetask');

                       //savedoctormessage
                       Route::post('/savedoctormessage','PatientController@messagetask');
                       Route::post('/saverepmessage','PatientController@messagetask');
                       Route::post('/savephamessage','PatientController@messagetask');
                       Route::post('/savelabmessage','PatientController@messagetask');
                       Route::post('/bloodtasks','PatientController@bloodstask');
                       Route::post('/urinetasks','PatientController@urinestask');

                      Route::post('/savepres','PatientController@presstore');
                      Route::post('/savebill','PatientController@billstore');     
                       Route::post('/savedrugs','PatientController@drugstore');
                       Route::post('/savedrugupdate','PatientController@drugupdate');
                    //  Route::get('/bloodlab','PatientController@getbloodlab');
                      // Route::get('/urinelab','PatientController@geturinelab');
                       //Route::get('/blooddoc','PatientController@getblooddoc');
                       //Route::get('/urinedoc','PatientController@geturinedoc');
                      // Route::get('/docpres02','PatientController@getdocpres');
                     
                     Route::get('/markdocpresasapproved/{id}','PatientController@docprescribe');
                     Route::get('/markmesasapproved/{id}','PatientController@adminmes');
             Route::get('/labsubmit/{id}','PatientController@updatebloodlab');
             Route::get('/urinesubmit/{id}','PatientController@updateurinelab');
             Route::get('/updatedrugtask/{id}','PatientController@updatedrugs');
            // Route::get('/searchone','PatientController@search');
                      //Route::get('/marklabsubasapproved{id}','PatientController@updateTasklabsubAsCompleted');
                      ///
                      Route::post ( '/search', function () {
                        $q = Input::get('q');
                        if($q != ""){
                            $lab = Lab::where ( 'lab_R_id', 'LIKE', '%' . $q . '%' )->orWhere ( 'identity', 'LIKE', '%' . $q . '%' )->get ();
                            if (count ( $lab ) > 0)
                                return view ( 'bloodhistory' )->withDetails ( $lab )->withQuery ( $q );
                            else
                                return view ( 'bloodhistory' )->withMessage ( 'No Details found. Try to search again !' );
                        }
                        return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'No Details found. Try to search again !' );
                    } );
                    Route::post ( '/search02', function () {
                        $p = Input::get('p');
                        if($p != ""){
                            $ulab = Ulab::where ( 'lab_id', 'LIKE', '%' . $p . '%' )->orWhere ( 'identity', 'LIKE', '%' . $p . '%' )->get ();
                            if (count ( $ulab ) > 0)
                                return view ( 'urinehistory' )->withDetails ( $ulab )->withQuery ( $p );
                            else
                                return view ( 'urinehistory' )->withMessage ( 'No Details found. Try to search again !' );
                        }
                        return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'No Details found. Try to search again !' );
                    } );

                    Route::post ( '/searchdrug', function () {
                        $s = Input::get('s');
                        if($s != ""){
                            $drug = Drug::where ( 'Med_No', 'LIKE', '%' . $s . '%' )->orWhere ( 'Batch_No', 'LIKE', '%' . $s . '%' )->orWhere ( 'Med_name', 'LIKE', '%' . $s . '%' )->orWhere ( 'Exp_date', 'LIKE', '%' . $s . '%' )->orWhere ( 'Company_name', 'LIKE', '%' . $s . '%' )->get ();
                            if (count ( $drug ) > 0)
                                return view ( 'searchphadrug' )->withDetails ( $drug )->withQuery ( $s );
                            else
                                return view ( 'searchphadrug' )->withMessage ( 'No Details found. Try to search again !' );
                        }
                        return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'No Details found. Try to search again !' );
                    } );

                    Route::post ( '/searchissue', function () {
                        $r = Input::get('r');
                        if($r != ""){
                            $prescribe = Prescribe::where ( 'id', 'LIKE', '%' . $r . '%' )->orWhere ( 'first_name', 'LIKE', '%' . $r . '%' )->get ();
                            if (count ( $prescribe ) > 0)
                                return view ( 'issuedrug' )->withDetails ( $prescribe )->withQuery ( $r );
                            else
                                return view ( 'issuedrug' )->withMessage ( 'No Details found. Try to search again !' );
                        }
                        return view ( 'search-functionality-in-laravel/welcome' )->withMessage ( 'No Details found. Try to search again !' );
                    } );


});
