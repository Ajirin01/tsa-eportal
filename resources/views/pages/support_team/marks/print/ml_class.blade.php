@php
    $per_grand_array = [];
    $pace_array = [];
    $total_grand_array = [];
@endphp
<table>
    <tr>
        <td>
            <!-- main table -->
            <table class="" style="width: 90vw">
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
                                                    <td></td>
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
                                                $pag = (array_sum($per_grand_total ?? [])  / array_sum($pace_total ?? []));
                                                $gra = array_sum($per_grand_total ?? [])  / array_sum($pace_total ?? []);
                                            }catch(Exception $e){
                                                $pag = null;
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
                                        @if ($pag == null)
                                            -
                                        @endif
                                    </td>
                                    {{-- <td style="text-align: right" colspan="2">{{ ($per_grand_total * count(json_decode($subjects)))/($pace_total*10) ?:"-" }}</td> --}}
                                    <td style="text-align: right" colspan="2">{{ $gra ?:"-" }}</td>
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
                            <tfoot>
                                <tr>
                                    @php
                                        try{
                                            $grd = array_sum($total_grand_array) / count(json_decode($subjects));
                                            $ave2 = array_sum($total_grand_array) / count(json_decode($subjects));
                                        }catch(Exception $e){
                                            $grd = null;
                                            $ave2 = null;
                                        }
                                    @endphp
                                    <td>
                                        <tr>
                                            <td align="left" style="text-align: left" colspan="8">GRAND TOTAL:</td>
                                            <td align="right" style="text-align: right" colspan="1">{{ array_sum($total_grand_array) }}</td>
                                            <td align="center" colspan="6" rowspan="7">
                                                <h4>SUPERVISOR S COMMENT:</h4>
                                                <p>{{ $exr->p_comment }}</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="text-align: left" colspan="8">OUT OF:</td>
                                            <td align="right" style="text-align: right" colspan="1">{{ 100 * count(json_decode($subjects)) }}</td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="text-align: left" colspan="8">TOTAL SUBJECTS ENTERED:</td>
                                            <td align="right" style="text-align: right" colspan="1">{{ count(json_decode($subjects)) }}</td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="text-align: left" colspan="8">AVERAGE SCORE (%):</td>
                                            <td align="right" style="text-align: right" colspan="1">{{ $ave2  }}</td>
                                        </tr>
                                        <tr>
                                            <td align="left" style="text-align: left" colspan="8">OVERALL GRADE:</td>
                                            <td align="right" style="text-align: right" colspan="1">
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
                                        <td style="text-align: left">{{ $work_habit_json[$i] }}</td>
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
                                        <td style="text-align: left">{{ $trait_json[$i] }}</td>
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
        </td>
    </tr>
</table>