<?php

namespace App\Http\Controllers\SupportTeam;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report;
class ReportController extends Controller
{
    public function form($class, $student_id){
        $class = $class;
        $student_id = $student_id;
        $report = Report::where('class',$class)->where('student_id',$student_id)->first();
        
        if($class == "L&R"){
            if($report != null){
                $report = $report->report;
                // return response()->json($report == null);
            }else{
                define("report", "LR.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = $report->report;
                // return response()->json($report);
            }
            return view('pages.report.learning_to_read',['student_id'=> $student_id, 'report'=> json_decode($report)]);
        }else if($class == 'M&L'){
            if($report != null){
                $report = $report;
            }else{
                define("report", "ML.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = $report->report;
                // return response()->json($report);
            }
            return view('pages.report.main_learning',['student_id'=> $student_id, 'report'=> json_decode($report)]);
        }else if($class == 'sbs1'){
            if($report != null){
                $report = $report;
            }else{
                define("report", "sbs1.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = $report->report;
                // return response()->json($report);
            }
            return view('pages.report.step_by_step_1',['student_id'=> $student_id, 'report'=> json_decode($report)]);
        }else if($class == 'sbs2'){
            if($report != null){
                $report = $report;
            }else{
                define("report", "sbs2.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = $report->report;
                // return response()->json($report);
            }
            return view('pages.report.step_by_step_2',['student_id'=> $student_id, 'report'=> json_decode($report)]);
        }else if($class == 'R&B'){
            if($report != null){
                $report = $report;
            }else{
                define("report", "RB.json");
                $report = file_get_contents(report);
                $report = json_decode($report);
                $report = $report->report;
                // return response()->json($report);
            }
            return view('pages.report.reading_basic',['student_id'=> $student_id, 'report'=> json_decode($report)]);
        }
        
        // return response()->json("report form");
    }

    public function submit_form($class, $student_id, Request $request){
        // return response()->json($request->all());
        $report = Report::where('class',$class)->where('student_id',$student_id)->first();
        
        $data= [];
        $data['class'] = $class;
        $data['session'] = "2020-2021";
        $data['student_id'] = $student_id;
        $data['report'] = json_encode($request->all());
        if($report != null){
            $report->update($data);
            return response()->json("Report updated!");
        }else{
            Report::create($data);
            return response()->json($data);
        }
        
    }

    public function report($class, $student_id){
        $report = Report::where('class',$class)->where('student_id',$student_id)->get();
        $student_id = $student_id;
        $class = $class;
        // return response()->json($report);
        $report = json_decode($report[0]['report']);
        if($class == "L&R"){
            return view('pages.report.learning_to_read_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report]);
        }else if($class == "M&L"){
            return view('pages.report.main_learning_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report]);
        }else if($class == "sbs1"){
            return view('pages.report.step_by_step_1_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report]);
        }else if($class == "sbs2"){
            return view('pages.report.step_by_step_2_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report]);
        }else if($class == "R&B"){
            return view('pages.report.reading_basic_report',['class'=>$class, 'student_id'=> $student_id, 'report'=> $report]);
        }
        // return response()->json($report->maths_ca_b[0]);
    }
}
