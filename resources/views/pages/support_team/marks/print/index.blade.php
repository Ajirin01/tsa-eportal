<html>
<head>
    <title>Student Marksheet - {{ $sr->user->name }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/my_print.css') }}" />
    <link href=" {{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <style>
		td{
			border: 1px solid black;
			border-collapse: collapse !important;
            font-size: .5rem
		}

        .header-table tr td{
            border: none
        }

        .trait{
            width: 30px;
            text-align: center
        }
	</style>
</head>
<body>
<div class="container">
    <div id="print" xmlns:margin-top="http://www.w3.org/1999/xhtml">
        {{--    Logo N School Details--}}
        <div class="col-md-12">
            <div class="col-md-12">
                <img border=0 width=65 height=67
                src="{{ asset('global_assets/report/Learning%20to%20Read%20form_files/image003.png') }}" v:shapes="Picture_x0020_1"><![endif]></span><span
                class=NoSpacingChar><b style='mso-bidi-font-weight:normal'><span
                style='font-size:38.0pt;font-family:"Times New Roman","serif";color:#44546A;
                mso-themecolor:text2'>TRUMPET SOUND ACADEMY MINNA<o:p></o:p></span></b></span></p>
            </div>
            <div class="col-md-12">
                <table class="header-table" style="width: 100%; border: none">
                    <tr align="center">
                        <td colspan="2"><span style="color: red; font-size: .8rem; text-align: center">#149, BOSSO LOW-COST, P.O. BOX, 2447, MINNA, NIGER STATE</span></td>
                        <td colspan="2"><span style="color: red; font-size: .8rem; text-align: center">WEBSITE: www.trumpetsoundacademy.org</span></td>
                        <td><span style="color: red; font-size: .8rem; text-align: center">E-MAIL- tsahqnigeria@yahoo.com</span></td>
                        <td><span style="color: red; font-size: .8rem; text-align: center">PHONE:  090-3344-9494.</span></td>
                    </tr>
                    <tr align="center">
                        <td colspan="6"><span class="text-center" style="color: green">PROGRESS REPORT SHEET</span></td>
                    </tr>
                    <tr>
                        <td><span style="font-size: .9rem;"><b style="color: blue">NAME:</b>	{{$sr->user->name}}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">ADM. NO.:</b>  {{ $sr->adm_no }}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">BIRTHDATE:</b>  {{$sr->user->dob}}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">STATE:</b>  {{App\Models\State::find($sr->state_id)}}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">SCHOOL YEAR:</b> {{$year}}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">TERM:</b> 
                            {{-- {{$ex->term}} --}}
                            @if ($ex->term == 1)
                            {{$ex->term}}st
                            @endif
                            @if ($ex->term == 2)
                            {{$ex->term}}nd
                            @endif
                            @if ($ex->term == 3)
                            {{$ex->term}}rd
                            @endif
                        </span></td>
                    </tr>
                    <tr>
                        <td><span style="font-size: .9rem;"><b style="color: blue">CLASS:</b> {{$my_class->name}}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">NO. IN CLASS:</b>	{{count(json_decode($all_class_students))}}</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">DAYS PRESENT:</b>	_</span></td>
                        <td><span style="font-size: .9rem;"><b style="color: blue">ABSENT:</b>	_</span></td>
                        <td colspan="2"><span style="font-size: .9rem;"><b style="color: blue"></b>SUPERVISOR:</b>	_</span></td>
                    </tr>
                </table>
                <!-- <div class="col-md-6 text-center" style="color: red; font-size: .7rem; text-align: center"><span>#149, BOSSO LOW-COST, P.O. BOX, 2447, MINNA, NIGER STATE</span></div>
                <div class="col-md-4"><span style="color: red; font-size: .7rem; text-align: center">WEBSITE: www.trumpetsoundacademy.org</span> </div>
                <div class="col-md-4"><span style="color: red; font-size: .7rem; text-align: center">E-MAIL- tsahqnigeria@yahoo.com</span></div>
                <div class="col-md-4"><span style="color: red; font-size: .7rem; text-align: center">tsahqnigeria@yahoo.comPHONE:  090-3344-9494.</span></div> -->
            </div>
        </div>
        <br/>

        {{--Background Logo--}}
        <div style="position: relative;  text-align: center; ">
            <img src="{{ asset('global_assets/report/Learning%20to%20Read%20form_files/image003.png') }}"
                 style="min-width: 400px; height: 500px; max-width: 500px; max-height:600px; margin-top: 60px; position:absolute ; opacity: 0.2; margin-left: auto;margin-right: auto; left: 0; right: 0;" />
        </div>

        {{--<!-- LOGO ENDS HERE-->--}}
        @include('pages.support_team.marks.print.'.$mark_type)
    </div>
</div>
<br><br>
@if(Qs::userIsTeamSAT())
    <div class="col-md-12">
        <table align="center" style="border: none; width: 100%">
            <tr>
                <td style="border: none; color: blue; font-size: .8rem">COLLECTOR’S NAME _________________________________________</td>
                <td style="border: none; color: blue; font-size: .8rem">SIGNATURE __________________________</td>
                <td style="border: none; color: blue; font-size: .8rem">DATE _______________</td>
                <td style="border: none; color: blue; font-size: .8rem" colspan="2">CLOSES ON _______________AND RE-OPENS ON ________________</td>
            </tr>
        </table>
    </div>
@endif
<br><br>
<div class="col-md-12">
    <h6 class="text-center">Printed on: {{ Carbon\Carbon::now() }}</h6>
</div>
<script>
    var css = '@page { size: landscape; }',
    head = document.head || document.getElementsByTagName('head')[0],
    style = document.createElement('style');

    style.type = 'text/css';
    style.media = 'print';

    if (style.styleSheet){
    style.styleSheet.cssText = css;
    } else {
    style.appendChild(document.createTextNode(css));
    }

    head.appendChild(style);
    window.print();
</script>
</body>

</html>
