<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $cities = \DB::table('cities')->pluck("name","id");
        return view('userpanel.home',compact('cities'));
       // return view('userpanel.home');
    }

    public function getStates($id)
    {
        $states = \DB::table("districts")->where("city_id",'=',$id)->pluck("name","id");
        return json_encode($states);
    }
    public function edituser (Request $request, $id)
    {


        $id=$request->id;
        $name=$request->name;
        $lastname=$request->lastname;
        $emai=$request->email;
        $tel=$request->tel;
        $tcid=$request->tc;
        $birnthdate=$request->birndate;
        echo $birnthdate;
        $city=$request->city;
        $city=(int)$city;
        $districts=$request->state;
        $districts=(int)$districts;
        $sex=$request->sex;
        $tel=$request->tel;
        $region=$request->region;
        $postcode=$request->postcode;
        $adress=$request->adress;
        $corporation=$request->corporation;
        $taxname=$request->taxnum;
        $taxhome=$request->taxhome;

        $var=\DB::table('users')->where('id','=',$id)->update(['name'=>$name,'email'=>$emai,'lastname'=>$lastname,'adress'=>$adress,'tel'=>$tel
               , 'sex'=>$sex,'tc'=>$tcid,'city'=>$city, 'birndate'=>$birnthdate,'districts'=>$districts,'region'=>$region,'postcode'=>$postcode,'corporation'=>$corporation
        , 'taxname'=>$taxname,'taxhome'=>$taxhome]);

        return back()
            ->with('edit','Bilgiler kayt oldu');

    }

    public function work1(){
        return view('work1');
    }
    public function work2(){
        return view('work2');
    }
    public function work3(){
        return view('work3');
    }

    public function work4(){
        return view('work4');
    }

    public function work5(){
        return view('work5');
    }

    public function work6(){
        return view('work6');
    }






}
