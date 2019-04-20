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
		width:1650px;
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
	padding-left:50px;
	}
	
	.col-sm-offset-2 col-sm-10 button {
		margin:15px;
	}
	
	#btton1{
		margin-left:5px;
		border: none;
		font-size: 15px;
		padding: 9px 23px;
	}
	
	#bttn2{
		margin-left:30px;
	    border: none;
		font-size: 15px;
		padding: 9px 24px;
	}
	
	
.default:hover {
  background:#0099cc;
  color:white;
  font-weight:bold;
}
	
	#bttn1{
		margin-top:0px;
		margin-left:0px;
	}
	
	#bttn1:hover{
		background:#00111a;
		color:white;
	}
	
	#bttn2{
		margin-top:3px;
	}
	
	#bttn2:hover{
		background:#00111a;
		color:white;
	}
	
	#b1{
		margin-left:0px;
		width:170px;
	}

	#table1{
		padding-left:20px;
	}

	#bt{
		margin-left:1000px;
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
		</div>
		<div class="content col-md-9">
		    <div class="container">
			<a button type="button" id="bt" class="btn btn-primary" href="{{route('logout')}}">Logout</a>
			<hr>	
			<h2>Mannual Approval</h2></br>
			<form class="form-horizontal" action="/admin">
			{{csrf_field()}} 
			<div class="form-group">
			
			{{csrf_field()}} 
			<table class="table table-striped">
			
			<tr>

				<td>id </td>
				<td>First name </td>
				<td>Last name </td>
				<td>Identity </td>
				<td>Username    </td>
				<td>Date of Birth  </td>
				<td>Gender    </td>
				<td>Phone Number    </td>
				<td>No      </td>
				<td>Street    </td>
				<td>City  </td>
				<td>Email    </td>
				<td>Role   </td>
				<td>Registation Number</td>
				<td>Status</td>
				<td>Action</td>
			

				
			</tr>
			@foreach($users as $user)
		
			<tr>
				<td>{{$user->id}} </td>
				<td>{{$user->first_name}} </td>
				<td>{{$user->last_name}} </td>
				<td>{{$user->identity}} </td>
				<td>{{$user->user_name}}</td>
				<td>{{$user->dob}} </td>
				<td>{{$user->gender}} </td>
				<td>{{$user->phone_number}}  </td>
				<td>{{$user->no}}</td>
				<td>{{$user->street}}  </td>
				<td>{{$user->city}}</td>
				<td>{{$user->email}}</td>
				<td>{{$user->role}}</td>
				<td>{{$user->Reg_No}}</td>
				<td>
				@if($user->active) 
				<button class="btn btn-success">Active</button>
				@else
				<button class="btn btn-warning">Deactive</button>
				@endif </td>
				<td>
				@if(!$user->active)
				<!--<button id="bttn1" class="btn btn-primary"> <a href="/markasapproved/{{$user->id}}" >Mark as Approved</a></button>-->
				<a  id="b1" class="btn btn-success" href="/markasapproved/{{$user->id}}" role="button">To Activate</a>
				@else
				<a  id="b1" class="btn btn-danger" href="/markasreject/{{$user->id}}" role="button">To Deactivate</a>
				@endif
				</td>
				

				
			</tr>
			 @endforeach
			</table>
			
			<!--<button id="bttn1" type="submit" class="btn btn-default">Approve</button>
			<button id="bttn2" type="submit" class="btn btn-default">Reject</button>-->
			
    </div>
  </form>
			
			
 
		</div>
		
		
	</div> 

</body>
</html>