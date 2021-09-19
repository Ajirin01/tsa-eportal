@extends('layouts.master')
@section('page_title', 'Edit Class - '.$archive->category)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Class</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-update" data-reload="#page-header" method="post" action="{{ route('archives.update', $archive->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="title" value="{{ $archive->title }}" required type="text" class="form-control" placeholder="Name of Class">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="d-block">Upload Event Description:</label>
                            <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $archive->description }}</textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Class Edit Ends--}}

@endsection
