<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\admin;

class admincontroller extends Controller
{
    public function adminlogin(Request $req)
    {
    	$uname = $req->input('uname');
    	$psw = $req->input('psw');

    	$sql = admin::where('uname','=',$uname)
    				->where('upass','=',$psw)
    				->get();
    	if(count($sql)>0)
    	{
    		$admin = admin::where('uname','=',$uname)
    				->where('upass','=',$psw)
    				->value('uname');
    		Session::put('adminid',$admin);
    		return view('admin/dashboard');
    	}	
    	else
    	{
    		echo" 
    			<script>
    			alert('INVALID USERNAME OR PASSWORD');
    			window.location='/admin';
    			</script>";
    	}		
    }
    
    public function logout()
    {
        Session::forget('username');
        Session::flush();
        return redirect('/loginPage');
    }
}
