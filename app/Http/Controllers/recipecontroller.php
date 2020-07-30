<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

use App\recipe;

class recipecontroller extends Controller
{
    public function addEntry(Request $req)
    {
        $file = $req->file('image');
    	$rec= new recipe();
    	$rec->name = $req->input('name');
        $rec->duration = $req->input('duration');
        $rec->ingredients = $req->input('ingredients');
        $rec->recipe = $req->input('recipe');
        $rec->rimage = $file->getClientOriginalName();
    	if($rec->save())
    	{
            $destinationPth = 'frontside/image';
            $file->move($destinationPth,$file->getClientOriginalName());
    		echo "
    		<script>
    		alert('Inserted');
    		window.location='/addrecipes';
    		</script>
    		";
    	}
    	else
    	{
    		echo "
    		<script>
    		alert('Error');
    		window.location='/addrecipes';
    		</script>
    		";
    	}
    }
    public function edit($id)
    {
        if(Session::get('adminid'))
        {
            $res = recipe::where('id','=',$id)->get();
            return view('Admin/edit',compact('res'));
        }
        else
        {
            return redirect('/admin');
        }
    }
    public function editrecipe(Request $req)
    {
        if(Session::get('adminid'))
        {
            $n = $req->input('name');
            $d = $req->input('duration');
            $i = $req->input('ingredients');
            $id = $req->input('id');
            $res = $req->input('recipe');
            
            $update = recipe::where('id','=',$id)->update(['name'=>$n,'duration'=>$d,'ingredients'=>$i,'recipe'=>$res]);
            if($update == true)
            {
                echo"
                <script>
                alert('Updated');
                window.location='/check';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='/check';
                </script>
                ";
            }
        }
        else
        {
            return redirect('/admin');
        }
        
    }
    public function delete($id)
    {
        if(Session::get('adminid'))
        {
            $x = recipe::findOrFail($id);
            if ($x->image!=null) {
                unlink(public_path().'/frontside/image/'.$x->image);
            }
            $delete = recipe::where('id','=',$id)->delete();
            if($delete == true)
            {
                echo"
                <script>
                alert('Deleted successfully');
                window.location='/check';
                </script>
                ";
            }
            else
            {
                echo"
                <script>
                alert('Error');
                window.location='/check';
                </script>
                ";
            }
        }
        else
        {
            return redirect('/admin');
        }
        
    }
    public function view($id)
    {
        $value = recipe::where('id','=',$id)->get();
        return view('recipesinfo',compact('value'));
    }

}