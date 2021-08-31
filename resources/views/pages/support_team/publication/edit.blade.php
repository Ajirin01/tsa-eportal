@extends('layouts.master')
@section('page_title', 'Edit Publication - '.$publication->title)
@section('content')

    <div publication="card">
        <div publication="card-header header-elements-inline">
            <h6 publication="card-title">Edit Publication</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div publication="card-body">
            <div publication="row">
                <div publication="col-md-6">
                    <form publication="ajax-update" data-reload="#page-header" method="post" action="{{ route('publication.update', $publication->id) }}" enctype="multipart/form-data">
                        @csrf @method('PUT')
                        <div publication="form-group row">
                            <label publication="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div publication="col-lg-9">
                                <input name="title" value="{{ $publication->title }}" required type="text" class="form-control" placeholder="Name of Publication">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="d-block">Upload Publication Photo:</label>
                            <input accept="image/*" type="file" name="photo" class="form-input-styled" data-fouc>
                            <span class="form-text text-muted">Accepted Images: jpeg, png. Max file size 2Mb</span>
                        </div>

                        <div class="form-group row">
                            <label class="d-block">Upload Publication Description:</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $publication->description }}</textarea>
                        </div>

                      {{--
                      <div publication="form-group row">
                            <label for="teacher_id" publication="col-lg-3 col-form-label font-weight-semibold">Teacher</label>
                            <div publication="col-lg-9">
                                <select data-placeholder="Select Teacher" publication="form-control select-search" name="teacher_id" id="teacher_id">
                                    <option value=""></option>
                                    @foreach($teachers as $t)
                                        <option {{ $publication->teacher_id == $t->id ? 'selected' : '' }} value="{{ Qs::hash($t->id) }}">{{ $t->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                      --}}

                        {{-- <div publication="form-group row">
                            <label for="class_type_id" publication="col-lg-3 col-form-label font-weight-semibold">Publication Type</label>
                            <div publication="col-lg-9">
                                <input publication="form-control" disabled="disabled" value="{{ json_encode($publication->category()) }}" title="Publication Type" type="text">
                            </div>
                        </div> --}}

                        <div publication="text-right">
                            <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Publication Edit Ends--}}

@endsection
