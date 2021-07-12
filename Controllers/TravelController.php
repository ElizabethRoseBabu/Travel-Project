<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use Validator;
use App\Location;
use App\Vehicle;
use App\Event\UserCreated;
class TravelController extends Controller
{
    /****
*@ Home
*@Elizabeth
*@date 27/04/2021
*@Admin 
****/
    public function index()
    {
        return view('index');
    }
    /****
*@User Home
*@Elizabeth
*@date 27/04/2021
*@User
****/
    public function userhome()
    {
        return view('userhome');
    }
    /****
*@Registration
*@Elizabeth
*@date 27/04/2021
*@User 
****/
    public function registration()
    {
        return view('registration');
    }
    public function signup_action(Request $req)
    {
        $req->validate([
            'name'=>'required|regex:/^[\pL\s\-]+$/u',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:3|max:8'
            ]);
        $log=new User();
        $log->name=$req->name;
        $log->email=$req->email;
        $log->password=Hash::make($req->password);
        $log->user_type='user';
        $qry= $log->save();
        if($qry)
        {
            return redirect('signIn');
        }
        else
        {
            return redirect()->back()->with('fail','Not Registerd');
        } 
    }
      /****
*@Login
*@Elizabeth
*@date 27/04/2021
*@User 
****/
    public function signIn()
    {
        return view('login');
    }
    public function login(Request $req)
    {
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email=$req->email;
        $pass=$req->password;
        $result=User::where('email',$email)->first();
      
        if(!$result)
        {
            return redirect()->back()->with('fail','can not recoganize this mail');
        }
        elseif(Hash::check($pass,$result->password) && $result->user_type=='admin')
        {
            return redirect('admin')->with('message','Succesfully loggedin');

        }
        elseif(Hash::check($pass,$result->password) && $result->user_type=='user')
        {
           return redirect('user');
        }
        else
        {
            return redirect()->back()->with('fail','Invalid Password');
        }

    }
         /****
*@Add Location
*@Elizabeth
*@date 27/04/2021
*@User 
****/

 public function location()
   {
    $data=Location::all();
    return view('index',['users'=>$data]);
    }
public function add_location(Request $req)
{

    $req->validate([
        'from'=>'required|regex:/^[\pL\s\-]+$/u',
        'to'=>'required|regex:/^[\pL\s\-]+$/u',
        'date' =>'required'
        ]);
        $place=new Location;
        $place->from=$req->from;
        $place->to=$req->to;
        $place->date=$req->date;
        $input=$place->save();
        // return redirect('login');
        if($input)
        {
            return redirect('user');
        }
        else
        {
            return redirect()->back()->with('fail','Invalid Locations');
        }
    
}
     /****
*@Booking and View
*@Elizabeth
*@date 27/04/2021
*@User 
****/
public function usershow()
{
    // $c=DB::table('locations')->paginate(2);
    $c=Location::with(array('vehicles' => function ($query) {
        $query->select('vechicle','id');  
        }))
        ->paginate(2);
        
    return view('userview',['data'=>$c]);
}
public function insertbooking()
{
    
        
         $user['name'] = 'name';
         $user['email'] = 'email';
         event(new UserCreated($user));
         return ('Succsfully booked');
}
}

