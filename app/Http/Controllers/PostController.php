<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Post ;
class PostController extends Controller
{
    
    public function index(){

        // debuger
       // dd(Post::all()) ;
       $posts = Post::paginate(5) ;
      // $posts = Post::all() ;
        return view('posts.index',compact('posts')) ;
    }

    // show  for details
    public function show($id) {
            $posts = Post::find($id);
            //dd($posts) ;
            return  view('posts.show',compact('posts'))   ;
    }

    public  function getForm()  {

        return  view('posts.createform');
    }

      public function saveForm(Request $request) {
          $request->validate([
                'name'  => 'required|max:20',
                'description'  => 'required|max:200'
          ]) ;

          $post = new Post();
          $post->name = $request-> name;
          $post->description = $request->description ;
          $post-> save() ;
          return  redirect('/posts')->with('status','post was created success')  ;
      }
    

      public  function edit($id){

        $post = Post::find($id);
        //dd($posts) ;
        return  view('posts.editshow',compact('post'))   ;
      }

      public function update(Request $request,$id) {

        $request->validate([
          'name'  => 'required|max:20',
          'description'  => 'required|max:200'
    ]) ;

    
    $post =  Post::find($id);
    $post->name = $request-> name;
    $post->description = $request->description ;
    $post-> save() ;
    return  redirect('/posts')->with('status','post was updated  success')  ;


      }
    
    }