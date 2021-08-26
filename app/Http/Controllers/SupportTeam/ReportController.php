<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\StudentRecord as Student;
use App\User;

class ReportController extends Controller
{
    public function form($class, $student_id){
        $class = $class;
        $student_id = $student_id;
        $student_id = preg_replace(".-.","/", $student_id);
        // return response()->json($student_id);
        $report = Report::where('class',$class)->where('student_id',$student_id)->first();
        // return response()->json($report == null);
        if($class == "L&R"){
            if($report != null){
                $report = $report->report;
                // return response()->json($report == null);
            }else{
                define("report", "LR.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = json_encode($report->report);
                // return response()->json($report);
                // return response()->json("hello");
            }
            return view('pages.report.learning_to_read',['student_id'=> $student_id, 'report'=> json_decode($report), 'class'=> $class]);
        }else if($class == 'M&L'){
            
            if($report != null){
                // return response()->json($report);
                $report = $report->report;
            }else{
                define("report", "ML.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = json_encode($report->report);
                // return response()->json($report);
            }
            return view('pages.report.main_learning',['student_id'=> $student_id, 'report'=> json_decode($report), 'class'=> $class]);
        }else if($class == 'sbs1'){
            if($report != null){
                $report = $report->report;
            }else{
                define("report", "sbs1.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = json_encode($report->report);
                // return response()->json($report);
            }
            return view('pages.report.step_by_step_1',['student_id'=> $student_id, 'report'=> json_decode($report), 'class'=> $class]);
        }else if($class == 'sbs2'){
            if($report != null){
                $report = $report->report;
            }else{
                define("report", "sbs2.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = json_encode($report->report);
                // return response()->json($report);
            }
            return view('pages.report.step_by_step_2',['student_id'=> $student_id, 'report'=> json_decode($report), 'class'=> $class]);
        }else if($class == 'R&B'){
            if($report != null){
                $report = $report->report;
            }else{
                define("report", "RB.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = json_encode($report->report);
                // return response()->json($report);
            }
            return view('pages.report.reading_basic',['student_id'=> $student_id, 'report'=> json_decode($report), 'class'=> $class]);
        }
        
        // return response()->json("report form");
    }

    public function submit_form($class, $student_id, Request $request){
        // return response()->json($request->all());
        $student_id = preg_replace(".-.","/", $student_id);
        $report = Report::where('class',$class)->where('student_id',$student_id)->first();
        
        $data= [];
        $data['class'] = $class;
        $data['session'] = "2020-2021";
        $data['student_id'] = $student_id;
        $data['report'] = json_encode($request->all());
        if($report != null){
            $report->update($data);
            // return response()->json("Report updated!");
            return redirect()->back()->with('msg','Report updated!');
        }else{
            Report::create($data);
            return redirect()->back()->with('msg','Report Created!');
            // return response()->json($data);
        }
        
    }

    public function report($class, $student_id){
        $student_id = preg_replace(".-.","/", $student_id);
        $report = Report::where('class',$class)->where('student_id',$student_id)->get();
        $student = Student::where('adm_no', $student_id)->first();
        // return response()->json(User::find ($student->user_id));
        $student = User::find($student->user_id);
        // $student_id = $student_id;
        // $class = $class;
        // return response()->json($report);
        $report = json_decode($report[0]['report']);
        // $report = $report->report;
        if($class == "L&R"){
            return view('pages.report.learning_to_read_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report, 'student'=> $student]);
        }else if($class == "M&L"){
            return view('pages.report.main_learning_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report, 'student'=> $student]);
        }else if($class == "sbs1"){
            return view('pages.report.step_by_step_1_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report, 'student'=> $student]);
        }else if($class == "sbs2"){
            return view('pages.report.step_by_step_2_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report, 'student'=> $student]);
        }else if($class == "R&B"){
            return view('pages.report.reading_basic_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report, 'student'=> $student]);
        }
        // return response()->json($report->maths_ca_b[0]);
    }
}
