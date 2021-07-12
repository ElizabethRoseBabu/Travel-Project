<!---
/****
*@Trvael Booking
*@Elizabeth
*@date 27/04/2021
*@Admin 
*@Upate vehicle
******/
---->

<!DOCTYPE html>
<html>
<head>
    <title>
    
    </title>
    <style>
input{
    padding:10px;
    margin:20px;
    }
    </style>
</head>
<body>


    <form method="get" action="{{url('updatevehicle')}}">
    <h1>Update Details</h1>
           
            <input type="hidden" name="id"  value={{$updata->id}}>
            From: <input type="text" name="from"  value={{$updata->from}}><br><br>
            To: <input type="text" name="to"  value={{$updata->to}}><br><br>
            Date:<input type="date" name="date"  value={{$updata->date}}><br><br>
            
            Vehicle: <select name="vechicle" >
                @foreach($vname as $sname)
                    <option value="{{$sname->id}}">{{ $sname->vechicle}}</option>
                @endforeach
            </select><br><br>
            <!-- Vehicle:<input type="text" name="vechicle"  value={{$updata->vechicle}}><br><br> -->
            <input type="submit" name="submit" value="submit"> <br>

            
    
    </form>


</body>
</html>