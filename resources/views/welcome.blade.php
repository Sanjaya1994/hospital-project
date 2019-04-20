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
	
	 
	
	
	
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 60%;
    }

	.content{
		background-color:#004666;
		width:1050px;
		height:1000px;
	
	}
	
	.content h1{
		align:center;
		color:white;
		padding-left:410px;
		padding-top:50px;
		font-family:sans-serif;
		font-size:48px;
	}
	
	.login-box{
		width:320px;
		height:500px;
		<!--background:rgba(0,0,0,0.5);-->
		color:#fff;
    
		top:50%;
		left:50%;
		position:absolute;
		transform:translate(-50%,-50%);
		box-sizing:border-box;
		padding: 70px 30px;
	}
	
	.login-box p{
		margin: 0;
		padding: 0;
		font-weight: bold;
		color:white;
		font-family:sans-serif;
	}
	
	.login-box input{
		width: 100%;
		margin-bottom: 40px;
	}
	
	.login-box input[type="text"], input[type="password"]{
		border: none;
		border-bottom: 1px solid #ffffff;
		background : transparent;
		outline: none;
		height: 40px;
		color: #fff;
		font-size: 16px;
		
	}
	
	.login-box input[type="submit"]{
		border: none;
		outline: none;
		height: 40px;
		font-size:20px;
		font-weight: bold;
		border-radius : 20px;
	}
	
	.login-box input[type="button"]{
		border: none;
		outline: none;
		height: 40px;
		font-size:20px;
		font-weight: bold;
		border-radius : 20px;
		margin-top:40px;
		
	}
	
	.login-box input[type="submit"]:hover{
		cursor: pointer;
		background:#ccefff;
	}
	
	.login-box input[type="button"]:hover{
		cursor: pointer;
		background:#ccefff;
	}
	
	.login-box a{
		text-decoration: none;
		font-size: 14px;
		color: #fff;
		font-family:sans-serif;
	}
	
	.login-box a:hover{
		color: yellow;
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
	    
		<div class="content col-12">
		@if(session()->has('message02'))
<div class="alert alert-success">
{{session()->get('message02')}}
</div>
@endif
			<h1>Login</h1>
				
			<form class="form-horizontal" method="post" action="{{route('login')}}">
     {{csrf_field()}} 
		    <div class="login-box">
				<form>
					<p>User name</p>
					<input type="text" name="user_name" placeholder="Enter username">
					<p>Password</p>
					<input type="password" name="password" placeholder="Enter password">
					<input type="submit"  value="Login">
					{{csrf_field()}} 
</form>
					<a href="#">Forget Password</a>
					
					<a href="/Signup" ><input type="button"  value="Sign up" ></a>
                    
	
			
				
			</div>
	    </div> 
</form>


</body>
</html>