<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Department;
use Session;

class DepartmentController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departments = Department::orderBy('id', 'asc')->paginate(10);
        return view('departments.index') -> withDepartments($departments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $this->validate($request, array(
                'odeljenje'      => 'required|max:2',
                'razredni'       => 'required|max:100',
            ));

        //store
        $department = new Department;

        $department->odeljenje  = $request->odeljenje;
        $department->razredni   = $request->razredni;
       
        $department->save();

        Session::flash('success', 'Успешно уписано!');

        //redirect
        return redirect()->route('department.index');
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
        $departments = Department::find($id);
        return view('departments.edit') -> withDepartments($departments);
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
        //validate
        $this->validate($request, array(
                'odeljenje'      => 'required|max:2',
                'razredni'       => 'required|max:100',
            ));

        $department = Department::find($id);

        $department->odeljenje      = $request->input('odeljenje');
        $department->razredni       = $request->input('razredni');

        $department->save();

        Session::flash('success', 'Успешно уписано update!');

        //redirect
        return redirect()->route('department.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $departments = Department::find($id);

        $departments->delete();

        Session::flash('success', 'Успешно брисање!');

        //redirect
        return redirect()->route('department.index');  
    }
}
