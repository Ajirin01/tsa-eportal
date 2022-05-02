@extends('layouts.master')
@section('page_title', 'Manage Applications')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">Manage Applications</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="card-body">
            <ul class="nav nav-tabs nav-tabs-highlight">
                <li class="nav-item"><a href="#all-meterials" class="nav-link active" data-toggle="tab">Manage Applications</a></li>
                <!-- <li class="nav-item"><a href="#new-class" class="nav-link" data-toggle="tab"><i class="icon-plus2"></i> Create New Meterial</a></li> -->
            </ul>

            <div class="tab-content">
                    <div class="tab-pane fade show active" id="all-meterials">
                        <table class="table datatable-button-html5-columns">
                            <thead>
                            <tr>
                                <th>S/N</th>
                                <th>Name</th>
                                <th>Post</th>
                                <th>Status</th>
                                {{-- <th>Meterial Type</th> --}}
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($applications as $application)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    
                                    {{-- <td><a download="{{ $application->title}}" href="{{ url($application->application)}}">{{ $application->title }}</a></td> --}}
                                    <td>{{ $application->applicant_name }}</td>
                                    <td>{{ $application->post_applying_for }}</td>
                                    <td>{{ $application->status }}</td>
                                    <td class="text-center">
                                        <div class="list-icons">
                                            <div class="dropdown">
                                                <a href="#" class="list-icons-item" data-toggle="dropdown">
                                                    <i class="icon-menu9"></i>
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-left">
                                                    @if(Qs::userIsTeamSAT())
                                                    {{--Edit--}}
                                                    <a href="{{ route('applications.show', $application->id) }}" class="dropdown-item"><i class="icon-pencil"></i> View</a>
                                                   @endif
                                                    @if(Qs::userIsSuperAdmin())
                                                    {{--Delete--}}
                                                    <a id="{{ $application->id }}" onclick="confirmDelete(this.id)" href="#" class="dropdown-item"><i class="icon-trash"></i> Delete</a>
                                                    <form method="post" id="item-delete-{{ $application->id }}" action="{{ route('applications.destroy', $application->id) }}" class="hidden">@csrf @method('delete')</form>
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
            </div>
        </div>
    </div>

    {{--Meterial List Ends--}}

@endsection
