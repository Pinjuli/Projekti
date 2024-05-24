<?php

namespace App\Http\Controllers;

use App\Models\pisteet;
use Illuminate\Http\Request;

class PisteController extends Controller
{
    //
    public function kaikkipisteet (){
        return view('kaikkipisteet',['tiedot=>tiedot:all'()->sortBy('sarja')]);
    }

  /*  public function pisteet (){
        return view('pistetilanne');
    } */


   public function tallennapisteet(Request $request){
        $request->validate([
            'sarja'=> 'required',
            'nimi'=> 'required',
            'sahkoposti'=> 'required',
            'moottoripyora'=> 'required',
            'paivamaara'=> 'required',
            'kilometrit'=> 'required',
            'kisankilometrit'=> 'required',
            'tapahtuma'=> 'required',
            'pisteetyhteensa'=>'required'
            
        ]);

        $tiedot = new pisteet();

        $tiedot->sarja = strip_tags($request->input('sarja'));
        $tiedot->nimi = strip_tags($request->input('nimi'));
        $tiedot->sahkoposti = strip_tags($request->input('sahkoposti'));
        $tiedot->moottoripyora = strip_tags($request->input('moottoripyora'));
        $tiedot->alkuaika = strip_tags($request->input('alkuaika'));
        $tiedot->loppuaika = strip_tags($request->input('loppuaika'));
        $tiedot->kilometrit = strip_tags($request->input('kilometrit'));
        $tiedot->kisankilometrit = strip_tags($request->input('kisankilometrit'));
        $tiedot->tapahtuma = strip_tags($request->input('tapahtuma'));
        $tiedot->pisteetyhteensa = strip_tags($request->input('pisteetyhteensa'));

        return redirect()->route('kaikkipisteet');
        
    }
}
