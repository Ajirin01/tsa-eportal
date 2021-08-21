@extends('layouts.master')
@section('page_title', 'Edit Event - '.$event->title)
@section('content')

    <div event="card">
        <div event="card-header header-elements-inline">
            <h6 event="card-title">Edit Event</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div event="card-body">
            <div event="row">
                <div event="col-md-6">
                    <form event="ajax-update" data-reload="#page-header" method="post" action="{{ route('event.update', $event->id) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Status<span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <select name="state" id="" class="form-control">
                                    <option value="">Please Select Status of Event</option>
                                    <option value="upcoming">Upcoming Event</option>
                                    <option value="archival">Archival Event</option>
                                    {{-- @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                                    @endforeach --}}
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Title <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="title" value="{{ $event->title }}" required type="text" class="form-control" placeholder="Title of Event">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="d-block">Upload Event Photo:</label>
                            <input accept="image/*" type="file" name="photo[]" class="form-input-styled" data-fouc multiple>
                            <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                        </div>

                        <div class="form-group row">
                            <label class="d-block">Upload Event Description:</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $event->description }}</textarea>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Date <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="date" value="{{ $event->date }}" required type="date" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Location <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="location" value="{{ $event->location }}" required type="text" class="form-control">
                            </div>
                        </div>

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
