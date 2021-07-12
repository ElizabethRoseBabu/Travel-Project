<!---
/****
*@Trvael Booking
*@Elizabeth
*@date 27/04/2021
*@User 
*@Registration
******/
---->

<html>
<head>
<title>Travelmate</title>
            <meta charset=utf-8>
            <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
            <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
            
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
</head>
<div class="container">
@if(session()->get('fail'))
    <div class="alert alert-danger" role="alert">
    {{ session()->get('fail') }}
        <span aria-hidden="true">&times;</span>
    </button>
    </div>
@endif
</div>
  
    <div class="container">
        <div class="row">
            <div class="col">
            <h2>User Registeration </h2>
                <form  action="register" method="get">
                @csrf
                    <label for="name" >Name</label>
                    <input type="text" name="name" placeholder="Enter Your Name">
                    <span style="color:red">*@error('name'){{$message}}@enderror</span></br>
                    <label for="email" >Email</label>
                    <input type="text"  name="email" placeholder="Enter Your Email Id">
                    <span style="color:red">*@error('email'){{$message}}@enderror</span></br>
                    <label for="password">Password</label>
                    <input type="text" name="password" placeholder="Enter Password">
                    <span style="color:red">*@error('password'){{$message}}@enderror</span></br> 
                    <input type="submit" value="Regiter" name="register">
                </form>
                   
              Already a user? <a  href="/signIn" class="btn btn-success text-dark">Login here</a>
            </div>
            <a href="/">Back to Home </a>
        </div>
    </div>
<script
  src="https://code.jquery.com/jquery-3.5.1.js"integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous">
</script>

<!---Popper---->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
</script>

<!---Custom Js-->
<script src="js/script.js">
</script>
    
</body>
</html>