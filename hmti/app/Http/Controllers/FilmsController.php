<?php

namespace App\Http\Controllers;

use App\Film;
use App\Comment;
use Illuminate\Http\Request;

class FilmsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->get('keyword');
        $films = Film::all();
        if ($keyword) {
            $films = Film::where('title', "LIKE", "%$keyword%")->get();
        }
        return view('dashboard.table', compact('films'));
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
        $validatedData = $request->validate([
            'title' => 'required',
            'deskripsi' => 'required',
            'link' => "required"
        ]);
        Film::create($request->all());

        return redirect('./movie')->with('Success', 'Data Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film)
    {
        $comments = Comment::where('film_id', $film->id)->get();
        $total_comment = Comment::where('film_id', $film->id)->count();
        return view('dashboard.read', compact('film', 'comments', 'total_comment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        return view('dashboard.filmedit', compact('film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Film $film)
    {
        Film::find($film->id)->update($request->all());
        return redirect('./movie')->with('edit', 'Data Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        Film::destroy($film->id);
        return redirect('./movie')->with('delete', 'Data Deleted!');
    }
}
