<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use Exception;

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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $message = Message::all();
        return view('home')->with('messages',$message);
    }

    public function deleteMessage(Request $request){
        $message = Message::findOrFail($request->id);
        try{
            $message->delete();
            return redirect('home')->with('success','Data berhasil dihapus!');
        }catch(Exception $e){
            return redirect('home')->with('err', $e);
        }
    }

}
