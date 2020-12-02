<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Validator;

use App\Article;


class articleController extends Controller
{
   
    function show(){

        $data=Article::all();
        return view('list',['datas'=>$data]);
      
    }

    function addarticle(){
     return view('add');
    }

    function saveadd(Request $req)
    {
       
       $validator=$req->validate([
        'title'=>'required|max:20|min:2',
        'description'=>'required|min:2',
        'author'=>'required|min:2'
       ]);
           
   
            $article=new Article();
            $article->title= $req->title;
            $article->description= $req->description;
            $article->author=$req->author;
        
        $article->save();
     

    $req->session()->flash('msg','Record has been added to database');
  
   
    return redirect('/show');
      
    
        
    }

function delete($id,Request $req ){
    $article=Article::where('id',$id)->first();
    if(!$article){
        $req->session()->flash('msg','record not found');
        return redirect ('show');
    }

    Article::where('id',$id)->delete();
    $req->session()->flash('msg','record has been deleted');
return redirect('/show');
}


function update($id,Request $req){

    $article=Article::where('id',$id)->first();
    if(!$article){
        $req->session()->flash('msg','id not found');
        return redirect('show');
    }
   
   return view('edit',['datas'=>$article]);

}
function updatedata($id,Request $req){

   $validator= $req->validate([

        'title'=>'required|max:20|min:2',
        'description'=>'required|min:2',
        'author'=>'required|min:2'
    ]);

$article=Article::find($id);
$article->title= $req->title;
$article->description= $req->description;
$article->author=$req->author;
$article->save();
$req->session()->flash('msg','Record has been updated');
return redirect('/show');
}

}


