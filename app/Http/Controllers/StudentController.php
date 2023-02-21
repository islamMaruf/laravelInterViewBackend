<?php

namespace App\Http\Controllers;

use App\Models\Institution;
use App\Models\Student;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::with('studentAttribute')->get();
        $studentAttributes = Institution::with('studentAttributes')->first();
        return response()->json(['students' => $students ,'studentAttributes' => $studentAttributes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request)
    {
        $student = Student::create($request->all());
        return \response()->json($student);
    }

    /**
     * Display the specified resource.
     *
     * @param Student $student
     * @return JsonResponse
     */
    public function show(Student $student)
    {
        return \response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Student $student
     * @return Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Student $student
     * @return JsonResponse
     */
    public function update(Request $request, Student $student)
    {
        $student->update($request->all());
        return \response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Student $student
     * @return JsonResponse
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json('Student Deleted');
    }
}
