@php
    $per_grand_array = [];
    $pace_array = [];
    $total_grand_array = [];
     define("work_habit", "work_habit.json");
    define("_trait", "trait.json");

    $work_habit = file_get_contents(work_habit);
    $trait = file_get_contents(_trait);

    $work_habit_json = json_decode($work_habit);
    $trait_json = json_decode($trait);


    // for ($i=0; $i < count($work_habit_json); $i++) { 
    //     echo $work_habit_json[$i];
    // }

    // $article_index = json_decode($json);
@endphp   
@foreach($exams as $ex)
    @foreach($exam_records->where('exam_id', $ex->id) as $exr)

        @if(!Qs::userIsTeacher())
            <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="font-weight-bold">{{ $ex->name.' - '.$ex->year }}</h6>
                {!! Qs::getPanelOptions() !!}
            </div>

            {{-- <div class="card-body collapse"> --}}
            <div class="card-body">

                <div class="col-md-12">
				<!-- main table -->
				<table style="width: 100%">
					<tr>
						<td style="width: 100%"> 
							<!-- section A table -->
							<table class="" style="width: 100%">
								<thead>
									<tr>
										<td colspan="12">SECTION A: SUMMARY OF PACE WORK</td>
									</tr>
									<tr>
										<td></td>
										<td colspan="11">DETAILS</td>
									</tr>
									<tr>
										<td>Bible Memory</td>
										<td align="left" colspan="12">Matthew 5:1-16</td>
									</tr>
									<tr>
										<td>Bible Reading</td>
										<td colspan="11"></td>
									</tr>
									<tr>
										<td>SUBJECT</td>
										<td>
											<td colspan="8">PERCENTAGE SCORE EARNED</td>
											<td>T#</td>
											<td>T%</td>
										</td>
										
									</tr>
								</thead>
								<tbody>
                                    <tr>
                                        @foreach($subjects as $sub)
                                            <tr>
                                                @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id)->where('sec_a', 'on') as $mk)
                                                    <td>{{ $sub->name }}</td>
                                                    <td>
                                                        <td>#</td>
                                                        @for ($i = 0; $i < 7; $i++)
                                                            @php
                                                                $ff = "bk".$mk->id;
                                                            @endphp
                                                            <td align="center" style="width: 70px">{{ json_decode($mk->data)->$ff[$i] }}</td>
                                                        @endfor
                                                        <td align="center">
                                                            {{-- {{ json_encode(json_decode($mk->data)->$ff[2] == null) }} --}}
                                                            @php
                                                                $bk_count = 0;
                                                                for($k=0; $k<7; $k++){
                                                                    if(json_decode($mk->data)->$ff[$k] == null){
                                                                        ;
                                                                    }else{
                                                                        $bk_count++;
                                                                    }
                                                                }
                                                                
                                                            @endphp
                                                            @php
                                                                array_push($pace_array,$bk_count);
                                                                $pace_total = ($pace_array) ; 
                                                            @endphp
                                                            {{ $bk_count }}
                                                        </td>
                                                        <td> </td>
                                                    </td>
                                                @endforeach
                                            </tr>
                                            <tr>
                                                @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id)->where('sec_a', 'on') as $mk)
                                                    <td></td>
                                                    <td>
                                                        <td>%</td>
                                                        @for ($i = 0; $i < 7; $i++)
                                                            @php
                                                                $ff = "per".$mk->id;
                                                                // $per_array = json_decode($mk->data)->$ff[$i];
                                                                // $per_grand_total = 0;
                                                                $total_per = 0;
                                                                for ($p=0; $p < 7; $p++) { 
                                                                    // $per_grand_total += $total_per;
                                                                    if(json_decode($mk->data)->$ff[$p] == null){
                                                                        ;
                                                                    }else{
                                                                        $total_per += json_decode($mk->data)->$ff[$p];

                                                                    }
                                                                }
                                                            @endphp
                                                            
                                                            {{-- <td style="width: 70px">{{ json_decode($mk->data)->$ff[$i] }}</td> --}}
                                                            <td align="center" style="width: 70px">{{ json_decode($mk->data)->$ff[$i] }}</td>
                                                        @endfor
                                                        @php
                                                            array_push($per_grand_array,$total_per);
                                                            $per_grand_total = ($per_grand_array) ; 
                                                        @endphp
                                                        <td></td>
                                                        <td align="center"> {{ $total_per?:"-" }} </td>
                                                    </td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tr>
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td style="text-align: left" colspan="10">GRAND TOTAL OF PERCENTAGES EARNED:</td>
                                        <td style="text-align: right" colspan="2">{{ array_sum($per_grand_total ?? []) ?:"-" }}</td>
                                        {{-- <td style="text-align: right" colspan="2">{{ json_encode($per_grand_total ?? [])}}</td> --}}
                                    </tr>
                                    <tr>
                                        <td style="text-align: left" colspan="10">OUT OF:</td>
                                        <td style="text-align: right" colspan="2">{{ 100  * array_sum($pace_total ?? []) ?:"-" }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left" colspan="10">TOTAL PACEs COMPLETED:</td>
                                        <td style="text-align: right" colspan="2">{{ array_sum($pace_total ?? [])?: '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left" colspan="10">PACE AVERAGE & GRADE : 
                                            @php
                                                try{
                                                    $pag = array_sum($per_grand_total ?? [])  / array_sum($pace_total ?? []);
                                                }catch(Exception $e){
                                                    $pag = null;
                                                }

                                                try{
                                                    $gra = array_sum($per_grand_total ?? [])  / array_sum($pace_total ?? []);
                                                }catch(Exception $e){
                                                    $gra = null;
                                                }
                                            @endphp
                                            
                                            @if ($pag > 90)
                                                (A )
                                            @endif
                                            @if ($pag > 80 && $pag < 90)
                                                (B )
                                            @endif
                                            @if ($pag > 70 && $pag < 80)
                                                (C )
                                            @endif
                                            @if ($pag > 60 && $pag < 70)
                                                (D )
                                            @endif
                                            @if ($pag == 60)
                                                -
                                            @endif
                                        </td>
                                        {{-- <td style="text-align: right" colspan="2">{{ ($per_grand_total * count(json_decode($subjects)))/($pace_total*10) ?:"-" }}</td> --}}
                                        <td style="text-align: right" colspan="2">{{ $gra ?: '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td style="text-align: left" colspan="10">READING; WORD PER MINUTE (wpm) :</td>
                                        <td style="text-align: right" colspan="2"></td>
                                    </tr>
                                    <tr>
                                        <td align="left" colspan="10">% of WPM:</td>
                                        <td align="left" colspan="2"></td>
                                    </tr>
                                </tfoot>
							</table>
						</td>
						<td style="width: 20px">
							<span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
						</td>
						<td>
							<!-- section B table -->
							<table class="" style="width: 100%">
								<thead>
									<tr>
										<!-- <td colspan="13">SECTION B:SUMMARY OF CURRICULAR WORK</td> -->
                                        @if($ex->term == 3)
                                            <td colspan="18">SECTION B:SUMMARY OF CURRICULAR WORK</td>
                                        @endif
                                        @if($ex->term < 3)
                                            <td colspan="13">SECTION B:SUMMARY OF CURRICULAR WORK</td>
                                        @endif
										<td>
											<tr>
												<td>SUBJECT</td>
                                                
                                                <td colspan="5">CONTINUOUS ASSESSMENT(C.A)</td>
												<td>
													<td rowspan="2">EXAM <br> SCORE <br> 60%</td>
													<td rowspan="2">TOTAL <br> SCORE <br> 100%</td>
                                                    @if($ex->term == 3)
                                                        <td rowspan="2">TOTAL(3rd term)</td>
                                                        <td rowspan="2">TOTAL(1st term)</td>
                                                        <td rowspan="2">TOTAL(2nd term)</td>
                                                        <td rowspan="2">CUMULATIVE</td>
                                                        <td rowspan="2">CUMULATIVE AVERAGE</td>
                                                    @endif
													<td rowspan="2">SUBJECT <br> GRADE</td>
													<td rowspan="2">SUBJECT <br> POSITION</td>
													<td rowspan="2">CLASS <br> HIGHEST <br> SCORE</td>
													<td rowspan="2">CLASS <br> LOWEST <br> SCORE</td>
													<td rowspan="2">Subject Teacher's REMARK</td>
												</td>
											</tr>
											<tr>
												<td></td>
												<td>CA1 <br> 10%</td>
												<td>CA2 <br> 10%</td>
												<td>CA3 <br> 10%</td>
												<td>CA4 <br> 10%</td>
												<td>TOTAL <br> C.A40%</td>
											</tr>
										</td>
									</tr>
								</thead>
								<tbody>
									<tr>
										<!-- <td> -->
                                        @foreach($subjects as $sub)
                                            <tr>
                                                <td>{{ $sub->name }}</td>
                                                @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                                                {{--{{json_encode(App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->get())}}--}}
                                                    <td align="center">{{ $mk->t1 ?: '-' }}</td>
                                                    <td align="center">{{ $mk->t2 ?: '-' }}</td>
                                                    <td align="center">{{ $mk->t3 ?: '-' }}</td>
                                                    <td align="center">{{ $mk->t4 ?: '-' }}</td>
                                                    <td align="center">{{ $mk->tca ?: '-' }}</td>
                                                    <td align="center"></td>
                                                    <td align="center">{{ $mk->exm ?: '-' }}</td>
                                                    @if($ex->term < 3)
                                                        <td>{{ $ex->term == 1 ? $mk->tex1 ?: '-' : $mk->tex2 ?: '-' }}</td>
                                                        @php
                                                            array_push($total_grand_array, $ex->term == 1 ? $mk->tex1 ?: 0 : $mk->tex2 ?: 0)
                                                        @endphp
                                                    @endif 
                                                    @if($ex->term == 3)
                                                    {{--{{json_encode($mk->tex3)}}--}}
                                                        <td align="center">{{ $mk->tex3 ?: '-' }}</td>
                                                        <td align="center">{{ $mk->tex3 ?: '-' }}</td>
                                                        <td align="center">{{ Mk::getSubTotalTerm($student_id, $sub->id, 1, $mk->my_class_id, $year) }}</td>
                                                        <td align="center">{{ Mk::getSubTotalTerm($student_id, $sub->id, 2, $mk->my_class_id, $year) }}</td>
                                                        <td align="center">{{ $mk->cum ?: '-' }}</td>
                                                        <td align="center">{{ $mk->cum_ave ?: '-' }}</td>
                                                        @php
                                                            array_push($total_grand_array, $mk->cum_ave ?: 0)
                                                        @endphp
                                                    @endif
                                                    <td align="center">{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                                                    <td align="center">{{ $mk->sub_pos ?: '-' }}</td>
                                                    @if($ex->term == 1)
                                                        <td align="center">{{App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->max('tex1')}}</td>
                                                        <td align="center">{{App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->min('tex1')}}</td>
                                                    @endif
                                                    @if($ex->term == 2)
                                                        <td align="center">{{App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->max('tex2')}}</td>
                                                        <td align="center">{{App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->min('tex2')}}</td>
                                                    @endif
                                                    @if($ex->term == 3)
                                                        <td align="center">{{App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->max('tex3')}}</td>
                                                        <td align="center">{{App\Models\Mark::where('subject_id', $sub->id)->where('exam_id', $ex->id)->min('tex3')}}</td>
                                                    @endif
                                                    
                                                    <td align="center">{{ $mk->grade ? $mk->grade->remark : '-' }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
									</tr>
								</tbody>
								<tfoot style="width: 100%" >
									<tr>
                                        @php
                                            
                                            try{
                                                $grd = array_sum($total_grand_array) / count(json_decode($subjects));
                                            }catch(Exception $e){
                                                $grd = null;
                                            }
                                        @endphp
										<td>
											<tr>
												<td align="left" colspan="8">GRAND TOTAL:</td>
												<td align="right" colspan="1">{{ array_sum($total_grand_array) }}</td>
												<td align="center" colspan="10" rowspan="7">
													<h4>SUPERVISOR S COMMENT:</h4>
													<p>{{ $exam_records[0]->p_comment }}</p>
												</td>
											</tr>
											<tr>
												<td align="left" colspan="8">OUT OF:</td>
												<td align="right" colspan="1">{{ 100 * count(json_decode($subjects)) }}</td>
											</tr>
											<tr>
												<td align="left" colspan="8">TOTAL SUBJECTS ENTERED:</td>
												<td align="right" colspan="1">{{ count(json_decode($subjects)) }}</td>
											</tr>
											<tr>
												<td align="left" colspan="8">AVERAGE SCORE (%):</td>
												<td align="right" colspan="1">{{ $gra }}</td>
											</tr>
											<tr>
												<td align="left" colspan="8">OVERALL GRADE:</td>
                                                
												<td align="right" colspan="1">
                                                    @if ($grd < 101 && $grd > 90)
                                                        A
                                                    @endif
                                                    @if ($grd < 90 && $grd > 80)
                                                        B
                                                    @endif
                                                    @if ($grd < 80 && $grd > 70)
                                                        C
                                                    @endif
                                                    @if ($grd < 70 && $grd > 50)
                                                        D
                                                    @endif
                                                    @if ($grd < 50)
                                                        F
                                                    @endif
                                                </td>
											</tr>
											<tr>
												<td align="left" colspan="8"></td>
												<td align="left" colspan="1"></td>
											</tr>
										</td>
										
									</tr>
								</tfoot>
							</table>
						</td>
					</tr>
				</table>

            <!-- behaviourer trait table -->
            <table style="width: 100%">
                <tr>
                    <td>
                        <table style="width: 100%">
                            <thead>
                                <tr>
                                    <td colspan="6">SECTION C: WORK HABITS AND SOCIAL TRAITS</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                    <td>E</td>
                                </tr>
                            </thead>

                            <tbody>
                                @for ($i = 0; $i < count($work_habit_json) ; $i++)
                                    <tr>
                                        <td>{{ $work_habit_json[$i] }}</td>
                                        
                                        @php
                                            try{
                                                $str1 = json_decode($exr->trait_habit);
                                                // $str2 = $work_habit_json[$i].$student_id.$ex->id.$year;
                                                $str2 = preg_replace("/ /", "_",$work_habit_json[$i].$student_id.$ex->id.$year);

                                                $str = $str1->$str2;
                                                // $str = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);

                                            }catch(Exception $e){
                                                $str = [null, null, null, null, null];
                                            }
                                        @endphp
                                        <td>{{ $str[0] }}</td>
                                        <td>{{ $str[1] }}</td>
                                        <td>{{ $str[2] }}</td>
                                        <td>{{ $str[3] }}</td>
                                        <td>{{ $str[4] }}</td>
                                    </tr>
                                @endfor

                            </tbody>

                        </table>
                    </td>
                    <td style="text-align: center"> 
                        <span><b>HEAD TEACHER'S REMARKS:</b></span>	
                        <h5 style="text-align: left">{{ $exr->t_comment }}</h5>
                    </td>
                    <td>
                        <table style="width: 100%">
                            <thead>
                                <tr>
                                    <td colspan="6">SECTION C: WORK HABITS AND SOCIAL TRAITS</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>A</td>
                                    <td>B</td>
                                    <td>C</td>
                                    <td>D</td>
                                    <td>E</td>
                                </tr>
                            </thead>

                            <tbody>
                                @for ($i = 0; $i < count($trait_json) ; $i++)
                                    <tr>
                                        <td>{{ $trait_json[$i] }}</td>
                                        @php
                                            try{
                                                $str1 = json_decode($exr->trait_habit);
                                                // $str2 = $work_habit_json[$i].$student_id.$ex->id.$year;
                                                $str2 = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);

                                                $str = $str1->$str2;
                                                // $str = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);

                                            }catch(Exception $e){
                                                $str = [null, null, null, null, null];
                                            }
                                        @endphp
                                        <td>{{ $str[0] }}</td>
                                        <td>{{ $str[1] }}</td>
                                        <td>{{ $str[2] }}</td>
                                        <td>{{ $str[3] }}</td>
                                        <td>{{ $str[4] }}</td>
                                    </tr>
                                @endfor
                            </tbody>

                        </table>
                    </td>
                </tr>
            </table>
			</div>
                {{--Print Button--}}
                <div class="text-center mt-3">
                    <a target="_blank" href="{{ route('marks.print', [Qs::hash($student_id), $ex->id, $year]) }}" class="btn btn-secondary btn-lg">Print Marksheet <i class="icon-printer ml-2"></i></a>
                </div>
            </div>
        </div>
        @endif

        @if(Qs::userIsTeamSAT())
        {{--    EXAM COMMENTS   --}}
        <div class="card">
            <div class="card-header header-elements-inline bg-dark">
                <h6 class="card-title font-weight-bold">Exam Comments</h6>
                {!! Qs::getPanelOptions() !!}
            </div>

            {{-- <div class="card-body collapse"> --}}
            <div class="card-body collapse">

                {{-- <form method="post" action="{{ route('marks.comment_update', $exr->id) }}"> --}}
                <form class="ajax-update" method="post" action="{{ route('marks.comment_update', $exr->id) }}">
                    @csrf @method('PUT')

                    @if(Qs::userIsTeamSAT())
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label font-weight-semibold">Teacher's Comment</label>
                            <div class="col-lg-10">
                                <input name="t_comment" value="{{ $exr->t_comment }}"  type="text" class="form-control" placeholder="Teacher's Comment">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label font-weight-semibold">Present</label>
                            <div class="col-lg-10">
                                <input name="present" value="{{ $exr->present }}"  type="text" class="form-control" placeholder="Teacher's Comment">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label font-weight-semibold">Absent</label>
                            <div class="col-lg-10">
                                <input name="absent" value="{{ $exr->absent }}"  type="text" class="form-control" placeholder="Teacher's Comment">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label font-weight-semibold">Supervisor's Name</label>
                            <div class="col-lg-10">
                                <input name="supervisor_name" value="{{ $exr->supervisor_name }}"  type="text" class="form-control" placeholder="Teacher's Comment">
                            </div>
                        </div>
                    @endif

                    @if(Qs::userIsTeamSA())
                        <div class="form-group row">
                            <label class="col-lg-2 col-form-label font-weight-semibold">Head Teacher's Comment</label>
                            <div class="col-lg-10">
                                <input name="p_comment" value="{{ $exr->p_comment }}"  type="text" class="form-control" placeholder="Head Teacher's Comment">
                            </div>
                        </div>
                    @endif

                    {{-- <div class="text-right">
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div> --}}
                    <div class="col-md-12">
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <table style="width: 100%">
                                        <thead>
                                            <tr>
                                                <td colspan="6">SECTION C: WORK HABITS AND SOCIAL TRAITS</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>A</td>
                                                <td>B</td>
                                                <td>C</td>
                                                <td>D</td>
                                                <td>E</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @for ($i = 0; $i < count($work_habit_json) ; $i++)
                                                <tr>
                                                    <td>{{ $work_habit_json[$i] }}</td>
                                                    
                                                    @php
                                                        try{
                                                            $str1 = json_decode($exr->trait_habit);
                                                            // $str2 = $work_habit_json[$i].$student_id.$ex->id.$year;
                                                            $str2 = preg_replace("/ /", "_",$work_habit_json[$i].$student_id.$ex->id.$year);

                                                            $str = $str1->$str2;
                                                            // $str = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);

                                                        }catch(Exception $e){
                                                            $str = [null, null, null, null, null];
                                                        }
                                                    @endphp
                                                    <td><input value="{{ $str[0] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $work_habit_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[1] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $work_habit_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[2] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $work_habit_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[3] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $work_habit_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[4] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $work_habit_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    {{-- <td>FOLLOWS DIRECTIONS</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td> --}}
                                                </tr>
                                            @endfor

                                        </tbody>

                                    </table>
                                </td>
                                <td>
                                    <table style="width: 100%">
                                        <thead>
                                            <tr>
                                                <td colspan="6">SECTION C: WORK HABITS AND SOCIAL TRAITS</td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>A</td>
                                                <td>B</td>
                                                <td>C</td>
                                                <td>D</td>
                                                <td>E</td>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @for ($i = 0; $i < count($trait_json) ; $i++)
                                                <tr>
                                                    <td>{{ $trait_json[$i] }}</td>
                                                    @php
                                                        try{
                                                            $str1 = json_decode($exr->trait_habit);
                                                            // $str2 = $work_habit_json[$i].$student_id.$ex->id.$year;
                                                            $str2 = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);

                                                            $str = $str1->$str2;
                                                            // $str = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);

                                                        }catch(Exception $e){
                                                            $str = [null, null, null, null, null];
                                                        }
                                                    @endphp
                                                    <td><input value="{{ $str[0] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $trait_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[1] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $trait_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[2] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $trait_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[3] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $trait_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    <td><input value="{{ $str[4] }}" style="width: 30px" type="number" min="0" max="5" name="{{ $trait_json[$i].$student_id.$ex->id.$year }}[]" /></td>
                                                    {{-- <td>FOLLOWS DIRECTIONS</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td></td> --}}
                                                </tr>
                                            @endfor
                                        </tbody>

                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                    
                    <div class="text-right">
                        {{-- <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button> --}}
                        <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                    </div>
                </form>
            </div>
        </div>
        @endif

    @endforeach
@endforeach
