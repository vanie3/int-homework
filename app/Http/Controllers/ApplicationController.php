<?php

namespace App\Http\Controllers;

use App\Application;
use App\Author;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ApplicationFormRequest;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::orderBy('title', 'ASC')->get();

        return view('application.index')->withApplications($applications);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $applications = Application::all();
        $authors = Author::all();
        $versions = [1.0, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9, 2.0, 2.1, 2.2, 2.3, 2.4, 2.5, 2.6, 2.7, 2.8, 2.9, 3.0];

        return view('application.create')->withApplications($applications)->withAuthors($authors)->withVersions($versions);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationFormRequest $request)
    {
        $data = $request->all();
        Application::create($data);

        session()->flash('flash_message_success', 'You have successfully created a new software application!');
        return redirect()->route('applications.index');
    }
//
//    /**
//     * Display the specified resource.
//     *
//     * @param  int  $id
//     * @return \Illuminate\Http\Response
//     */
//    public function show($id)
//    {
////        $application = Application::findOrFail($id);
////
////        return redirect('application.create')->with($application);
//    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::find($id);
        $author = Author::find($id);
        $applications = Application::all();
        $authors = Author::all();
        $versions = [1.0, 1.1, 1.2, 1.3, 1.4, 1.5, 1.6, 1.7, 1.8, 1.9, 2.0, 2.1, 2.2, 2.3, 2.4, 2.5, 2.6, 2.7, 2.8, 2.9, 3.0];
        return view('application.edit')->withApplication($application)->withAuthor($author)->withApplications($applications)->withVersions($versions)->withAuthors($authors);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationFormRequest $request, $id)
    {

        $application = Application::findOrFail($id);
        $application->update($request->except(['_method', '_token']));
        return redirect()->route('applications.index');


//        Application::find($id);
//        $data = $request->all();
//        Application::update($data);
//
////        return view('application.index');
//        return Redirect::action('ApplicationController@index');
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
}
