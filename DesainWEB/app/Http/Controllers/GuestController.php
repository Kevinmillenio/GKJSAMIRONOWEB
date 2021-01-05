<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use Illuminate\Support\Facades\Validator;

class GuestController extends Controller
{
    
    public function contact(){
        return view('contact');
    }   

    public function tulispesan(Request $r){
        $rules = [
            'nama'=>'string',
            'telepon'=>'string',
            'email'=>'string|email',
            'pesan'=>'string'
        ];
        
        $validator = Validator::make($r->all(),$rules);
        if($validator->fails()){
            return redirect('dashboard')->withErrors($validator);
        }else{
           try{
            $data = $r->input();
            $message = new Message;
            $message->nama = $data['nama'];
            $message->email = $data['email'];
            $message->telepon = $data['telepon'];
            $message->pesan = $data['pesan'];
            $message->save();
            return redirect('contact');
           }catch(Exception $e){
                error_log($e);
           }
        }
    }   
}