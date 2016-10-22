<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Student;
use Session;
use Carbon;
use DateTime;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

   
        $god = (new DateTime() > new DateTime(date('Y')."-09-1")) ? "0" : "1";
    
   
        //
        $students = Student::orderBy('prezime', 'asc')->paginate(15);
        return view('students.index') -> withStudents($students) -> withGod($god);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
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
                'ime'           => 'required|max:20',
                'prezime'       => 'required|max:50',
                'rod_star'      => 'required|max:20',
                'jmbg'          => 'required|max:13',
                'otac_ime'      => 'required|max:20',
                'otac_prezime'  => 'required|max:50',
                'majka_ime'     => 'required|max:20',
                'majka_prezime' => 'required|max:50'
            ));

        //store
        $student = new Student;

        $student->ime           = $request->ime;
        $student->prezime       = $request->prezime;
        $student->rod_star      = $request->rod_star;
        $student->jmbg          = $request->jmbg;
        $student->maticni       = $request->maticni;
        $student->pol           = $request->pol;
        $student->rodjen        = Carbon::parse($request->rodjen)->format('Y-m-d');
        $student->rodjen_mesto  = $request->rodjen_mesto;
        $student->adresa        = $request->adresa;
        $student->telefon       = $request->telefon;
        $student->nacionalnost  = $request->nacionalnost;
        $student->drzavljanstvo = $request->drzavljanstvo;
        $student->rodjen_opstina= $request->rodjen_opstina;
        $student->rodjen_drzava = $request->rodjen_drzava;
        $student->izabrani_lekar= $request->izabrani_lekar;

        $student->otac_ime      = $request->otac_ime;
        $student->otac_prezime  = $request->otac_prezime;
        $student->otac_jmbg     = $request->otac_jmbg;
        $student->otac_adresa   = $request->otac_adresa;
        $student->otac_telefon  = $request->otac_telefon;
        $student->otac_sprema   = $request->otac_sprema;
        
        $student->majka_ime     = $request->majka_ime;
        $student->majka_prezime = $request->majka_prezime;
        $student->majka_jmbg    = $request->majka_jmbg;
        $student->majka_adresa  = $request->majka_adresa;
        $student->majka_telefon = $request->majka_telefon;
        $student->majka_sprema  = $request->majka_sprema;


        $student->save();

        Session::flash('success', 'Успешно уписано!');

        //redirect
        student::all() -> last(); // last element 
        return redirect()->route('student.show', $student->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $students = Student::find($id);
        return view('students.show') -> withStudents($students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Student::find($id);
        return view('students.edit') -> withStudents($students);
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
                'ime'           => 'required|max:20',
                'prezime'       => 'required|max:50',
                'rod_star'      => 'required|max:20',
                'jmbg'          => 'required|max:13',
                'otac_ime'      => 'required|max:20',
                'otac_prezime'  => 'required|max:50',
                'majka_ime'     => 'required|max:20',
                'majka_prezime' => 'required|max:50'            
            ));


        $student = Student::find($id);

        //update
    
        $student->ime           = $request->input('ime');
        $student->prezime       = $request->input('prezime');
        $student->rod_star      = $request->input('rod_star');
        $student->jmbg          = $request->input('jmbg');
        $student->maticni       = $request->input('maticni');
        $student->pol           = $request->input('pol');
        $student->rodjen        = Carbon::parse($request->rodjen)->format('Y-m-d');
        $student->rodjen_mesto  = $request->input('rodjen_mesto');
        $student->adresa        = $request->input('adresa');
        $student->telefon       = $request->input('telefon');;
        $student->nacionalnost  = $request->input('nacionalnost');
        $student->drzavljanstvo = $request->input('drzavljanstvo');
        $student->rodjen_opstina= $request->input('rodjen_opstina');
        $student->rodjen_drzava = $request->input('rodjen_drzava');
        $student->izabrani_lekar = $request->input('izabrani_lekar');

        $student->otac_ime      = $request->input('otac_ime');
        $student->otac_prezime  = $request->input('otac_prezime');
        $student->otac_jmbg     = $request->input('otac_jmbg');
        $student->otac_adresa   = $request->input('otac_adresa');
        $student->otac_telefon  = $request->input('otac_telefon');
        $student->otac_sprema   = $request->input('otac_sprema');
        
        $student->majka_ime      = $request->input('majka_ime');
        $student->majka_prezime  = $request->input('majka_prezime');
        $student->majka_jmbg     = $request->input('majka_jmbg');
        $student->majka_adresa   = $request->input('majka_adresa');
        $student->majka_telefon  = $request->input('majka_telefon');
        $student->majka_sprema   = $request->input('majka_sprema');

        $student->save();

        Session::flash('success', 'Успешно уписано update!');

        //redirect
        return redirect()->back();

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $students = Student::find($id);

        $students->delete();

        Session::flash('success', 'Bravo, uspesno obrisano');

        //redirect
        return redirect()->route('student.index');  
    }

             /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function GetUcenikOdeljenje($id)
    {
        $students = Student::where('departments_id', '=', $id)->orderBy('prezime', 'asc')->paginate(15);
        return view('students.index') -> withStudents($students);
    }

}
