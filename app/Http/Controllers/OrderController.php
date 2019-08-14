<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Book;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $book = Book::all();
        return view ('order.create', compact('book'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /*esta es otro controlador add que agregamos extra.*/
    public function add(Request $request)
    {   
        
        
        if($request->session()->exists('books')){
           //dd($books);
           array_push($books, $id);
           $request->session()->forget('books');

        }else{
            $request->session()->put('books', array($id));
        }
        
         dd($request->session()->get('books'));
            $book = Book::all();
            return view('order.create', compact('book'));
        }

        
        //este parametro empty sirve para ver si esta vacio.
       
        
        //$book = Book::all();
        //return view ('order.create', compact('book'));
    
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Details  $details
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
