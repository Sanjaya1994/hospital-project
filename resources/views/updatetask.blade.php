<!DOCTYPE html>
<html>
<head>
   <title>E-Medical center</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="bootstrap-3.3.6-dist/js/bootstrap.bundle.min.js"></script>
   <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  
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
	 height:1050px;
	 
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
		color:black;
		font-family:Calibri;
		font-size: 16px;
		box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		<!--border:1px solid black;
		border-bottom-width:5px;-->
	}
	.side_navi li:hover{
	   background-color: #0099cc;
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
    padding: 1px;
	padding-right:180px;
	font-family:Calibri;
    font-size:19px;
    border: none;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 260px;
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



.dropdown-content a:hover {background-color: #06738b;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color:#0099cc ;}

	
	.arrow{
	  color:white;
	 }
	 	
	h2{
	   color:#123456;
	}
	
	
	
	.form-control-static{
	padding-left:25px;
	}
	
	

.default:hover {
  background:#0099cc;
  color:white;
}

	#btton1{
	margin-left:800px;
	padding: 12px 26px;
	font-size: 18px;
	}
	
	#btton2{
	margin-left:840px;
	padding:8px 28px;
	font-weight:bold;
	background:#007ab3;
	color:white;
	font-size: 18px;
	}
	
	#btton2:hover{
		background:#00111a;
		color:white;
	}
	
	#bt{
		float:right;
	}
	
	#b{
		margin-left:900px;
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
	    <div class="side_navi col-md-3">
		<h2>Admin</h2>
        <ul>
        <li><a href="/admin">Home</a></li>
		 <li><a href="/admindash">User Approval</a></li>
		 <li><a href="/adminupdate">Update details</a></li>
		 <li><a href="/adminremove">Remove users</a></li>
		 <li><a href="/adminmassege">Message</a></li>
		 
		 
		<!--<li><a href="#5">Check Accounts</a></li>-->
		 </ul>
		<!--<li><a href="#5">Check Accounts</a></li>-->
		 </ul>
		</div>
		<div class="content col-md-9">
		    <div class="container">
            <p>D.M.H.M.Dissanayaka <a  id="bt" class="btn btn-primary" href="{{route('logout')}}">Logout</a></button></p>
			<hr>	
			<h2>Update User Details</h2></br>
			
			<form  action="/updatetasks" method="POST">
			{{csrf_field()}}
			<div class="form-group">
			
			
			
			<label for="fname">First Name:</label>
				<input type="text" class="form-control" id="Fname" placeholder="" name="first_name" value="{{$taskdata->first_name }}"/>
			<input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="lname">Last Name:</label>
				<input type="text" class="form-control" id="Lname" placeholder="" name="last_name" value="{{$taskdata->last_name }}"/>
				<input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="Nic">NIC:</label>
				<input type="text" class="form-control" id="NIC" placeholder="" name="identity" value="{{$taskdata->identity }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="user">Username:</label>
				<input type="text" class="form-control" id="username" placeholder="" name="user_name" value="{{$taskdata->user_name }}"/>
				<input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="birth">Date of birth :</label>
				<input type="text" class="form-control" id="Dob" placeholder="" name="dob" value="{{$taskdata->dob }}"/>
				<input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="gen">Gender:</label>
				<input type="text" class="form-control" id="gender" placeholder="" name="gender" value="{{$taskdata->gender }}"/>
				<input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="birth">Contact Number :</label>
				<input type="text" class="form-control" id="Dob" placeholder="" name="phone_number" value="{{$taskdata->phone_number }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
			<label for="address">Address:</label>
			<input type="text" class="form-control" id="add2" placeholder="" name="no" value="{{$taskdata->no }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                <input type="text" class="form-control" id="add1" placeholder="" name="street" value="{{$taskdata->street }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
				<input type="text" class="form-control" id="add3" placeholder="" name="city" value="{{$taskdata->city }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>
               <!-- <label for="Role">Role:</label>-->
						



			<label for="email">Email:</label>
				<input type="text" class="form-control" id="email" placeholder="" name="email" value="{{$taskdata->email }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>		
                <label for="Registration Number">Registration Number</label>
				<input type="text" class="form-control" id="email" placeholder="" name="Reg_No" value="{{$taskdata->Reg_No }}"/>
                <input type="hidden" name="id" value="{{$taskdata->id}}"/>	

			<div class="form-group">        
			<div class="col-sm-offset-2 col-sm-10">
			<button id="b" type="submit" class="btn btn-success">Update</button>
			
			</div>
      </div>
    </div>
  </form>
			
			
 
		</div>
		
		
	</div> 



</body>
</html>