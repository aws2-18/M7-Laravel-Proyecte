<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use Illuminate\Support\Facades\DB;
class ChatController extends Controller
{
    public function getIndex(){
    	$arrayMessage = Message::all();
    	return view('chat.index',array('arrayMessage'=>$arrayMessage));

    	//return view('chat.index');
    }
    public function getIndex2(){
        return view('chat.index2');
    }
    public function getCreate(){
    	return view('chat.create');
    }
    public function getWelcome(){
        return view('chat.welcome');
    }
    public function getFiltrar(){
        $arrayUser = User::all();
        return view('chat.filtrar',array('arrayUser'=>$arrayUser));
    }
    //public function getUser($name){
      //  $User = User::findOrFail($name);
        //return view('chat.user',array('User'=>$User, 'name'=>$name));
    //}
    public function postEdit(Request $request, $name){
        $user = User::find($name);
        if ($request->has("name") && $request->has("email") && $request->has("password"))
        {
            $user->name = $request->input("name");
            $user->email = $request->input("email");
            $user->password = $request->input("password");
            $user->save();
            return "Actualizado correctamente";
        }else
        return "Faltan datos para poder ser actualizado";
    }
    public function getUser(){
        return view('chat.user');
    }
    public function getShow(){ 

        $arrayMessage = Message::all();
        $pepito=count(DB::table('messages')
        ->join('users', function ($join) {
            $join->on('users.name', '=', 'messages.name')
             ->where('messages.name', '=', 'Alina');
        })
        //count(DB::table('user_visits')->groupBy('user_id')->get());
        ->get());
        echo ($pepito);

        return view('chat.show',array('arrayMessage'=>$arrayMessage,'mensaje'=>$pepito));

    }
  //  public function getShow(){
    	//$arrayMessage = Message::all();
    	//return view('chat.index',array('arrayMessage'=>$arrayMessage));
   // }

    public function postCreate(Request $request){

    	$message = new Message();
    	if ($request-> has("name") && $request-> has("text"))
    	{
    		$message->name = $request->input("name");
    		$message->text = $request->input("text");
    		$message->save();
    		echo '<script>alert("Creado correctamente");</script>';
            return redirect()->action("ChatController@getIndex");
    	}else
    		echo '<script>alert("Creado incorrectamente");</script>';
            return redirect()->action("ChatController@getIndex");
    }
    public function postCreatePremium(Request $request){

        $message = new Message();
        if ($request-> has("name") && $request-> has("text"))
        {
            $message->name = $request->input("name");
            $message->text = $request->input("text");
            $message->save();
            echo '<script>alert("Creado correctamente");</script>';
            return redirect()->action("ChatController@getIndex");
        }else
            echo '<script>alert("Creado incorrectamente");</script>';
            return redirect()->action("ChatController@getIndex");
    }

    
}
