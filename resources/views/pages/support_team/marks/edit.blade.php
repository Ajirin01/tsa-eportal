<form class="ajax-update" action="{{ route('marks.update', [$exam_id, $my_class_id, $section_id, $subject_id]) }}" method="post">
{{-- <form action="{{ route('marks.update', [$exam_id, $my_class_id, $section_id, $subject_id]) }}" method="post"> --}}

    @csrf @method('put')
    <table class="table table-striped">
        <thead>
        <tr>
            <th>S/N</th>
            <th>Name</th>
            <th>ADM_NO</th>
            @if($class_type->code == 'LTR_CLASS')
                <th>CA 1 10%</th>
                <th>CA 2 10%</th>
                <th>CA 3 10%</th>
                <th>CA 4 10%</th>
                <th>EXAM SCORE 60%</th>
            @endif

            @if($class_type->code == 'ML_CLASS')
                <th>CA 1 10%</th>
                <th>CA 2 10%</th>
                <th>CA 3 10%</th>
                <th>CA 4 10%</th>
                <th>EXAM SCORE 60%</th>
            @endif
            
        </tr>
        </thead>
        <tbody>
            @foreach($marks->sortBy('user.name') as $mk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mk->user->name }} </td>
                    <td style="cursor: pointer" onclick="toggleMarks('{{$mk->user->student_record->id}}')">{{ $mk->user->student_record->adm_no }}</td>
                    {{-- @if ($class_type->code != 'LTR_CLASS' || $class_type->code != 'ML_CLASS')
                        <td style="text-align: right; border-left: none; cursor: pointer" onclick="hideMarks({{$mk->user->student_record->id}})">v</td>
                    @endif --}}

                    @if($class_type->code == 'LTR_CLASS')
                        <td><input title="CA1" min="0" max="10" class="text-center" name="t1_{{ $mk->id }}" value="{{ $mk->t1 }}" type="number"></td>
                        <td><input title="CA2" min="0" max="10" class="text-center" name="t2_{{ $mk->id }}" value="{{ $mk->t2 }}" type="number"></td>
                        <td><input title="CA3" min="0" max="10" class="text-center" name="t3_{{ $mk->id }}" value="{{ $mk->t3 }}" type="number"></td>
                        <td><input title="CA4" min="0" max="10" class="text-center" name="t4_{{ $mk->id }}" value="{{ $mk->t4 }}" type="number"></td>
                        <td><input title="EXAM" min="0" max="60" class="text-center" name="exm_{{ $mk->id }}" value="{{ $mk->exm }}" type="number">
                            <input type="checkbox" name="sec_b" id="">
                        </td>
                    @endif

                    @if($class_type->code == 'ML_CLASS')
                        <td><input title="CA1" min="0" max="10" class="text-center" name="t1_{{ $mk->id }}" value="{{ $mk->t1 }}" type="number"></td>
                        <td><input title="CA2" min="0" max="10" class="text-center" name="t2_{{ $mk->id }}" value="{{ $mk->t2 }}" type="number"></td>
                        <td><input title="CA3" min="0" max="10" class="text-center" name="t3_{{ $mk->id }}" value="{{ $mk->t3 }}" type="number"></td>
                        <td><input title="CA4" min="0" max="10" class="text-center" name="t4_{{ $mk->id }}" value="{{ $mk->t4 }}" type="number"></td>
                        <td><input title="EXAM" min="0" max="60" class="text-center" name="exm_{{ $mk->id }}" value="{{ $mk->exm }}" type="number">
                            <input type="checkbox" name="sec_b" id="">
                        </td>
                    @endif
                    
                </tr>
                @if($class_type->code == 'LTR_CLASS')
                    <tr>
                        <td>#</td>
                        <td><input title="CA1" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk1 }}" type="number"></td>
                        <td><input title="CA2" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk2 }}" type="number"></td>
                        <td><input title="CA3" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk3 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number">
                            <input type="checkbox" name="sec_a" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>%</td>
                        <td><input title="CA1" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per1 }}" type="number"></td>
                        <td><input title="CA2" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per2 }}" type="number"></td>
                        <td><input title="CA3" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per3 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                    </tr>
                @endif

                @if($class_type->code == 'ML_CLASS')
                    <tr>
                        <td>#</td>
                        <td><input title="CA1" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk1 }}" type="number"></td>
                        <td><input title="CA2" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk2 }}" type="number"></td>
                        <td><input title="CA3" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk3 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="5000" class="text-center" name="bk{{ $mk->id }}[]" value="{{ $mk->bk4 }}" type="number">
                            <input type="checkbox" name="sec_a" id="">
                        </td>
                    </tr>
                    <tr>
                        <td>%</td>
                        <td><input title="CA1" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per1 }}" type="number"></td>
                        <td><input title="CA2" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per2 }}" type="number"></td>
                        <td><input title="CA3" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per3 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                        <td><input title="CA4" min="1" max="100" class="text-center" name="per{{ $mk->id }}[]" value="{{ $mk->per4 }}" type="number"></td>
                    </tr>
                @endif

                @if ($class_type->code == 'sbs1')
                    <div style="display: none" id="toggle{{$mk->user->student_record->id}}">
                        <!-- main table -->
                        <table id="toggle{{$mk->user->student_record->id}}" class="">
                            @php
                                define("step_by_step_1", "SBS1.json");
        
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
                                                    <tr>
                                                        <td>{{$step_by_step_1_json->upper[$i]}}</td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                    </tr>
                                                @endfor
                                                {{-- <tr>
                                                    <td>LESSON 1-3</td>
                                                    <td><input style="width: 90px" type="number" min="0" max="5" name="lesson1-3[]" id="les"></td>
                                                    <td><input style="width: 90px" type="number" min="0" max="5" name="lesson1-3[]" id="les"></td>
                                                    <td><input style="width: 90px" type="number" min="0" max="5" name="lesson1-3[]" id="les"></td>
                                                    <td><input style="width: 90px" type="number" min="0" max="5" name="lesson1-3[]" id="les"></td>
                                                    <td><input style="width: 90px" type="number" min="0" max="5" name="lesson1-3[]" id="les"></td>
                                                </tr> --}}
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td align="left" colspan="1">SUPERVISOR s COMMENTS:</td>
                                                <td align="left" colspan="5"></td>
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
                                                <tr>
                                                    @if ($i < 10)
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                    @endif
        
                                                    @if ($i >= 10)
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                    @endif
                                                    
                                                </tr>
                                            @endfor
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>TOTAL:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>GRAND TOTAL:</td>
                                                <td></td>
                                                <td colspan="2">TOTAL WB COMPLETED:</td>
                                                <td></td>
                                                <td colspan="2">AVERAGE:</td>
                                                <td></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                            </tr>
                        </table>
        
                        <!-- behaviourer trait table -->
                        <table  style="width: 100%">
                            @php
                                define("work_habit", "work_habit.json");
                                define("_trait", "trait.json");
        
                                $work_habit = file_get_contents(work_habit);
                                $trait = file_get_contents(_trait);
        
                                $work_habit_json = json_decode($work_habit);
                                $trait_json = json_decode($trait);
                                
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
                                                    
                                                    {{-- @for($i = 0; $i < 4; $i++)
                                                        <td></td>
                                                    @endfor --}}
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
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
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
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
                                            <tr>
                                                <td colspan="2">{{$step_by_step_1_json->lower[$i]}}</td>
                                                <td colspan="2"><input style="width: 100%" type="text" name="{{ $step_by_step_1_json->lower[$i] }}[]" id=""></td>
                                                <td colspan="4"><input style="width: 100%" type="text" name="{{ $step_by_step_1_json->lower[$i] }}[]" id=""></td>
                                            </tr>
                                        @endfor
                                        
                                    </tbody>
                                </table>
                            </tr>
                        </table>
                    </div>
                @endif

                @if ($class_type->code == 'sbs2')
                    <div id="toggle{{$mk->user->student_record->id}}" class="card-body collapse">
                        <!-- main table -->
                        <table class="">
                            @php
                                define("step_by_step_2", "SBS2.json");
        
                                $step_by_step_2 = file_get_contents(step_by_step_2);
        
                                $step_by_step_1_json = json_decode($step_by_step_2);
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
                                                    <tr>
                                                        <td>{{$step_by_step_1_json->upper[$i]}}</td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="{{$step_by_step_1_json->upper[$i]}}[]" id=""></td>
                                                    </tr>
                                                @endfor
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td align="left" colspan="1">SUPERVISOR s COMMENTS:</td>
                                                <td align="left" colspan="5"></td>
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
                                                <tr>
                                                    @if ($i < 10)
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                    @endif
        
                                                    @if ($i >= 10)
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                    @endif
                                                    
                                                </tr>
                                            @endfor
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>TOTAL:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>GRAND TOTAL:</td>
                                                <td></td>
                                                <td colspan="2">TOTAL WB COMPLETED:</td>
                                                <td></td>
                                                <td colspan="2">AVERAGE:</td>
                                                <td></td>
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
                                                    
                                                    {{-- @for($i = 0; $i < 4; $i++)
                                                        <td></td>
                                                    @endfor --}}
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
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
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
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
                                            <tr>
                                                <td colspan="2">{{$step_by_step_1_json->lower[$i]}}</td>
                                                <td colspan="2"><input style="width: 100%" type="text" name="{{ $step_by_step_1_json->lower[$i] }}[]" id=""></td>
                                                <td colspan="4"><input style="width: 100%" type="text" name="{{ $step_by_step_1_json->lower[$i] }}[]" id=""></td>
                                            </tr>
                                        @endfor
                                        
                                    </tbody>
                                </table>
                            </tr>
                        </table>
                    </div>
                @endif

                @if ($class_type->code == 'RB_CLASS')
                    <div id="toggle{{$mk->user->student_record->id}}" class="card-body collapse">
                        <!-- main table -->
                        <table class="">
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
                                                @for ($j = 0; $j < 20; $j++)
                                                    <tr>
                                                        <td>
                                                            <select name="lesson[]">
                                                                <option value="">Select Lesson</option>
                                                                @for ($i = 0; $i < 180-2; $i++)
                                                                    <option value="lesson {{$i+1}}-{{$i+3}}">LESSON {{$i+1}}-{{$i+3}}</option>
                                                                @endfor
                                                            </select>
                                                        </td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="ar{{$j}}c2" id="les"></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="ar{{$j}}c3" id="les"></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="ar{{$j}}c4" id="les"></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="ar{{$j}}c5" id="les"></td>
                                                        <td><input style="width: 90px" type="number" min="0" max="5" name="ar{{$j}}c6" id="les"></td>
                                                    </tr>
                                                @endfor
                                            </tr>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td align="left" colspan="1">SUPERVISOR s COMMENTS:</td>
                                                <td align="left" colspan="5"></td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </td>
                                <td style="width: 20px">
                                    <span><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p><o:p>&nbsp;</o:p></span>
                                </td>
                                <td>
                                    <!-- section B table -->
                                    <table class="">
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
                                            @for ($i = 1; $i < 13; $i++)
                                                <tr>
                                                    @if ($i < 10)
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB0{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                    @endif
        
                                                    @if ($i >= 10)
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                        <td>PS-WB{{$i}}</td>
                                                        <td><input type="number" name="ps_wb{{$i}}[]" min="0" max="100" id=""></td>
                                                    @endif
                                                    
                                                </tr>
                                            @endfor
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td>TOTAL:</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>GRAND TOTAL:</td>
                                                <td></td>
                                                <td colspan="2">TOTAL WB COMPLETED:</td>
                                                <td></td>
                                                <td colspan="2">AVERAGE:</td>
                                                <td></td>
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
                                                    
                                                    {{-- @for($i = 0; $i < 4; $i++)
                                                        <td></td>
                                                    @endfor --}}
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $work_habit_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
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
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
                                                    <td><input style="width: 30px" type="text" name="{{ $trait_json[$i].$mk->user->student_record->id.$exam_id }}[]" /></td>
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
                @endif
            @endforeach
        </tbody>
    </table>

   

    <div class="text-center mt-2">
        <button type="submit" class="btn btn-primary">Update Marks <i class="icon-paperplane ml-2"></i></button>
    </div>
</form>
