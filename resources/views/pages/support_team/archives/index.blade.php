@extends('layouts.master')
@section('page_title', 'Manage Archive')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Archive</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-archives" class="nav-link active" data-toggle="tab">Manage Archive</a></li>
                <li class="nav-item"><a href="#new-class" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Create New Archive</a></li>
            </ul>

            <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-archives">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Title</th>
                                {{-- <th>Archive Type</th> --}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($archives as $archive)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $archive->title }}</td>
                                    {{-- <td>{{ $archive->class_type->name }}</td> --}}
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    @if(Qs::userIsTeamSA())
                                                    {{--Edit--}}
                                                    <a href="{{ route('archives.edit', $archive->id) }}" class="dropdown-item"><i class="icon-pencil"></i> Edit</a>
                                                   @endif
                                                        @if(Qs::userIsSuperAdmin())
                                                    {{--Delete--}}
                                                    <a id="{{ $archive->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ $archive->id }}" action="{{ route('archives.destroy', $archive->id) }}" class="hidden">@csrf @method('delete')</form>
                                                        @endif

                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                <div class="tab-pane fade" id="new-class">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-info border-0 alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>

                                <span>When a current affair is created, a Section will be automatically created for the Archive, you can edit it or add more sections to the class at <a target="_blank" href="{{ route('sections.index') }}">Manage Sections</a></span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <form class="ajax-store" method="post" action="{{ route('archives.store') }}" enctype="multipart/form-data">
                            {{-- <form method="post" action="{{ route('archives.store') }}" enctype="multipart/form-data"> --}}
                                @csrf
                                <div class="form-group row">
                                    <label class="col-lg-3 col-form-label font-weight-semibold">Name <span class="text-danger">*</span></label>
                                    <div class="col-lg-9">
                                        <input name="title" value="{{ old('title') }}" required type="text" class="form-control" placeholder="Name of Archive">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label class="d-block">Archive Description:</label>
                                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ old('description') }}</textarea>
                                </div>

                                {{-- <div class="form-group row">
                                    <label for="class_type_id" class="col-lg-3 col-form-label font-weight-semibold">Archive Type</label>
                                    <div class="col-lg-9">
                                        <select required data-placeholder="Select Archive Type" class="form-control select" name="class_type_id" id="class_type_id">
                                            @foreach($class_types as $ct)
                                                <option {{ old('class_type_id') == $ct->id ? 'selected' : '' }} value="{{ $ct->id }}">{{ $ct->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> --}}

                                <div class="text-right">
                                    <button id="ajax-btn" type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
                                    {{-- <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button> --}}
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Archive List Ends--}}

@endsection
