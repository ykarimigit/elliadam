<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserpanelController extends Controller
{
    //
    public function order()
    {
        return view('userpanel.order');
    }
    public function changepass()
    {
        return view('userpanel.changepass');
    }

    public function changeuserpass(Request $request)
    {
        $id=$request->id;
        $newpass=$request->newpass;
        $prepass=$request->prepass;
        $newpass2=$request->newpass2;

        if($newpass!=$newpass2)

        {
            return back()
                ->with('nopass','Tekrar Şifre yanniş oldu');


        }


        $pass1=bcrypt($newpass);
        $var=\DB::table('users')->where('id','=',$id)->first();
        $email= $var->email;

        $var1=\DB::table('userpass')->where('email','=',$email)->first();

        $exist=$var1->pass;

        if($var1->pass!=$prepass)
        {
            return back()
                ->with('nopass','Mevcut Şifre yanniş oldu');


        }

        $var=\DB::table('userpass')->where('email','=',$email)->update(['pass'=>$newpass]);
        $var=\DB::table('users')->where('id','=',$id)->update(['password'=>$pass1]);
       // return redirect('changepass');
       return back()
            ->with('success','ŞİFRE DEĞİŞildi');

    }

    public function adresinfo()
    {
        return view('userpanel.adresinfo');
    }
    public function newadres()
    {
        return view('userpanel.newadres');
    }

    public function addnewadres(Request $request)
    {
        $id=$request->id;
        $invoicetype=$request->invoicetype;
        $firstadres=$request->firstadres;
        $name=$request->name;
        $lastname=$request->lastname;
        $tc=$request->tc;
        $adress=$request->adress;
        $city=$request->city;
        $districts=$request->districts;
        $postcode=$request->postcode;
        $region=$request->region;
        $tel=$request->tel;
        $var=\DB::table('customer_addresses')->insert(['customer_id'=>$id,'invoice_type'=>$invoicetype,'name'=>$name,'surname'=>$lastname,
            'citizenship_number'=>$tc,'address'=>$adress,'city'=>$city,'district'=>$districts,'zip_code'=>$postcode,
            'neigborhood'=>$region,'mobile_phone'=>$tel]);

         return redirect('/adresinfo');

    }

    public function havale()
    {
        return view('userpanel.havale');
    }
    public function havalebul(Request $request)
    {
        echo 'waiting...';
    }
    public function logou(Request $request)
    {
       \Auth::logout();
        return redirect('/');
    }



}
