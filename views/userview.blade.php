<!---
/****
*@Trvael Booking
*@Elizabeth
*@date 27/04/2021
*@User 
*@View and Booking
******/
---->
<!DOCTYPE html>
<html>
<head>
    <title>
    
    </title>
    
</head>
<body>
<table border=1>

<thead>
   <tr>
   <th >From</th>
   <th>To</th>
   <th>Date</th>
   <th>Vehicle</th>
   <th colspan="2">Action</th>

   </tr>
</thead>
 <tbody>
   @foreach($data as $value)
       <tr>
       <td>{{$value->from}}</td>
       <td>{{$value->to}}</td>
       <td>{{$value->date}}</td>
       <td>{{$value->vehicles['vechicle']}}</td>
       
       <td><a href="/insertbooking">Booknow</a></td>
      
       </tr>

   @endforeach
 </tbody>
 
</table>
</div>
<div>
{{$data->links()}}

<style>
 .page-item{
     display:inline-block;
     padding:10px;
 }
 </style>
   </div>
   <a href="/user">Home </a> 
</body>
</html>