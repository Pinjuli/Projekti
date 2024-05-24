<?php

namespace App\Http\Controllers;
use App\Models\tapahtumat;
use Illuminate\Http\Request;

class TapahtumatController extends Controller
{
    public function index(){
        $tapahtumat = Tapahtumat::all();
        return view('tapahtumat', ['tapahtumat' =>$tapahtumat]);
    }

    public function create(){
        return view('tapahtumat.uusitapahtuma');
    }

    public function store(Request $request){
        $tapahtumat = new Tapahtumat;

        $tapahtumat->tapahtuma = $request->tapahtuma;
        $tapahtumat->pisteet = $request->pisteet;

        $tapahtumat->save();
        $tapahtumat = Tapahtumat::all();

      return view('tapahtumat', ['tapahtumat' =>$tapahtumat]);
    
     
    }

    public function edit(Tapahtumat $tapahtumat){
        return view('tapahtumanmuokkaus.edit', ['tapahtumat' => $tapahtumat]);
    }

    public function update(Tapahtumat $tapahtumat){
        $tapahtumat->tapahtuma;
    }

    public function destroy($id){
        
    }

    public function naytatapahtuma($tapahtuma){

        return view('naytatapahtuma', ['tapahtuma'=>tapahtumat::findOrFail($tapahtuma)]);
    }

    
    public function muokkaatapahtuma($tapahtuma){
        if(tapahtumat::findorfail($tapahtuma)){
            echo "tyhjä";
        
        
        } else{
            echo"jotain löytyi";
        }
    }

    /*return view('tapahtuma.tapahtumanmuokkaus',['muokkaatiedot'=>tapahtumat::findorfail($tapahtuma)])*/


    

    public function tapahtumapaivita(Request $request, $id){
        $request->validate([
            'tapahtuma' =>'required',
            'pisteet' =>'required'
        ]);

        $tapahtuma = tapahtumat::findOrFail($id);
        $tapahtuma->tapahtuma = strip_tags($request->input('tapahtuma'));
        $tapahtuma->pisteet = strip_tags($request->input('pisteet'));

        $tapahtuma->save();

        return redirect()->route('todoKaikki');
    }

    public function tapahtumatdelete( tapahtumat $tapahtuma){
        $tapahtuma->delete();
        return redirect(route('tapahtumat'));
    }




}
