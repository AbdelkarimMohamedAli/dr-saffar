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
                        <h4 class="card-title">Service</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>services_img</th>
                                        <th>services_icon</th>
                                        <th>services_title_en</th>
                                        <th>services_title</th>
                                        <th>slug</th>
                                        <th>services_desc_en</th>
                                        <th>services_desc</th>
                                        <th>services_subtitle_en</th>
                                        <th>services_subtitle</th>
                                        <th>services_seo_keywords</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($services as $service)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('Service.edit', $service->id) }}"  >edit</a>        

                                        </button>

                                        <form action="{{route('Service.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $service->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                            </td>
                                        </form>


                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$service->services_img) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$service->services_icon) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>{{ $service->services_title_en }}</td>
                                            <td>{{ $service->services_title }}</td>
                                            <td>{{ $service->slug }}</td>
                                            <td>{{ $service->services_desc_en }}</td>
                                            <td>{{ $service->services_desc }}</td>
                                            <td>{{ $service->services_subtitle_en }}</td>
                                            <td>{{ $service->services_subtitle }}</td>
                                            <td>{{ $service->services_seo_keywords }}</td>
                                        </tr>
                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $services->links() }}


		</div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins-init/datatables.init.js')}}"></script>

@endsection