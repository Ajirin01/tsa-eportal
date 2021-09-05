@extends('layouts.master')
@section('page_title', 'Student Marksheet')
@section('content')

    <div class="card">
        <div class="card-header text-center">
            <h1> {{$mark_type}} </h1>
            <h4 class="card-title font-weight-bold">Student Marksheet for =>  {{ $sr->user->name.' ('.$my_class->name.' '.$my_class->section->first()->name.')' }} </h4>
        </div>
    </div>

 {{-- @include('pages.support_team.marks.show.'.$mark_type) --}}
 @include('pages.support_team.marks.show.nursery')


    {{--Marks Index --}}

@endsection