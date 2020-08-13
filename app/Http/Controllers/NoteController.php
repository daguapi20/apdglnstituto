<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Academic;
use App\Models\Student;
use App\Models\Specialt;
use App\Models\Semester;
use App\Models\Subject;
use App\Models\Section;
use App\Models\Shift;
use DB;

use Illuminate\Http\Request;
use App\Http\Requests;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query=trim($request->get('seachby'));
        $query_academic=$request->get('academic_id');
        $query_specialt=$request->get('specialt_id');
        $query_semester=$request->get('semester_id');
        $query_subject=$request->get('subject_id');
       // $query_shift=$request->get('shift_id');

        $seach = $request->get('seachby');
      
        $espec = $request->get('specialt2');
        
        $stype = $request->get('stype');
        $subjects = Subject::seachby($stype, $seach)->paginate();
         
        
        $students=DB::table('enrollments')
        ->join('sassignments','sassignments.id','=','enrollments.sassignment_id')
        ->join('students','students.id','=','enrollments.student_id')
        ->join('notes','notes.id','=','notes.subject_id')
        ->join('enrollment_subjects','enrollment_subjects.enrollment_id','=','enrollments.id')
        ->select('enrollments.id', 'enrollments.student_id','students.name','students.lastname','enrollment_subjects.subject_id')
        ->where('sassignments.academic_id',$query_academic)
        ->where('sassignments.specialt_id',$query_specialt)
        ->where('sassignments.semester_id',$query_semester)
       //->where('notes.subject_id',$query_subject)
        //->where('sassignments.shift_id',$query_shift)

        ->get();

        $academics = Academic::all();
        $specialts = Specialt::all();
        $semesters = Semester::all();
        $subjects = Subject::all();
        $sections = Section::all();
        $shifts = Shift::all();
        $notes = Note::all();
        return view('notes.index', compact(
            'notes', 'academics', 'specialts', 'semesters', 'subjects', 'sections', 'shifts', 'students', 'query_academic', 'query_specialt', 'query_semester',  
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notes = Note::all();
        return view('notes.create', compact('notes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
/*         $data= $request->validate([
            'sassignment_id' => 'required',
            'teacher_id' => 'required',
            'subject_id' => 'required',
            'student_id' => 'required',
            'teaching' => 'required',
            'application_experiment' => 'required',
            'autonomous_work' => 'required',
            'sum' => 'required',
            'decimal_average' => 'required',
            'main_exam' => 'required',
            'final_average' => 'required',
            'letter_average' => 'required',
            'observation' => 'required',
        ]); */

      

        $student=$request->get('student');
        $subject=$request->get('subject');
        $teaching=$request->get('teaching');
        $application_experiment=$request->get('application_experiment');
        $autonomous_work=$request->get('autonomous_work');
        $sum=$request->get('sum');
        $decimal_average=$request->get('decimal_average');
        $main_exam=$request->get('main_exam');
        $final_average=$request->get('final_average');
        $letter_average=$request->get('letter_average');
        $observation=$request->get('observation');

        $nreg=count($teaching);
        $i=0;
        while($i < $nreg){
            $note = new Note;
            $note->sassignment_id=1;
            $note->teacher_id=1;
            $note->subject_id=$subject[$i];
            $note->student_id= $student[$i];
            $note->teaching=$teaching[$i];
            $note->application_experiment=$application_experiment[$i];
            $note->autonomous_work=$autonomous_work[$i];
            $note->sum=$sum[$i];
            $note->decimal_average=$decimal_average[$i];
            $note->main_exam=$main_exam[$i];
            $note->final_average=$final_average[$i];
            $note->letter_average=$letter_average[$i];
            $note->observation=$observation[$i];
        
            //$note = Note::create($data);
            $note->save();
            $i++;
        }
       return redirect()->route('notes.index', $note)->with('status', 'Agregado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function show(Note $note)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Note  $note
     * @return \Illuminate\Http\Response
     */
    public function destroy(Note $note)
    {
        //
    }
}
