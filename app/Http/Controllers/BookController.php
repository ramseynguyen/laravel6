<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('book/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        // dd($request->all());
        // Book::create([
        //     'title' => $request->title,
        //     'summary' => $request->summary,
        //     'content' => $request->content,
        //     'picture' => $request->picture,
        //     'category_id' => $request->category
        // ]);
        try {
        $book = new Book;
        $book->title = $request->title;
        $book->summary = $request->title;
        $book->content = $request->content;
        $book->category_id = $request->category;
        if($files=$request->file('image')){
            $name=$files->getClientOriginalName();
            $files->move('book/image',$name);
            dd($files);
            $book->image = 'book/image/'.$name;
        } else {
            return "error p";
        }
        $book->save();
        } catch (Exception $e) {
            echo "error";
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function doUploadImage($request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = $request->image->extension();
        $request->image->move(public_path('book/image'), $imageName);
        
        return true;
    }
}
