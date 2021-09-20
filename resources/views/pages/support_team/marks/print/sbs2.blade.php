@php
    $total_one_array = [];
    $total_two_array = [];
    $total_three_array = [];
    $total_four_array = [];
    $total_wb_array = [];
    
@endphp

{{-- <div class="card-body collapse"> --}}
<div class="card-body">

    <div class="col-md-12">
        <!-- main table -->
        <table class="" >
            @php
                define("step_by_step_1", "SBS2.json");

                $step_by_step_1 = file_get_contents(step_by_step_1);

                $step_by_step_1_json = json_decode($step_by_step_1);
            @endphp
            <tr>
                <td> 
                    <!-- section A table -->
                    <table class="">
                        <thead>
                            <tr>
                                <td>LESSONS</td>
                                <td>RECOGNITION</td>	
                                <td>TRACING/ DRAWING</td>
                                <td>NUMERACY</td>
                                <td>PHYSICAL DEVELOPMENT</td>
                                <td>COLOURING</td>
                            </tr>
                            <tr>
                                <td colspan="1">Bible Memory</td>
                                <td colspan="5"></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                @for ($i = 0; $i < count($step_by_step_1_json->upper); $i++)
                                    @php
                                        $ff = $step_by_step_1_json->upper[$i];
                                        $ff = preg_replace("/ /","_", $ff);
                                    @endphp
                                    <tr>
                                        <td style="text-align: left">{{$step_by_step_1_json->upper[$i]}}</td>
                                        <td style="width: 70px; text-align: center">{{ $data->$ff[0] }}</td>
                                        <td style="width: 70px; text-align: center">{{ $data->$ff[1] }}</td>
                                        <td style="width: 70px; text-align: center">{{ $data->$ff[2] }}</td>
                                        <td style="width: 70px; text-align: center">{{ $data->$ff[3] }}</td>
                                        <td style="width: 70px; text-align: center">{{ $data->$ff[4] }}</td>
                                        
                                    </tr>
                                @endfor
                            </tr>
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td align="left" style="text-align: left" colspan="1">SUPERVISOR s COMMENTS:</td>
                                <td align="left" colspan="5">{{ $exr->p_comment }}</td>
                            </tr>
                        </tfoot>
                    </table>
                </td>
                <td style="width: 20px">
                    <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                </td>
                <td>
                    <!-- section B table -->
                    <table>
                        <thead>
                            <tr>
                                <td>MATHS</td>
                                <td style="width: 100px;">%</td>
                                <td>SOCIAL STUDIES</td>
                                <td style="width: 100px;">%</td>
                                <td>SCIENCE</td>
                                <td style="width: 100px;">%</td>
                                <td>HANDS-ON EVENTS</td>
                                <td style="width: 100px;">%</td>
                            </tr>
                            <tr>
                                <td colspan="8" style="width: 100%"><span class="text-success text-center"> RATING SCALE:</span> <br>
                                    <span class="text-danger text-center">PS-WB=Pre-School Work-Book for every 3 lessons</span>	
                                </td>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 1; $i < 20; $i++)
                                @php
                                    $wb = "ps_wb".$i;
                                    $total_one = 0;
                                    $total_two = 0;
                                    $total_three = 0;
                                    $total_four = 0;
                                @endphp
                                <tr>
                                    @if ($i < 10)
                                        <td style="text-align: left">PS-WB0{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[0]}}</td>
                                        <td style="text-align: left">PS-WB0{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[1]}}</td>
                                        <td style="text-align: left">PS-WB0{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[2]}}</td>
                                        <td style="text-align: left">PS-WB0{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[3]}}</td>
                                    @endif

                                    @if ($i >= 10)
                                        <td style="text-align: left">PS-WB{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[0]}}</td>
                                        <td style="text-align: left">PS-WB{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[1]}}</td>
                                        <td style="text-align: left">PS-WB{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[2]}}</td>
                                        <td style="text-align: left">PS-WB{{$i}}</td>
                                        <td style="text-align: center">{{$data->$wb[3]}}</td>
                                    @endif
                                    
                                    @php
                                        $total_wb = 0;
                                        for($k=0; $k<4; $k++){
                                            if($data->$wb[$k] == null){
                                                ;
                                            }else{
                                                $total_one = $data->$wb[0];
                                                $total_two = $data->$wb[1];
                                                $total_three = $data->$wb[2];
                                                $total_four = $data->$wb[3];
                                                array_push($total_wb_array, 1);
                                            }
                                        }
                                        array_push($total_one_array,$total_one);
                                        array_push($total_two_array,$total_two);
                                        array_push($total_three_array,$total_three);
                                        array_push($total_four_array,$total_four);
                                        // $pace_total = ($pace_array) ; 
                                    @endphp
                                </tr>
                            @endfor
                            
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>TOTAL:</td>
                                {{-- <td>{{ json_encode($total_one_array)?: '-' }}</td> --}}
                                <td style="text-align: center">{{ array_sum($total_one_array)?: '-' }}</td>
                                <td></td>
                                {{-- <td>{{json_encode($total_two_array)?: '-' }}</td> --}}
                                <td style="text-align: center">{{ array_sum($total_two_array)?: '-' }}</td>
                                <td></td>
                                <td style="text-align: center">{{ array_sum($total_three_array)?: '-' }}</td>
                                <td></td>
                                <td style="text-align: center">{{ array_sum($total_four_array)?: '-' }}</td>
                            </tr>
                            <tr>
                                <td style="text-align: left">GRAND TOTAL:</td>
                                <td style="text-align: center"> {{ array_sum($total_one_array) + array_sum($total_two_array) + array_sum($total_three_array) + array_sum($total_four_array) ?: '-' }} </td>
                                <td style="text-align: left" colspan="2">TOTAL WB COMPLETED:</td>
                                {{-- <td>{{ $total_wb }}</td> --}}
                                <td style="text-align: center">{{ array_sum($total_wb_array) }}</td>
                                <td style="text-align: left" colspan="2">AVERAGE:</td>
                                @php
                                try{
                                    $ave = (array_sum($total_one_array) + array_sum($total_two_array) + array_sum($total_three_array) + array_sum($total_four_array))/ array_sum($total_wb_array);
                                }catch(\throwable $e){
                                    $ave = null;
                                }
                            @endphp
                            <td style="text-align: center">{{ $ave ?: '-'}}</td>
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
                                    $str = preg_replace("/ /", "_",$work_habit_json[$i].$sr->id.$ex->id);
                                @endphp
                                <tr>
                                    <td style="text-align: left">{{ $work_habit_json[$i] }}</td>
                                    {{-- <td>{{($trait_habit)->$str[0]}}</td> --}}
                                    <td class="trait">{{ $data->$str[0] }}</td>
                                    <td class="trait">{{ $data->$str[1] }}</td>
                                    <td class="trait">{{ $data->$str[2] }}</td>
                                    <td class="trait">{{ $data->$str[3] }}</td>
                                    <td class="trait">{{ $data->$str[4] }}</td>
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
                                $str = preg_replace("/ /", "_",$trait_json[$i].$sr->id.$ex->id);
                            @endphp
                                <tr>
                                    <td style="text-align: left">{{ $trait_json[$i] }}</td>
                                    {{-- <td>{{($trait_habit)->$str[0]}}</td> --}}
                                    <td class="trait">{{ $data->$str[0] }}</td>
                                    <td class="trait">{{ $data->$str[1] }}</td>
                                    <td class="trait">{{ $data->$str[2] }}</td>
                                    <td class="trait">{{ $data->$str[3] }}</td>
                                    <td class="trait">{{ $data->$str[4] }}</td>
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

            {{-- lower step-by-step --}}
            <tr>
                <table style="width: 100%">
                    <thead>
                        <tr style="margin-top: 50px;">
                            <th style="text-align: center; margin: 0 auto; margin-top: 50px;">
                                <h4  class="text-center"> Lessons for STEP-BY-STEP 1 </h4>
                            </th>
                        </tr>
                    </thead>
                    <tbody align="left">
                        @for ($i = 0; $i < count($step_by_step_1_json->lower); $i++)
                            @php
                                $ff = $step_by_step_1_json->lower[$i];
                                $ff = preg_replace("/ /","_", $ff);
                            @endphp
                            <tr>
                                <td style="text-align: left">{{$step_by_step_1_json->lower[$i]}}</td>
                                <td style="width: 200px">{{ $data->$ff[0] }}</td>
                                <td style="width: 200px">{{ $data->$ff[1] }}</td>
                                
                            </tr>
                        @endfor
                        {{-- @for ($i = 0; $i < count($step_by_step_1_json->lower); $i++)
                            <tr>
                                <td colspan="2">{{$step_by_step_1_json->lower[$i]}}</td>
                                <td colspan="2">{{ $step_by_step_1_json->lower[$i] }}</td>
                                <td colspan="4">{{ $step_by_step_1_json->lower[$i] }}</td>
                            </tr>
                        @endfor --}}
                        
                    </tbody>
                </table>
            </tr>
        </table>
    </div>
</div>

        