@extends('layouts.master')
@section('page_title', 'Edit Current Affair - '.$current_affair->category)
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Edit Current Affair</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form class="ajax-update" data-reload="#page-header" method="post" action="{{ route('current-affairs.update', $current_affair->id) }}">
                        @csrf @method('PUT')
                        <div class="form-group row">
                            <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                            <div class="col-lg-9">
                                <input name="title" value="{{ $current_affair->title }}" required type="text" class="form-control" placeholder="Name of Current Affair">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="d-block">Upload Event Description:</label>
                            <textarea class="form-control" name="_description" id="" cols="30" rows="10">{{ $current_affair->description }}</textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Current Affair Edit Ends--}}

@endsection
