<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Location;
use App\Vehicle;

use Illuminate\Http\Request;

class AdminController extends Controller
{
     /****
*@Admin Home
*@Elizabeth
*@date 27/04/2021
*@Admin 
****/
    public function adminhome()
    {
        return view('adminhome');
    }
    /****
*@view user
*@Elizabeth
*@date 27/04/2021
*@Admin 
****/
    public function show()
    {
       // $c=DB::table('locations')->paginate(2);
        $c=Location::with(array('vehicles' => function ($query) {
        $query->select('vechicle','id');  
        }))
        ->paginate(2);
        return view('adminview',['data'=>$c]);
    }
    /****
*@Add vehicle
*@Elizabeth
*@date 27/04/2021
*@Admin 
****/
    public function edit($id)
    {
        $data=Location::find($id);
        $value=Vehicle::all();
        return view('adminupdate',['updata'=>$data],['vname'=>$value]);
    }
    public function update(Request $req)
    {
        $datas=Location::find($req->id);
        $datas->from=$req['from'];
        $datas->to=$req->to;
        $datas->date=$req->date;
         $datas->vehicle_id=$req->vechicle;
        $datas->save();
        return redirect('view');
    }
}
