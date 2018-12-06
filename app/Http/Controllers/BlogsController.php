<?php

namespace App\Http\Controllers;
use \App\Blogs;
use Request;
use DB;

class BlogsController extends Controller
{
     public function index(){

    	 $blogs=Blogs::latest()->get();
    	 return view('blogs.index', compact('blogs'));
       
    }

     public function show($id){

      	$blogs=Blogs::findorfail($id);
      	return view('blogs.show',compact('blogs'));
      }

      public function create(){

      	return view('blogs.create');
      }


      public function store(){

       $inputs=Request::all();
       Blogs::create($inputs);

       return redirect('blogs');

       }

       public function edit($id){
       
        $blogs=Blogs::find($id);
        $blogs->fill(Request::all());
        $blogs->save();

        return redirect('blogs');
       }

       public function category($category){
       
        $blogs = DB::table('blogs')->where('category', $category)->get();

        return view('blogs.category', compact('blogs'));
       }

     
}
