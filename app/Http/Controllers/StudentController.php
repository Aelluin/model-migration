<?php

namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //1.
            //return Student::all();

        //2. 
            //return Student::where('province', 'Kentucky')->get();

        //3. 
            //return Student::where('province', 'Arizona')
                //->where('fname', 'Joany')
                    //->get();

        //4.
            //return Student::where('province', 'Arizona')
                //->orwhere('province', 'Kentucky')
                    //->get();

        //5.
            //return Student::where('province', 'Arizona')
                //->orWhere('province', 'Kentucky')
                    //->orWhere('lname', 'Lakin')
                        //->get();

        //6.
            //return Student::where('fname', 'like', '%t%')->get();

        //7.
            //return Student::orderBy('fname')->get();

        //8.
            //return Student::orderBy('city', 'desc')->get();

        //9.
            //return Student::limit(3)->get();

        //10.
            //return Student::whereIn('id',[1,3,5,7,9,11])->get();

                //return Student::wherenotIn('id',[1,3,5,7,9,11])->get();

        //11.
            //return Student::where('province', 'Minnesota')->first();


    }       

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //1.
            //return Student::find( $id );

        //2.
              $student = Student::find($id);
              return $student->fname . ' ' . $student->lname;
              
        //3.
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
