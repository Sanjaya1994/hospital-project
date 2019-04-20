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
		width: 1000px;
	}
	
	h2{
	   color:#123456;
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
		<h2>Lab Technician</h2>
		<ul>
		 
		 <li><div class="dropdown">
		 <button class="dropbtn">Lab Reports</button>
		      <div class="dropdown-content">
                   <a href="/labtechblood">Blood Test</a>
                   <a href="/urinelab">Urine Test</a>
              </div>
			  <span class="arrow">&#9660;</span>
			 </div></li>
			 <li>Message</li>
		 </ul>
		</div>
		<div class="content col-9">
		    <div class="container">
			<a button type="button" id="bt" class="btn btn-primary" href="{{route('logout')}}">Logout</a></button>
			<hr>
			
		  
		     
 
            <form class="form-horizontal" method="post" action="/savelabmessage">
			{{csrf_field()}} 
            <div class="content col-9">
            @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
		@if(session()->has('message'))
<div class="alert alert-success">
{{session()->get('message')}}
</div>
@endif
 
		</div>
		</br>
			<h1>Message </h1>
			</br>
				<p>First Name</p>
				<input type="text" class="form-control" name="first_name" ></br>
				<p>last Name</p>
				<input type="text" class="form-control" name="last_name"></br>
				<p>NIC number</p>
				<input type="text" class="form-control" name="identity"></br>
				<p>Profession</p>
				<select name="role" id="Profession">
					<option>Doctor</option>
					<option>Receiptionist</option>
					<option>Lab Technician</option>
					<option>Pharmacist</option>
								</select>
				</br></br>
				<p>Message</p>
				<textarea class="form-control" rows="5" name="message" placeholder="Enter Your Message Here"></textarea></br>
				<input type="submit" class="btn btn-success" name="send" id="send" value="Send" />


	</div> 

<!--<div class="footer col-12">
    Uva Wellassa University,Passara Road,Badulla.+0552222222
</div>	-->

</body>
</html>