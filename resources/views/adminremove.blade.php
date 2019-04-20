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
		
	}
	.side_navi li:hover{
	   background-color: #0099cc;
	   text-decoration:none;
	}
	
	a{
	 font-size:18px;
	  color:#ffffff;
	  text-decoration:none;
	}
	.side_navi li a:hover{
	   background-color: #0099cc;
	   text-decoration:none;
	   color:white;
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
		width:1600px;
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
	margin-left:1200px;
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
	input[type="text"]{
		border-top: 1px solid #ffffff;
		height:25px;
		font-size:14px;
		width:100%;
	  }
	 table{
		width:100%;
		
	}	
	table input[type="text"]{
		border:0.5px soft gray;
	}
	
	td{
		font-size:16px;
		font-style:none;
		text-align:center;
	}
	label{
		height:20px;
	}
	#bttn1{
		background-color:#06738b;
		margin-left:0;
		padding:5px;
		border-radius:5px;
	 }	  
	  #bttn1:hover{
		background:#0099cc;
		color:white;
		
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
		 </ul>
		</div>
		<div class="content col-md-9">
		    <div class="container">
			<a button type="button" id="bt" class="btn btn-primary" href="{{route('logout')}}">Logout</a>
			<hr>	
			<h2>Remove User Details</h2></br>
			
			<form class="form-horizontal" action="/action_page.php">
			
			<div class="form-group">
			
			<table class="table table-striped">
			
			<tr><td>Id </td>
				<td>First Name </td>
				<td>Last Name </td>
				<td>NIC No   </td>
				<td>Username   </td>
				<td>Date of birth     </td>
				<td>Gender   </td>
				<td>Contact Number   </td>
				
				<td>Street   </td>
				<td>Role   </td>
				<td>Number   </td>
				<td>City  </td>
				<td>E-mail   </td>
				<td>Registration Number  </td>
				
				<td>Action</td>
				
			</tr>
            @foreach($users as $user)
			<tr>
				<td>{{$user->id}} </td>
				<td>{{$user->first_name}}</td>
				<td>{{$user->last_name}}     </td>
				<td>{{$user->identity}}  </td>
				<td>{{$user->user_name}}   </td>
				<td>{{$user->dob}}   </td>
				<td>{{$user->gender}}  </td>
				<td>{{$user->phone_number}}   </td>
				
				<td>{{$user->street}}  </td>
				<td>{{$user->role}}  </td>
				<td>{{$user->no}}  </td>
				<td>{{$user->city}}  </td>
				<td>{{$user->email}}  </td>
				<td>{{$user->Reg_No}}  </td>
				
				<td>
			    <a class="btn btn-danger" href="/deletetask/{{$user->id}}" role="button">Delete</a>
                </td>
			</tr>			
            @endforeach
			</table>
							
						
			
    </div>
  </form>
			
			
 
		</div>
		
		
	</div> 



</body>
</html>