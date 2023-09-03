<?php

namespace App\Http\Controllers\Charts;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();

        $dataPoints = [];

        foreach ($students as $student) {

            $dataPoints[] = array(
                "name" => $student['name'],
                "data" => [
                    intval($student['term1_marks']),
                    intval($student['term2_marks']),
                    intval($student['term3_marks']),
                    intval($student['term4_marks']),
                ],
            );
        }

        return view("line-chart", [
            "data" => json_encode($dataPoints),
            "terms" => json_encode(array(
                "Term 1",
                "Term 2",
                "Term 3",
                "Term 4",
            )),
        ]);
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
}
