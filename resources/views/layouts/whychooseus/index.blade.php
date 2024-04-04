@extends('layouts.master')
@section('title')
    kripton
@endsection
    <!-- Datatable -->
    <!-- Custom Stylesheet -->
<link href="{{asset('assets/vendor/datatables/css/jquery.dataTables.min.css')}}" rel="stylesheet">

<link href="{{asset('assets/vendor/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet">

@section('css')

@endsection


@section('content')
<div class="row">
    <div class="content-body">
        <div class="container-fluid">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">whychooseus</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>section_title_en</th>
                                        <th>section_title</th>
                                        <th>section_sub_en</th>
                                        <th>section_sub</th>
                                        <th>section_desc_en</th>
                                        <th>section_desc</th>
                                        <th>box_title_1_en</th>
                                        <th>box_title_2_en</th>
                                        <th>box_title_3_en</th>
                                        <th>box_title_4_en</th>
                                        <th>box_title_1</th>
                                        <th>box_title_2</th>
                                        <th>box_title_3</th>
                                        <th>box_title_4</th>
                                        <th>box_counter_1</th>
                                        <th>box_counter_2</th>
                                        <th>box_counter_3</th>
                                        <th>box_counter_4</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($whychooseuss as $whychooseus)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('Whychooseus.edit', $whychooseus->id) }}"  >edit</a>        

                                        </button>
                                        
                                        <form action="{{route('Whychooseus.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $whychooseus->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                            </td>
                                        </form>


                                            <td>{{ $i }}</td>
                                            <td>{{ $whychooseus->section_title_en }}</td>
                                            <td>{{ $whychooseus->section_title }}</td>
                                            <td>{{ $whychooseus->section_sub_en }}</td>
                                            <td>{{ $whychooseus->section_sub }}</td>
                                            <td>{{ $whychooseus->section_desc_en }}</td>
                                            <td>{{ $whychooseus->section_desc }}</td>
                                            <td>{{ $whychooseus->box_title_1_en }}</td>
                                            <td>{{ $whychooseus->box_title_2_en }}</td>
                                            <td>{{ $whychooseus->box_title_3_en }}</td>
                                            <td>{{ $whychooseus->box_title_4_en }}</td>
                                            <td>{{ $whychooseus->box_title_1 }}</td>
                                            <td>{{ $whychooseus->box_title_2 }}</td>
                                            <td>{{ $whychooseus->box_title_3 }}</td>
                                            <td>{{ $whychooseus->box_title_4 }}</td>
                                            <td>{{ $whychooseus->box_counter_1 }}</td>
                                            <td>{{ $whychooseus->box_counter_2 }}</td>
                                            <td>{{ $whychooseus->box_counter_3 }}</td>
                                            <td>{{ $whychooseus->box_counter_4 }}</td>


                                                                                       
                                        </tr>

                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $whychooseuss->links() }}


		</div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins-init/datatables.init.js')}}"></script>

@endsection