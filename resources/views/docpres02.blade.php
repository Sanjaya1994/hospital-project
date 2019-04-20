<!DOCTYPE html>
<html>
<head>
   <title>E-Medical center</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="bootstrap-3.3.6-dist/js/bootstrap.bundle.min.js"></script>
   <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   

   <style>
      *{
	    box-sizing:border-box;
	  
	  }
      [class*="col-"] {
    float: left;
    padding: 20px;
	
	}
	
	.footer{
	   background-color:#06035b;
	   color:white;
	   text-align:center;
	   border-radius:8px;
	   border:1px solid black;
	   border-bottom-width:8px;
	}
	
	 .side_navi{
	 
	 background-color:#06738b;
	 height:1500px;
	 
	 }
	
	
	
	.side_navi ul{
	    list-style-type:none;
		margin:0;
		padding:0;
		padding-top:15px;
	
	}
	.side_navi h2{
	    
	   color:white;
	   font-family:Calibri;
	}
	
	.side_navi li{
	    padding:10px;
		margin-bottom:7px;
		background-color:#06738b;
		color:white;
		font-family:Calibri;
		font-size: 18px;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		<!--border:1px solid black;
		border-bottom-width:5px;-->
	}
	.side_navi li:hover{
	   background-color: #0099cc;
	   color:white;
	}
	
	a{
	 font-size:18px;
	  color:#ffffff;
	  text-decoration:none;
	}
	
	.top-left {
    position: absolute;
    top: 8px;
    left: 16px;
}
.container {
    position: relative;
    text-align: left;
    color: black;
}

	.container p{
		font-family:Calibri;
		font-size:18px;
	}
	
	.container hr{
		color:black;
	}
	

    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 60%;
}

	.content,.inst{
	   font-size:19px;
	
	}
	
	
	.dropdown {
    position: relative;
    display: inline-block;
}

   .dropbtn {
    background-color: #06738b;
    color: white;
   <!-- padding: 1px;-->
    padding-right:200px;
	padding-left:3px;
	font-family:Calibri;
    font-size:19px;
    border: none;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 287px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
	background-color: #0099cc;
    color: white;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.arrow{
	color:white;
	padding-left:200px;
}




.default:hover {
  background:#0099cc;
  color:white;
}




.dropdown-content a:hover {background-color: #06738b;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#0099cc ;}

	
	
	
	#bt{
		margin-left: 1000px;
	}
	 
	#send{
		width: 100px;
	}
	
	.form-control{
		width: 250px;
	}
	
	h2{
	   color:#123456;
	}
	
	

	h3{
		text-align: center;
	}

	#patientid{
		width: 1000px;
	}

	#medcolumn{
		width: 500px;
	}
	
	
	
	
   .col-1 {width: 8.33%;}
.col-2 {width: 16.66%;}
.col-3 {width: 25%;}
.col-4 {width: 33.33%;}
.col-5 {width: 41.66%;}
.col-6 {width: 50%;}
.col-7 {width: 58.33%;}
.col-8 {width: 66.66%;}
.col-9 {width: 75%;}
.col-10 {width: 83.33%;}
.col-11 {width: 91.66%;}
.col-12 {width: 100%;}
   @media only screen and (max-width:768px){
        [class*="col-"]{
		   width:100%;
		}
   
   }
   
   </style>
</head>
<body>
    <!--<div class="header col-12">
	   
	    <h1>Information and Communication Conference</h1>
		</div>-->
	 
	 <div id="content">
	 <div class="row">
	    <div class="side_navi col-3">
		<h2>Doctor</h2>
		<ul>
		  <!--<li><a href="#1">Notifications</a></li>
		   <li><a href="#2">Contact us</a></li>-->
		 <li>
		  <div class="dropdown">
		 <button class="dropbtn">Lab Report</button>
		      <div class="dropdown-content">
                   <a href="/blooddoc">Blood Test</a>
                   <a href="/urinedoc">Urine Test</a>
                  
              </div>
			  <span class="arrow">&#9660;</span>
			 </div>
		 </li>
		 <li><a href="/docpres">Write Prescription</a></li>
