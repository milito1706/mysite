<?php

namespace App\Http\Controllers;

use App\Note;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;

class NotesController extends Controller
{
    public function index(){
    	
    	$notes = Note::All();
        return view('notes/list',compact('notes'));

    }

    public function create(){
    	return view('notes/create');
    }

    public function store(){
            $this->validate(request(),[
            'note'=>['required','max:20']
            ]);
            
            $data = request()->all();
    	 	
            Note::create($data);
    	 	
            return redirect()->to('notes');

    }

    public function show($note){
    	dd($note);
    }
}
