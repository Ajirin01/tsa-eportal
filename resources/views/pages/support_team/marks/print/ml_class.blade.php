{{-- @foreach($marks as $ex)
    @foreach($exr->where('exam_id', $ex->id) as $exr) --}}

        {{-- @if(!Qs::userIsTeacher()) --}}
            {{-- <div class="card">
            <div class="card-header header-elements-inline">
                <h6 class="font-weight-bold">{{ $ex->name.' - '.$ex->year }}</h6>
                {!! Qs::getPanelOptions() !!}
            </div> --}}

            {{-- <div class="card-body collapse"> --}}
            {{-- <div class="card-body"> --}}

                <div class="col-md-12">
                    <!-- main table -->
                    <table style="width: 100%">
                        <tr>
                            <td> 
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
                                                    @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                                                        <td>{{ $sub->name }}</td>
                                                        <td>
                                                            <td>#</td>
                                                            @for ($i = 0; $i < 4; $i++)
                                                                @php
                                                                    $ff = "bk".$mk->id;
                                                                @endphp
                                                                <td style="width: 70px">{{ json_decode($mk->data)->$ff[$i] }}</td>
                                                            @endfor
                                                            
                                                            
                                                            <td> 
                                                                <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                                            </td>
                                                            <td> 
                                                                <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                                            </td>
                                                            <td> 
                                                                <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                                            </td>
                
                                                            <td>{{ count(json_decode($mk->data)->$ff) }}</td>
                                                            <td> </td>
                                                        </td>
                                                    @endforeach
                                                </tr>
                                                <tr>
                                                    @foreach($marks->where('subject_id', $sub->id)->where('exam_id', $ex->id) as $mk)
                                                        <td></td>
                                                        <td>
                                                            <td>%</td>
                                                            @for ($i = 0; $i < 4; $i++)
                                                                @php
                                                                    $ff = "per".$mk->id;
                                                                    $total_per = 0;
                                                                    $total_per += json_decode($mk->data)->$ff[$i];
                                                                @endphp
                                                                {{-- <td style="width: 70px">{{ json_decode($mk->data)->$ff[$i] }}</td> --}}
                                                                <td style="width: 70px">{{ json_decode($mk->data)->$ff[$i] }}</td>

                                                            @endfor
                                                            
                                                            <td> 
                                                                <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                                            </td>
                                                            <td> 
                                                                <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                                            </td>
                                                            <td> 
                                                                <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                                            </td>
                
                                                            <td></td>
                                                            <td> {{ $total_per?:"-" }} </td>
                                                        </td>
                                                        @php
                                                            $per_grand_total = 0;
                                                            $per_grand_total += $total_per;
                                                        @endphp
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td align="left" colspan="10">GRAND TOTAL OF PERCENTAGES EARNED:</td>
                                            <td align="left" colspan="2">{{ $per_grand_total?:"-" }}</td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="10">OUT OF:</td>
                                            <td align="left" colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="10">TOTAL PACEs COMPLETED:</td>
                                            <td align="left" colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="10">PACE AVERAGE & GRADE : (A )</td>
                                            <td align="left" colspan="2"></td>
                                        </tr>
                                        <tr>
                                            <td align="left" colspan="10">READING; WORD PER MINUTE (wpm) :</td>
                                            <td align="left" colspan="2"></td>
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
                                            <td colspan="13">SECTION B:SUMMARY OF CURRICULAR WORK</td>
                                            <td>
                                                <tr>
                                                    <td>SUBJECT</td>
                                                    <td colspan="5">CONTINUOUS ASSESSMENT(C.A)</td>
                                                    <td>
                                                        <td rowspan="2">EXAM <br> SCORE <br> 60%</td>
                                                        <td rowspan="2">TOTAL <br> SCORE <br> 100%</td>
                                                        @if($ex->term == 3)
                                                            <td>TOTAL(3rd term)</td>
                                                            <td>TOTAL(1st term)</td>
                                                            <td>TOTAL(2nd term)</td>
                                                            <td>CUMULATIVE</td>
                                                            <td>CUMULATIVE AVERAGE</td>
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
                                                        <td>{{ $mk->t1 ?: '-' }}</td>
                                                        <td>{{ $mk->t2 ?: '-' }}</td>
                                                        <td>{{ $mk->t3 ?: '-' }}</td>
                                                        <td>{{ $mk->t4 ?: '-' }}</td>
                                                        <td>{{ $mk->tca ?: '-' }}</td>
                                                        <td></td>
                                                        <td>{{ $mk->exm ?: '-' }}</td>
                                                        @if($ex->term < 3)
                                                            <td>{{ $ex->term == 1 ? $mk->tex1 ?: '-' : $mk->tex2 ?: '-' }}</td>
                                                        @endif 
                                                        @if($ex->term == 3)
                                                            <td>{{ $mk->tex3 ?: '-' }}</td>
                                                            <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 1, $mk->my_class_id, $year) }}</td>
                                                            <td>{{ Mk::getSubTotalTerm($student_id, $sub->id, 2, $mk->my_class_id, $year) }}</td>
                                                            <td>{{ $mk->cum ?: '-' }}</td>
                                                            <td>{{ $mk->cum_ave ?: '-' }}</td>
                                                        @endif
                                                        <td>{{ $mk->grade ? $mk->grade->name : '-' }}</td>
                                                        <td>{{ $mk->sub_pos ?: '-' }}</td>
                                                        <td>{{$marks->where('subject_id', $sub->id)->where('exam_id', $ex->id)->max('tex1')}}</td>
                                                        <td>{{$marks->where('subject_id', $sub->id)->where('exam_id', $ex->id)->min('tex1')}}</td>
                                                        <td>{{ $mk->grade ? $mk->grade->remark : '-' }}</td>
                                                    @endforeach
                                                </tr>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td>
                                                <tr>
                                                    <td align="left" colspan="8">GRAND TOTAL:</td>
                                                    <td align="left" colspan="1"></td>
                                                    <td align="center" colspan="6" rowspan="7">
                                                        <h4>SUPERVISOR S COMMENT:</h4>
                                                        <p>{{ $exr->p_comment }}</p>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" colspan="8">OUT OF:</td>
                                                    <td align="left" colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" colspan="8">TOTAL SUBJECTS ENTERED:</td>
                                                    <td align="left" colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" colspan="8">AVERAGE SCORE (%):</td>
                                                    <td align="left" colspan="1"></td>
                                                </tr>
                                                <tr>
                                                    <td align="left" colspan="8">OVERALL GRADE:</td>
                                                    <td align="left" colspan="1"></td>
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
                        @php
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
                        <tr>
                            <td>
                                <table style="width: 100%">
                                    <thead>
                                        <tr>
                                            <td colspan="6">SECTION C: WORK HABITS AND SOCIAL TRAITS</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="trait">A</td>
                                            <td class="trait">B</td>
                                            <td class="trait">C</td>
                                            <td class="trait">D</td>
                                            <td class="trait">E</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        
                                        @for ($i = 0; $i < count($work_habit_json) ; $i++)
                                            @php
                                                $str = preg_replace("/ /", "_",$work_habit_json[$i].$student_id.$ex->id.$year);
                                            @endphp
                                            <tr>
                                                <td>{{ $work_habit_json[$i] }}</td>
                                                {{-- <td>{{($trait_habit)->$str[0]}}</td> --}}
                                                @if ($trait_habit == null)
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                @else
                                                    <td class="trait">{{ ($trait_habit)->$str[0] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[1] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[2] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[3] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[4] }}</td>
                                                @endif
                                            </tr>
                                        @endfor

                                    </tbody>

                                </table>
                            </td>
                            <td> 
                                <span><b>HEAD TEACHER S REMARKS:</b></span>	
                                <h5>{{ $exr->t_comment }}</h5>
                            </td>
                            <td>
                                <table style="width: 100%">
                                    <thead>
                                        <tr>
                                            <td colspan="6">SECTION C: WORK HABITS AND SOCIAL TRAITS</td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td class="trait">A</td>
                                            <td class="trait">B</td>
                                            <td class="trait">C</td>
                                            <td class="trait">D</td>
                                            <td class="trait">E</td>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        @for ($i = 0; $i < count($trait_json) ; $i++)
                                            @php
                                                $str = preg_replace("/ /", "_",$trait_json[$i].$student_id.$ex->id.$year);
                                            @endphp
                                            <tr>
                                                <td>{{ $trait_json[$i] }}</td>
                                                {{-- <td>{{($trait_habit)->$str[0]}}</td> --}}
                                                @if ($trait_habit == null)
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                    <td class="trait"></td>
                                                @else
                                                    <td class="trait">{{ ($trait_habit)->$str[0] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[1] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[2] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[3] }}</td>
                                                    <td class="trait">{{ ($trait_habit)->$str[4] }}</td>
                                                @endif
                                                {{-- <td class="trait">{{ ($trait_habit)->$str[0] }}</td>
                                                <td class="trait">{{ ($trait_habit)->$str[1] }}</td>
                                                <td class="trait">{{ ($trait_habit)->$str[2] }}</td>
                                                <td class="trait">{{ ($trait_habit)->$str[3] }}</td>
                                                <td class="trait">{{ ($trait_habit)->$str[4] }}</td> --}}
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
            {{-- </div> --}}
        {{-- </div> --}}
        {{-- @endif --}}

        
{{-- 
    @endforeach
@endforeach --}}