<!--<li><a href="#3">Request Lab Report</a></li>-->

		 <li>
		  <div class="dropdown">
		 <button class="dropbtn">History</button>
		      <div class="dropdown-content">
                   <a href="/bloodhistory">Blood Test History</a>
                   <a href="/urinehistory">Urine Test History</a>
                  
              </div>
			  <span class="arrow">&#9660;</span>
			 </div>
			</li>
		 <li>Help From Admin</li>
		 </ul>
		</div>
		<div class="content col-9">
		    <div class="container">
			<a button type="button" id="bt" class="btn btn-primary" href="{{route('logout')}}">Logout</a></button>
			<hr>
			
		<h6>MBBS(Colombo), MD(Colombo), MRCP(UK)<br/>
				General and Inderventional Cardiologist<br/>
				National Hospital of Sri Lanka<br/><br/>
				Email : abcd@gmail.com
			</h6>
			</br>
			</div>
			<div class="content col-9">
		@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
		 
			<h3>PRESCRIPTION</h3>
			<div class="form-group">
			<form class="form-horizontal" method="POST" action="/savepres">
			{{csrf_field()}} 
			
			<br/>
			<label>Patient ID</label>
			<input type="text" class="form-control" name="id" value="{{$docdata->id}}"><br/>
			<input type="hidden" name="id" value="{{$docdata->id}}"/>


			<label >Patient Name</label>
			<input type="text" class="form-control" name="first_name" value="{{$docdata->first_name}}"><br/>
			<input type="hidden" name="first_name" value="{{$docdata->first_name}}"/>

			<label>Age</label>
			<input type="text" class="form-control" name="age" value="{{$docdata->age}}"><br/>
			<input type="hidden" name="age" value="{{$docdata->age}}"/>

			<input type="text" class="form-control" name="bp" id="bp" placeholder="BP/Pulse"><br/>
			
			<label for="diagnose">Diagnose</label>
				<input type="text" class="form-control" name="diagnose" id="diagnose" placeholder=""><br/>
				
			<label for="Pt_id">Investigations</label>
				<input type="text" class="form-control" name="invest" id="invest" placeholder=""><br/>

			<label for="medicines">Medicines to be taken</label><br/>
			
				<br>
			<table border="0" cellpadding="2 " class="table table-striped">
			
			<tr>
				<td>Medicine </td>
				<td>Dose </td>
				<td>Route </td>
				<td>Duration  </td>
			</tr>
			<tr>
				
			</tr>
			
				<tr>
				
				
			</tr>
			
				<tr>
				<td><select name="medname" id="medname">
													<option></option>
                    			<option>Panadole</option>
                    			<option>Amoxiline</option>
                    			<option>Penadine</option>
                  			  </select></td>
				<td><select name="dose" id="dose">
				<option></option>
                    			<option>5mg</option>
                    			<option>10mg</option>
                    			<option>24mg</option>
                  			  </select></td>
				<td><select name="route" id="route">
				<option></option>
                    			<option>2</option>
                    			<option>1</option>
                    			<option>1.5</option>
                  			  </select>	</td>
				<td><select name="duration" id="duration">
				<option></option>
                    			<option>6hours</option>
                    			<option>12hours</option>
                    			<option>24hours</option>
                  			  </select>
				</td>				
			</tr>
			
				<tr>
				<td><select name="medname01" id="medname">
				<option></option>
                    			<option>Panadole</option>
                    			<option>Amoxiline</option>
                    			<option>Penadine</option>
                  			  </select></td>
				<td><select name="dose01" id="dose">
				<option></option>
                    			<option>5mg</option>
                    			<option>10mg</option>
                    			<option>24mg</option>
                  			  </select></td>
				<td><select name="route01" id="route">
				<option></option>
                    			<option>2</option>
                    			<option>1</option>
                    			<option>1.5</option>
                  			  </select>	</td>
				<td><select name="duration01" id="duration">
				<option></option>
                    			<option>6hours</option>
                    			<option>12hours</option>
                    			<option>24hours</option>
                  			  </select>
				</td>
				
			</tr>
			
				<tr>
				<td><select name="medname02" id="medname">
				<option></option>
                    			<option>Panadole</option>
                    			<option>Amoxiline</option>
                    			<option>Penadine</option>
                  			  </select></td>
				<td><select name="dose02" id="dose">
				<option></option>
                    			<option>5mg</option>
                    			<option>10mg</option>
                    			<option>24mg</option>
                  			  </select></td>
				<td><select name="route02" id="route">
				<option></option>
                    			<option>2</option>
                    			<option>1</option>
                    			<option>1.5</option>
                  			  </select>	</td>
				<td><select name="duration02" id="duration">
				<option></option>
                    			<option>6hours</option>
                    			<option>12hours</option>
                    			<option>24hours</option>
                  			  </select>
				</td>
				
			</tr>
			
				<tr>
				<td><select name="medname03" id="medname">
				<option></option>
                    			<option>Panadole</option>
                    			<option>Amoxiline</option>
                    			<option>Penadine</option>
                  			  </select></td>
				<td><select name="dose03" id="dose">
				<option></option>
                    			<option>5mg</option>
                    			<option>10mg</option>
                    			<option>24mg</option>
                  			  </select></td>
				<td><select name="route03" id="route">
				<option></option>
                    			<option>2</option>
                    			<option>1</option>
                    			<option>1.5</option>
                  			  </select>	</td>
				<td><select name="duration03" id="duration">
				<option></option>
                    			<option>6hours</option>
                    			<option>12hours</option>
                    			<option>24hours</option>
                  			  </select>
				</td>
				
			</tr>
			
				<tr>
				<td><select name="medname04" id="medname">
				<option></option>
                    			<option>Panadole</option>
                    			<option>Amoxiline</option>
                    			<option>Penadine</option>
                  			  </select></td>
				<td><select name="dose04" id="dose">
				<option></option>
													<option>5mg</option>
                    			<option>10mg</option>
                    			<option>24mg</option>
                  			  </select></td>
				<td><select name="route04" id="route">
				<option></option>
                    			<option>2</option>
                    			<option>1</option>
                    			<option>1.5</option>
                  			  </select>	</td>
				<td><select name="duration04" id="duration">
				<option></option>
													<option>6hours</option>
                    			<option>12hours</option>
                    			<option>24hours</option>
                  			  </select>
				</td>
				
			</tr>
			
				<tr>
				<td><select name="medname05" id="medname">
				<option></option>
                    			<option>Panadole</option>
                    			<option>Amoxiline</option>
                    			<option>Penadine</option>
                  			  </select></td>
				<td><select name="dose05" id="dose">
				<option></option>
													<option>5mg</option>
                    			<option>10mg</option>
                    			<option>24mg</option>
                  			  </select></td>
				<td><select name="route05" id="route">
				<option></option>
                    			<option>2</option>
                    			<option>1</option>
                    			<option>1.5</option>
                  			  </select>	</td>
				<td><select name="duration05" id="duration">
				<option></option>
													<option>6hours</option>
                    			<option>12hours</option>
                    			<option>24hours</option>
                  			  </select>
				</td>
				
				
			</tr>
			
			 
			</table>    
    </div>
 <!-- </form>-->
				<br/>
							
			<label for="plans">Follow up plan</label>		
				<input type="text" class="form-control" id="plans"name="plans" placeholder="">
			<br/>
			
			      
			<div class="col-sm-offset-1 col-sm-10">
			<h6>Date &nbsp &nbsp &nbsp<input type="date" name="bday"/><br/><br/>
	
			</h6>
			<br>
			<button type="submit" id="ba2" class="btn btn-success">Send</button>
			
			</div>

<!--<div class="footer col-12">
    Uva Wellassa University,Passara Road,Badulla.+0552222222
</div>	-->

</body>
</html>