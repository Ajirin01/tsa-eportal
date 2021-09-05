@extends('layouts.master')
@section('page_title', 'Manage Applications')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Applications</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div id="down" class="col-md-12">
                <div class="container">
                    <div id="admission">
                        <h2>Application Form</h2>
                        <form action="{{ route('applications.update',$application->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div id="section-a">
                                <legend>SECTION A</legend>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Full Name: <span class="text-danger">*</span></label>
                                                <input value="{{ $application->applicant_name }}" required type="text" name="applicant_name" placeholder="Full Name" class="form-control">
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Post for which application is being made: <span class="text-danger">*</span></label>
                                                {{-- <input value="{{ json_decode($application->form_data)->post_applying_for }}" class="form-control" placeholder="Post" name="post_applying_for" type="text" required> --}}
                                                <div id="lga-cont">
                                                    <select required data-placeholder="Please Select the Post Applying  for" class="select-search form-control" name="post_applying_for" id="post_applying_for">
                                                        <option value="{{ json_decode($application->form_data)->post_applying_for }}">{{ json_decode($application->form_data)->post_applying_for }}</option>
                                                        {{-- <option value="Teacher">Teacher</option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>(a)Present Address<span class="text-danger">*</span></label>
                                                <input value="{{ $application->applicant_present_address }}" class="form-control" placeholder="Address" name="applicant_present_address" type="text" required>
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>(b)Permanent Address<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->applicant_permanent_address }}" class="form-control" placeholder="Address" name="applicant_permanent_address" type="text" required>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Age: </label>
                                                <input type="number" value="{{ $application->applicant_age }}" name="applicant_age" class="form-control" placeholder="Student Age">
                                            </div>
                                        </div>
            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label for="gender">Gender: <span class="text-danger">*</span></label>
                                                <select class="select form-control" id="gender" name="applicant_gender" required data-fouc data-placeholder="Choose..">
                                                    {{-- <option value=""></option> --}}
                                                    <option value="{{$application->applicant_gender}}">{{$application->applicant_gender}}</option>
                                                </select>
                                            </div>
                                        </div>
            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Phone:</label>
                                                <input value="{{ $application->applicant_phone }}" type="text" name="applicant_phone" class="form-control" placeholder="" >
                                            </div>
                                        </div>
            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Telephone:</label>
                                                <input value="{{ json_decode($application->form_data)->applicant_phone2 }}" type="text" name="applicant_phone2" class="form-control" placeholder="" >
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Date of Birth:</label>
                                                <input name="dob" value="{{ json_decode($application->form_data)->dob }}" type="date" class="form-control date-pick" placeholder="Select Date...">
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="nal_id">Nationality: <span class="text-danger">*</span></label>
                                                <select data-placeholder="Choose..." required name="applicant_nal_id" id="nal_id" class="select-search form-control">
                                                        <option value="{{ json_decode($application->form_data)->applicant_nal_id }}">{{ App\Models\Nationality::find(json_decode($application->form_data)->applicant_nal_id)->name }}</option>
                                                </select>
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>If an alien, state Registration No</label>
                                                <input name="is_alien_reg_no" value="{{ json_decode($application->form_data)->is_alien_reg_no }}" type="text" class="form-control date-pick" placeholder="Registration No">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>If naturalized, state certificate No</label>
                                                <input name="is_natura_cert_no" value="{{ json_decode($application->form_data)->is_natura_cert_no }}" type="text" class="form-control date-pick" placeholder="Registration No">
                                            </div>
                                        </div>
            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Place of Birth</label>
                                                <input name="place_of_birth" value="{{ json_decode($application->form_data)->place_of_birth }}" type="text" class="form-control date-pick" placeholder="Where were you born">
                                            </div>
                                        </div>
                                        
            
                                        <div class="col-md-3">
                                            <label for="state_id">State: <span class="text-danger">*</span></label>
                                            <select onchange="getLGA(this.value)" required data-placeholder="Choose.." class="select-search form-control" name="state_id" id="state_id">
                                                {{-- <option value=""></option> --}}
                                                <option value="{{ json_decode($application->form_data)->state_id }}">{{ App\Models\State::find(json_decode($application->form_data)->state_id)->name }}</option>
                                            </select>
                                        </div>
            
                                        <div class="col-md-3">
                                            <label for="lga_id">LGA: <span class="text-danger">*</span></label>
                                            <div id="lga-cont">
                                                <select required data-placeholder="Select State First" class="select-search form-control" name="lga_id" id="lga_id">
                                                    <option value="{{ json_decode($application->form_data)->lga_id }}">{{ App\Models\Lga::find(json_decode($application->form_data)->lga_id)->name }}</option>
                                                </select>
                                            </div>
                                            
                                        </div>
            
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Town/Village:</label>
                                                <input name="town_from" value="{{ json_decode($application->form_data)->town_from }}" type="text" class="form-control date-pick" placeholder="Town/Village">
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Marital Status:</label>
                                                {{ json_decode($application->form_data)->marrital_status }}: <input name="marrital_status" type="radio" value="{{ json_decode($application->form_data)->marrital_status }}" checked>
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Any Explanation?</label>
                                                <input name="explanation" value="{{ json_decode($application->form_data)->explanation }}" type="text" class="form-control date-pick" placeholder="Explain if there is any">
                                            </div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> State any other name by which you have been known:</label>
                                                <input name="other_name" value="{{ json_decode($application->form_data)->other_name }}" type="text" class="form-control date-pick" placeholder="Other name you are called">
                                            </div>
                                        </div>
            
                                    </div>
                                    <h4>State in full, name of:-</h4>
                                    
                                    <div class="row">
                                        {{-- <div class="row"> --}}
                                            {{-- <div class="col-md-12"> --}}
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Father's Name</label>
                                                        <input name="father_name" value="{{ json_decode($application->form_data)->father_name }}" type="text" class="form-control date-pick" placeholder="Other name you are called">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Father's State of Origin</label>
                                                        <input name="father_state_of_origin" value="{{ json_decode($application->form_data)->father_state_of_origin }}" type="text" class="form-control date-pick" placeholder="Other name you are called">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Father's Local Government of Origin</label>
                                                        <input name="father_LGA" value="{{ json_decode($application->form_data)->father_LGA }}" type="text" class="form-control date-pick" placeholder="Other name you are called">
                                                    </div>
                                                </div>
                                                
                                            {{-- </div> --}}
                                        {{-- </div> --}}
            
                                        {{-- <div class="row"> --}}
                                            {{-- <div class="col-md-12"> --}}
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mother's Name</label>
                                                        <input name="mother_name" value="{{ json_decode($application->form_data)->mother_name }}" type="text" class="form-control date-pick" placeholder="Mother's name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mother's State of Origin</label>
                                                        <input name="mother_state_of_origin" value="{{ json_decode($application->form_data)->mother_state_of_origin }}" type="text" class="form-control date-pick" placeholder="Mother's State of Origin">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Mother's Local Government of Origin</label>
                                                        <input name="mother_LGA" value="{{ json_decode($application->form_data)->mother_LGA }}" type="text" class="form-control date-pick" placeholder="Mother's LGA">
                                                    </div>
                                                </div>
                                                
                                            {{-- </div> --}}
                                        {{-- </div> --}}
            
                                        {{-- <div class="row"> --}}
                                            {{-- <div class="col-md-12"> --}}
                                                
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Spouse's Name</label>
                                                        <input name="spouse_name" value="{{ json_decode($application->form_data)->spouse_name }}" type="text" class="form-control date-pick" placeholder="Spouse's name">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Spouse's State of Origin</label>
                                                        <input name="spouse_state_of_origin" value="{{ json_decode($application->form_data)->spouse_state_of_origin }}" type="text" class="form-control date-pick" placeholder="Spouse's State of Origin">
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Spouse's Local Government of Origin</label>
                                                        <input name="spouse_LGA" value="{{ json_decode($application->form_data)->spouse_LGA }}" type="text" class="form-control date-pick" placeholder="Spouse's LGA">
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        {{-- </div> --}}
                                    {{-- </div> --}}
            
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Have you ever been convicted by any Court of Law (High Court, Magistrate’s Court, native Court, etc)? If so give details. If not, state “never”.</label>
                                                <input name="convicted_by_court" value="{{ json_decode($application->form_data)->convicted_by_court }}" type="text" class="form-control date-pick" placeholder="State never if not">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Are you under any legal or moral obligation to serve any employer? Give details:</label>
                                                <input name="moral_obligation" value="{{ json_decode($application->form_data)->moral_obligation }}" type="text" class="form-control date-pick" placeholder="Give Details">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="bg_id">Blood Group: </label>
                                                <select class="select form-control" id="bg_id" name="bg_id" data-fouc data-placeholder="Choose..">
                                                    {{-- <option value=""></option> --}}
                                                    <option value="{{ json_decode($application->form_data)->bg_id }}">{{ json_decode($application->form_data)->bg_id }}</option>
                                                </select>
                                            </div>
                                        </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="d-block">Upload Passport Photo:</label>
                                                {{-- <input value="{{ json_decode($application->form_data)->photo }}" accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc> --}}
                                                <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                                            </div>
                                        </div>
                                    </div>
            
                                    
            
            
                                </fieldset>
                            </div>
            
                            <div id="section-b">
                                <legend>SECTION B: DETAILS OF EDUCATION AND QUALIFICATIONS</legend>
                                <fieldset>
                                    <div class="row">
                                        <h5>NB:Copies of certificates must accompany this form. (Originals should be brought to interview)</h5>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Name of school/College </td>
                                                        <td>From (Month Year)</td>
                                                        <td>To (Month Year)</td>
                                                        <td>Headmaster/Principal</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 3; $i++)
                                                        <tr>
                                                            <td><input class="form-control" type="text" name="name_of_college[{{$i}}]" id="" value="{{json_decode($application->form_data)->name_of_college[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="from[{{$i}}]" id="" value="{{json_decode($application->form_data)->from[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="to[{{$i}}]" id="" value="{{json_decode($application->form_data)->to[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="headmaster[{{$i}}]" id="" value="{{json_decode($application->form_data)->headmaster[$i]}}"></td>
                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <h4>UNIVERSITIES / TERTIARY INSTITUTIONS ATTENDED.</h4>
                                        <h5>Give Dates and names of Vice-Chancellors, Provosts/Rectors during period of attendance.</h5>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Name of school/College </td>
                                                        <td>From (Month Year)</td>
                                                        <td>To (Month Year)</td>
                                                        <td>Vice-Chancellor, Provost/Rector</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 3; $i++)
                                                        <tr>
                                                            <td><input class="form-control" type="text" name="uni_name_of_college[{{$i}}]" id="" value="{{json_decode($application->form_data)->uni_name_of_college[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="uni_from[{{$i}}]" id="" value="{{json_decode($application->form_data)->uni_from[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="uni_to[{{$i}}]" id="" value="{{json_decode($application->form_data)->uni_to[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="uni_vicechancellor[{{$i}}]" id="" value="{{json_decode($application->form_data)->uni_vicechancellor[$i]}}"></td>
                                                        </tr>
                                                    @endfor
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <h4>CERTIFICATES OBTAINED:</h4>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Certificates</td>
                                                        <td>Date</td>
                                                        <td>Class/Grade</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @for ($i = 0; $i < 3; $i++)
                                                        <tr>
                                                            <td><input class="form-control" type="file" name="certificates[{{$i}}]" id="" value="{{json_decode($application->form_data)->date[$i]}}"></td>
                                                            <td><input class="form-control" type="date" name="date[{{$i}}]" id="" value="{{json_decode($application->form_data)->date[$i]}}"></td>
                                                            <td><input class="form-control" type="text" name="grade[{{$i}}]" id="" value="{{json_decode($application->form_data)->grade[$i]}}"></td>
                                                        </tr>
                                                    @endfor
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label> Period of National Youth Service (NYSC) and place of service. (Attach certificate of discharge, exemption or exclusion)</label>
                                                <input type="text" value="{{ json_decode($application->form_data)->nysc_period }}" name="nysc_period" class="form-control" placeholder="Period of NYSC">
                                            </div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Honours or Awards earned in school:</label>
                                                <input value="{{ json_decode($application->form_data)->school_awards }}" type="text" name="school_awards" class="form-control" placeholder="" >
                                            </div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>What special school activities can you conduct?</label>
                                                <input value="{{ json_decode($application->form_data)->professional_organization_membership }}" type="text" name="professional_organization_membership" class="form-control" placeholder="" >
                                            </div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Membership of professional organizations</label>
                                                <input value="{{ json_decode($application->form_data)->school_special_activites_conducted }}" type="text" name="school_special_activites_conducted" class="form-control" placeholder="" >
                                            </div>
                                        </div>
                                    </div>
            
                                </fieldset>
                            </div>
            
                            <div id="section-c">
                                <legend>SECTION C: DETAILS OF EMPLOYMENTSINCE LEAVING SCHOOL</legend>
                                <fieldset>
                                    <div class="row">
                                        <h5>(Periods of apprenticeship and trade should be indicated)</h5>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Name and full Address of Employer</td>
                                                        <td>From (Month Year)</td>
                                                        <td>To (Month Year)</td>
                                                        <td>Position Held</td>
                                                        <td>Salary Received</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input value="{{json_decode($application->form_data)->name_and_address_of_employer[0]}}" class="form-control" type="text" name="name_and_address_of_employer[]" id=""></td>
                                                        <td><input value="{{json_decode($application->form_data)->from[0]}}" class="form-control" type="text" name="from[]" id=""></td>
                                                        <td><input value="{{json_decode($application->form_data)->to[0]}}" class="form-control" type="text" name="to[]" id=""></td>
                                                        <td><input value="{{json_decode($application->form_data)->postion_held[0]}}" class="form-control" type="text" name="postion_held[]" id=""></td>
                                                        <td><input value="{{json_decode($application->form_data)->salary_received[0]}}" class="form-control" type="text" name="salary_received[]" id=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Reason for leaving present employment (Briefly).</label>
                                                <input name="leaving_reason" value="{{ json_decode($application->form_data)->leaving_reason }}" type="text" class="form-control date-pick" placeholder="Give Reason">
                                            </div>
                                        </div>
            
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Have you any objective to reference being made to your present/last employer?</label>
                                                <input name="objective_to_reference" value="{{ json_decode($application->form_data)->objective_to_reference }}" type="text" class="form-control date-pick" placeholder="Give Reason">
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <h4>Your references:</h4>
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>Full Address</td>
                                                        <td>Phone no</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control" type="file" name="ref_name[]" id=""></td>
                                                        <td><input class="form-control" type="date" name="ref_fullname[]" id=""></td>
                                                        <td><input class="form-control" type="text" name="ref_phone_no[]" id=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>What other experience (business, administrative, Christian ministry/gifting, etc) do you have?</label>
                                                <input type="text" value="{{ json_decode($application->form_data)->other_experience }}" name="other_experience" class="form-control" placeholder="State your other experience">
                                            </div>
                                        </div>
                                    </div>
            
                                </fieldset>
                            </div>
            
                            <div id="section-d">
                                <legend>SECTION D: SPIRITUAL ANDGENERALDETAILS</legend>
                                <fieldset>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Have you personal assurance that you are born again?<span class="text-danger">*</span></label>
                                                @if (json_decode($application->form_data)->born_again_assurance == "yes")
                                                    Yes: <input value="yes" required type="radio" name="born_again_assurance" checked> 
                                                    No: <input value="no" required type="radio" name="born_again_assurance">
                                                @endif
                                                @if (json_decode($application->form_data)->born_again_assurance == "no")
                                                    Yes: <input value="yes" required type="radio" name="born_again_assurance"> 
                                                    No: <input value="no" required type="radio" name="born_again_assurance" checked>
                                                @endif
                                                
                                                </div>
                                            </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>If yes, where and when?<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->where_when_born_again }}" class="form-control" name="where_when_born_again" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Where is your church membership?<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->church_membership }}" required type="text" name="church_membership" class="form-control">
                                                </div>
                                            </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pastor’s Name<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->pastor_name }}" class="form-control" name="pastor_name" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Pastor’s Phone<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->pastor_phone }}" class="form-control" name="pastor_phone" type="number" required>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Can you teach Christain doctrines in the school?<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->can_teach_doctrine }}" required type="text" name="can_teach_doctrine" class="form-control">
                                                </div>
                                            </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>-Explain<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->explain_doctrine }}" class="form-control" name="explain_doctrine" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label> Give a statement of your Christian faith and convictions.<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->christ_faith }}" required type="text" name="christ_faith" class="form-control">
                                                </div>
                                            </div>
            
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Please give your view on the subject of living a separate life. <span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->separate_life }}" class="form-control" placeholder="Address" name="separate_life" type="text" required>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>What will be the attitude of your spouse in regard to your teaching/working in a Christian School?<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->spouse_attitude_to_teaching }}" class="form-control" name="spouse_attitude_to_teaching" type="text" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label>In what way do you think the private Christian school fits into the educational programme of Nigeria?<span class="text-danger">*</span></label>
                                            <input value="{{ json_decode($application->form_data)->private_christian_school_fit }}" required type="text" name="private_christian_school_fit" placeholder="private Christian school fits into" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>What’s your condition of health?<span class="text-danger">*</span></label>
                                                {{ json_decode($application->form_data)->health_state }}: <input value="{{ json_decode($application->form_data)->health_state }}" checked name="health_state" type="radio" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                        <div class="form-group">
                                            <label> Physical Disabilities (if any)<span class="text-danger">*</span></label>
                                            <input value="{{ json_decode($application->form_data)->disability }}" required type="text" name="disability" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Will you be willing to submit your medical certificate of fitness?<span class="text-danger">*</span></label>
                                                Yes: <input value="yes" class="form-control" placeholder="" name="williness_to_submit_medicals" type="text">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>if my application is favourably considered, I shall be available to resume work from on:<span class="text-danger">*</span></label>
                                                <input value="{{ json_decode($application->form_data)->resumption_date }}" required type="date" name="resumption_date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input value="{{ json_decode($application->form_data)->concent }}" name="concent" type="checkbox" checked required>
                                                <label>I declare that the foregoing information is to the best of my knowledge and belief complete and correct<span class="text-danger">*</span></label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <!-- <h5 class="btn btn-primary form-control" id="section-a-btn" onclick="goSectionE()">
                                    Next
                                </h5><br><br><br> -->
                            </div>
            
                            <div id="section-e">
                                <legend>SECTION E: FOR OFFICIAL USE ONLY</legend>
                                <fieldset>
                                    <div class="row">
                                        <h5 class="text-danger">(To be completed by interview panel)</h5>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <span><b>I confirm that the applicant earned an average score of</b></span>
                                                <input style="border: none; border-bottom: 2px gray solid" type="text" value="{{ json_decode($application->form_data)->mark_earned }}" name="mark_earned" id="">
                                                <span><b>% and this ranks the 1st/2nd/3rd/4th/5th,</b></span>
                                                <input style="border: none; border-bottom: 2px gray solid" type="text" value="{{ json_decode($application->form_data)->interview_rank }}" name="interview_rank" id="">
                                                <span><b>best in the interview held on</b></span>
                                                <input style="border: none; border-bottom: 2px gray solid" type="date" value="{{ json_decode($application->form_data)->interview_date }}" name="interview_date" id="">
                                                <span><b>S/he is strongly recommended for the position of</b></span>
                                                <input style="border: none; border-bottom: 2px gray solid" type="text" value="{{ json_decode($application->form_data)->interview_position }}" name="interview_position" id="">
                                                <span><b>On TSASS</b></span>
                                                <input style="border: none; border-bottom: 2px gray solid" type="text" value="{{ json_decode($application->form_data)->interview_tsass }}" name="interview_tsass" id="">
                                                <span><b>Step</b></span>
                                                <input style="border: none; border-bottom: 2px gray solid" type="text" value="{{ json_decode($application->form_data)->interview_step }}" name="interview_step" id="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Do you have strong reservation in the employment of the applicant as a staff of the Trumpet Sound Academy considering the vision, mission and working principles of the school?<span class="text-danger">*</span></label>
                                                Yes<input type="radio" name="strong_reservation" id="" value="yes"> 
                                                No<input type="radio" name="strong_reservation" id="" value="no" checked>
                                                {{-- @if (json_decode($application->form_data)->strong_reservation == "yes")
                                                    Yes<input type="radio" name="strong_reservation" id="" value="yes" checked> 
                                                    No<input type="radio" name="strong_reservation" id="" value="no">
                                                @endif
                                                @if (json_decode($application->form_data)->strong_reservation == "no")
                                                    Yes<input type="radio" name="strong_reservation" id="" value="yes"> 
                                                    No<input type="radio" name="strong_reservation" id="" value="no" checked>
                                                @endif
                                                @if (json_decode($application->form_data)->strong_reservation == null)
                                                    Yes<input type="radio" name="strong_reservation" id="" value="yes"> 
                                                    No<input type="radio" name="strong_reservation" id="" value="no">
                                                @endif --}}
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="col-md-12">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <td>Name</td>
                                                        <td>Signature</td>
                                                        <td>Date</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><input class="form-control" type="text" name="name_of_interviewer[]" id=""></td>
                                                        <td><input class="form-control" type="file" name="signature_of_interviewer[]" id=""></td>
                                                        <td><input class="form-control" type="text" name="date_of_interviewer[]" id=""></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <input class="btn btn-primary form-control" type="submit" value="Submit" id="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Meterial List Ends--}}

@endsection
