@extends('layouts.master')
@section('page_title', 'Edit Event - '.$gallery->title)
@section('content')

    <div gallery="card">
        <div gallery="card-header header-elements-inline">
            <h6 gallery="card-title">Edit Event</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div gallery="card-body">
            <div gallery="row">
                <div gallery="col-md-6">
                    <form gallery="ajax-update" data-reload="#page-header" method="post" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div gallery="form-group row">
                            <label gallery="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div gallery="col-lg-9">
                                <input name="title" value="{{ $gallery->title }}" required type="text" class="form-control" placeholder="Name of Event">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="d-block">Upload Event Photo:</label>
                            <input accept="image/*" type="file" name="photo[]" class="form-input-styled" data-fouc multiple>
                            <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                        </div>

                        <div class="form-group row">
                            <label class="d-block">Upload Event Description:</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $gallery->description }}</textarea>
                        </div>

                      {{--
                      <div gallery="form-group row">
                            <label for="teacher_id" gallery="col-lg-3 col-form-label font-weight-semibold">Teacher</label>
                            <div gallery="col-lg-9">
                                <select data-placeholder="Select Teacher" gallery="form-control select-search" name="teacher_id" id="teacher_id">
                                    <option value=""></option>
                                    @foreach($teachers as $t)
                                        <option {{ $gallery->teacher_id == $t->id ? 'selected' : '' }} value="{{ Qs::hash($t->id) }}">{{ $t->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                      --}}

                        {{-- <div gallery="form-group row">
                            <label for="class_type_id" gallery="col-lg-3 col-form-label font-weight-semibold">Event Type</label>
                            <div gallery="col-lg-9">
                                <input gallery="form-control" disabled="disabled" value="{{ json_encode($gallery->category()) }}" title="Event Type" type="text">
                            </div>
                        </div> --}}

                        <div gallery="text-right">
                            <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Event Edit Ends--}}

@endsection
