<?php

namespace App\Http\Controllers;

use App\Models\Yahoo;
use App\Http\Requests\StoreYahooRequest;
use App\Http\Requests\UpdateYahooRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class YahooController extends Controller
{
//     to get a query using query builder we can make a method which will be defined in the route an then the result will be returned either in json format or too the view file
    public function show(){//show being passed in the route
        // $yahoo=DB::table('yahoos')->get(); //this means select * from yahoos.
        // return ($yahoo)."</br>";

        // $yahoo1=DB::table('yahoos')->select('name')->get();//this means select name from yahoos
        // return ($yahoo1);

        // $yahoo2=DB::table('yahoos')->where('id','=',1)->get();//select * from yahoos where id=1
        // return ($yahoo2);

        // $yahoos3=Db::table('yahoos')->where('id','=',1)->where('name','=','Malvina Lakin')->get();//select * from yahoos where id=1 && where name=Malvina Lakin and for or we just put an or in front of where
        // return $yahoos3;

        // $yahoos4=Db::table('yahoos')->where('id','=',1)->orwhere('name','=','Malvina Lakin')->get();//select * from yahoos where id=1 && where name=Malvina Lakin and for or we just put an or in front of where
        // return $yahoos4;

        $yahoo=DB::table('yahoos')->get();
        return view('yahoo',['datas'=>$yahoo]);
    }

    public function view(string $id){
        $sql=DB::table('yahoos')->where('id',$id)->get();
        return view('view',['datas'=>$sql]);
    }

    public function add(Request $req){
        $user=DB::table('yahoos')->insert([
            'name'=>$req->name,
            'email'=>$req->email
        ]);
        return redirect()->route('show-show');
    }

    public function delete(string $id){
        $user=DB::table('yahoos')->where('id',$id)->delete();
        return redirect()->route('show-show');
    }

    public function update(string $id){
        $user=DB::table('yahoos')->where('id',$id)->first();
        return view('update',['datas'=>$user]);
        // return $user;
    }

    public function updateuser(Request $req,string $id){
        // return $req;
        $user=DB::table('yahoos')->where('id',$id)->update([
            'name'=>$req->name,
            'email'=>$req->email,
            // dd($req->name,$req->email),
        ]);
        return redirect()->route('show-show');
    }
}
