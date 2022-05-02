@extends('layouts.master')
@section('page_title', 'Learning Materials')
@section('content')

    <div class="card">
        <div class="card-header header-elements-inline">
            <h6 class="card-title">My Child's Learning Materials</h6>
            {!! Qs::getPanelOptions() !!}
        </div>

        <div class="tab-content">
                <div class="tab-pane fade show active" id="all-meterials">
                    <table class="table datatable-button-html5-columns">
                        <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Title</th>
                            <th>Description</th>
                            {{-- <th>Meterial Type</th> --}}
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($materials as $material)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                
                                <td><a download="{{ $material->title}}" href="{{ url($material->material)}}">{{ $material->title }}</a></td>
                                <td>{{ $material->description }}</td>
                                {{-- <td>{{ $material->class_type->name }}</td> --}}
                                <td class="text-center">
                                <a download="{{ $material->title}}" href="{{ url($material->material)}}">Download</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
        </div>

@endsection