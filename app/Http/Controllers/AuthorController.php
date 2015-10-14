<?php

namespace App\Http\Controllers;

use App\Author;
use App\Application;
use Illuminate\Http\Request;
use App\Http\Requests;

class AuthorController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applications = Application::all();
        $authors = Author::all();

        return view('application.create', compact('applications', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        Author::create($data);

        session()->flash('flash_message_success', 'You have successfully created a new author!');
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);
        $author = Author::where('id', '=', $application->author_id);

        return view('application.edit', compact('application', 'author'));
    }
}
