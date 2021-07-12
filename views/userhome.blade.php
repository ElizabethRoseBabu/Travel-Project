<!---
/****
*@Trvael Booking
*@Elizabeth
*@date 27/04/2021
*@User 
*@User Home 
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
<body>
<nav class="navbar top-1 navbar-expand-lg bg-dark">
    <div class="container">
        <a href="#" class="text-white text-decoration-none">USER HOME</a>
        
     <div class="collapse navbar-collapse">
        <ul class="navbar-nav ms-auto topnow">
        <li class=" navbar-item"><a  href="/" class="nav-link text-whitw">Home</a></li>
        <li class=" navbar-item"><a  href="/userview" class="nav-link text-white">View Vehicle</a></li>
        
        <li class=" navbar-item"><a  href="/signIn" class="nav-link text-white">logout</a></li>
        </ul>
    </div>
    </div>
</nav>
<form class="mt-5" method="get" action="addlocation">
        <h1>Enter your location</h1>
        <div class="container mt-5">

        
                @csrf
                    <label for="from" >FROM:</label>
                    <input type="text"  name="from" placeholder="Your location">
                    <span style="color:red">*@error('from'){{$message}}@enderror</span></br><br>
                    <label for="to" >TO:</label>
                    <input type="text"  name="to" placeholder="Your Destination ">
                    <span style="color:red">*@error('to'){{$message}}@enderror</span></br><br>
                    <label for="date" >DATE:</label>
                    <input type="date"  name="date" placeholder="Date">
                    <span style="color:red">*@error('date'){{$message}}@enderror</span></br><br>
<!-- 
        From:<input type="text" name="from" placeholder="Your Location"><br><br>
        To:<input type="text" name="to" placeholder="Your Destination"><br><br>
        Date:<input type="date" name="date" placeholder="date"><br><br> -->
        <input type="submit" name="submit" value="submit">
    </div>
     
</form>
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