<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="CJ Inspired">

    <title> @yield('page_title') | {{ config('app.name') }} </title>

    @include('partials.inc_top')
    <style>
		td{
			border: 1px solid black;
			border-collapse: collapse !important;
		}
        .trait{
            width: 30px;
            text-align: center
        }
	</style>
</head>

<body class="{{ in_array(Route::currentRouteName(), ['payments.invoice', 'marks.tabulation', 'marks.show', 'ttr.manage', 'ttr.show']) ? 'sidebar-xs' : '' }}">

@include('partials.top_menu')
<div class="page-content">
    @include('partials.menu')
    <div class="content-wrapper">
        @include('partials.header')

        <div class="content">
            {{--Error Alert Area--}}
            @if($errors->any())
                <div class="alert alert-danger border-0 alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                        @foreach($errors->all() as $er)
                            <span><i class="icon-arrow-right5"></i> {{ $er }}</span> <br>
                        @endforeach

                </div>
            @endif
            <div id="ajax-alert" style="display: none"></div>

            @yield('content')
        </div>


    </div>
</div>

@include('partials.inc_bottom')
@yield('scripts')

<script>
    var state = 0;
    function toggleMarks(id, code){
        // console.log(code)
        if(code == 'RB_CLASS' || code == 'sbs1' || code == 'sbs2'){
            if(state == 1){
                $("#maintoggle"+id).css('display','none')
                $("#traittoggle"+id).css('display','none')
                $("#lowertoggle"+id).css('display','none')
                state = 0
                console.log(state)

            }else if(state == 0){
                $("#maintoggle"+id).css('display','block')
                $("#traittoggle"+id).css('display','block')
                $("#lowertoggle"+id).css('display','block')
                state = 1
                console.log(state)

            }
        }
        
    }
</script>
</body>
</html>
