<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TachesController extends Controller
{
    public function lolo (Request $request){
    	$taches=new Task;
    	$taches->tache_non_faite=$request->input('tache');
    	$taches->tache_faite="";
    	$taches->save();
    	return redirect('/form');
    }

    public function delete($id){
    	//die( "le numéro à supprimer est : " . $id );
    	Task::find($id)->delete();
    	return 'ok ?';
    }
}
