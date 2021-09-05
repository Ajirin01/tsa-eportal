@extends('layouts.master')
@section('page_title', 'Edit Event - '.$application->title)
@section('content')

    <div event="card">
        <div event="card-header header-elements-inline">
            <h6 event="card-title">Edit Event</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div event="card-body">
            <div event="row">
                <div event="col-md-6">
                    <form event="ajax-update" data-reload="#page-header" method="post" action="{{ route('applications.update', $application->id) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div event="form-group row">
                            <label event="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div event="col-lg-9">
                                <input name="title" value="{{ $application->title }}" required type="text" class="form-control" placeholder="Name of Event">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="d-block">Upload Event Photo:</label>
                            <input accept="image/*" type="file" name="pdf" class="form-input-styled" data-fouc multiple>
                            <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                        </div>

                        <div class="form-group row">
                            <label class="d-block">Upload Event Description:</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $application->description }}</textarea>
                        </div>

                      {{--
                      <div event="form-group row">
                            <label for="teacher_id" event="col-lg-3 col-form-label font-weight-semibold">Teacher</label>
                            <div event="col-lg-9">
                                <select data-placeholder="Select Teacher" event="form-control select-search" name="teacher_id" id="teacher_id">
                                    <option value=""></option>
                                    @foreach($teachers as $t)
                                        <option {{ $application->teacher_id == $t->id ? 'selected' : '' }} value="{{ Qs::hash($t->id) }}">{{ $t->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                      --}}

                        {{-- <div event="form-group row">
                            <label for="class_type_id" event="col-lg-3 col-form-label font-weight-semibold">Event Type</label>
                            <div event="col-lg-9">
                                <input event="form-control" disabled="disabled" value="{{ json_encode($application->category()) }}" title="Event Type" type="text">
                            </div>
                        </div> --}}

                        <div event="text-right">
                            <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Event Edit Ends--}}

@endsection
