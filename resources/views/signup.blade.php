<!DOCTYPE html>
<html>
<head>
   <title>E-Medical center</title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <script src="bootstrap-3.3.6-dist/js/bootstrap.bundle.min.js"></script>
   <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
   <style>
      *{
	    box-sizing:border-box;
	  
	  }
      [class*="col-"] {
    float: left;
    padding: 20px;
	
	}
	
	
	
	body{
		margin: 0;
		padding: 0;
		background: #004666;
		font-size: 16px;
		color: Gray;
		font-family: sans-serif;
		font-weight: 300;
	}
	
    .login-box{
		position: relative;
		margin: 5% auto;
		height: 900px;
		background: #fff;
		box-shadow: 0 2px 4px rgba(0,0,0,0.6);
		width:700px;
	}
    
	.left-box{
		position: absolute;
		top: 0;
		right: 0;
		box-sizing: border-box;
		padding: 40px;
		padding-left:0;
		width:300px;
		height: 400px;
	}
	
	h1{
		margin: 0 0 20px 0;
		font-weight: 300;
		font-size: 28px;
		color: black;
	}
	
	input[type = "text"],
	input[type = "password"]{
		display: block;
		box-sizing: border-box;
		margin-bottom: 20px;
		<!--padding: 4px;-->
		padding-left: 0;
		padding-bottom:4px;
		padding-right:4px;
		padding-top: 4px;
		width: 250px;
		height: 32px;
		border: none;
		border-bottom: 1px solid #aaa;
		font-family: sans-serif;
		font-weight: 400;
		font-size: 15px;
		transition: 0.2s ease;
	}
	
	input[type = "submit"]{
		margin-bottom: 28px;
		width: 120px;
		height: 32px;
		background: #f44336;
		border: none;
		border-radius: 2px;
		color: #fff;
		font-family: sans-serif;
		font-weight: 500;
		text-transform: uppercase;
		transition: 0.2s ease;
		cursor: pointer;
	}
	
	input[type = "submit"]:hover,
	input[type = "submit"]:focus{
		background: #ff5722;
		transition: 0.2s ease;
	
	}
	.right-box{
	
	    <!--position:absolute;-->
		top:0;
		left:0;
		box-sizing:border-box;
		padding:40px;
		width:300px;
		height:900px;
		background-image:url(img/right_logo.JPG);
		background-size:cover;
		background-position:center;
	
	
	}
	
	input[type = "radio"]{
		color:black;
		
	}
	
	.right-box{
		color:#00111a;
	}
	
	<!--#ifYes{
		display:none;
	}-->
	
	
	
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
   
   <script>
    function yesnoCheck(that) {
        if (that.value == "Doctor") {
            //alert("check");
            document.getElementById("ifYes").style.display = "block";
        } else if  (that.value == "Pharmacist") {
			document.getElementById("ifYes").style.display = "block";
			
		} else if  (that.value == "Lab Technician") {
			document.getElementById("ifYes").style.display = "block";		
            
        }else{
			document.getElementById("ifYes").style.display = "none";
		}
    }
</script>
   
</head>
<body>
    
	 
	 <div id="content">
	 <div class="row">
	    
		<!--<div class=" col-12">-->
		
			
		    <div class="login-box">
			
			    <div class="left-box">
				
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
				
				<form class="form-horizontal" method="post" action="{{route('signup')}}">
     {{csrf_field()}} 
	 <p>I   am   <select onchange="yesnoCheck(this); " name="role">
					
									<option value="Admin">Admin</option>
									<option value="Doctor">Doctor</option>
									<option value="Pharmacist">Pharmacist</option>
									<option value="Lab Technician">Lab Technician</option>
									<option value="Receiptionist">Receiptionist</option>
								
								</select></p>
							
								</select></p>
								
					<input type="text" name="first_name" placeholder="Firstname"/>
					<input type="text" name="last_name" placeholder="Lastname"/>
					<input type="text" name="user_name" placeholder="Username"/>
					<input type="password" name="password" placeholder="Password"/>
					<input type="text" name="identity" placeholder="NIC number"/>
					<input type="text" name="no" placeholder="Address"/>
					<input type="text" name="street" placeholder="street"/>
					<input type="text" name="city" placeholder="city"/>
					<!--<input type="text" name="Gender" placeholder="Gender"/>-->
					<input type="radio" name="gender" value="1"> Male
					<input type="radio" name="gender" value="0"> Female<br><br>
					<input type="date" name="dob" placeholder="Date of birth"/>
					<input type="text" name="email" placeholder="Email"/>
					<input type="text" name="phone_number" placeholder="phone number"/>
					<div id="ifYes">
					<input type="text" name="Reg_No" placeholder="SLMC Registration No"/><br><br>
					</div>
					
					<input type="submit" name="signup-button" value="Sign up"/>
					
					</form>
					
					
					
				</div>	
			
			
				
				<div class="right-box">
				
					<h1>Sign Up</h1>
				
						
						
						
				
				</div>
				
				
			</div>
	    <!--</div>--> 
	


</body>
</html>