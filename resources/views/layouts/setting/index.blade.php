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
        
            <div class="col-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Setting</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>title_en</th>
                                        <th>title</th>
                                        <th>seo_keywords</th>
                                        <th>seo_desc</th>
                                        <th>phone1</th>
                                        <th>phone2</th>
                                        <th>whatsapp</th>
                                        <th>email</th>
                                        <th>logo</th>
                                        <th>open_hours_en</th>
                                        <th>open_hours</th>
                                        <th>location_en</th>
                                        <th>location</th>
                                        <th>subtitle_en</th>
                                        <th>subtitle</th>
                                        <th>favicon</th>
                                        <th>dr_image</th>
                                        <th>dr_name_en</th>
                                        <th>dr_name</th>
                                        <th>instagram</th>
                                        <th>twitter</th>
                                        <th>facebook</th>
                                        <th>linkedin</th>                                     
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($settings as $setting)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('Setting.edit', $setting->id) }}"  >edit</a>        

                                        </button>

                                        <!-- <form class="deleteForm" action="{{route('Setting.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $setting->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                        </form> -->

                                            </td>
                                            <td>{{ $i }}</td>
                                            <td>{{ $setting->title_en }}</td>
                                            <td>{{ $setting->title }}</td>
                                            <td>{{ $setting->seo_keywords }}</td>
                                            <td>{{ $setting->seo_desc }}</td>
                                            <td>{{ $setting->phone1 }}</td>
                                            <td>{{ $setting->phone2 }}</td>
                                            <td>{{ $setting->whatsapp }}</td>
                                            <td>{{ $setting->email }}</td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$setting->logo) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>{{ $setting->open_hours_en }}</td>
                                            <td>{{ $setting->open_hours }}</td>
                                            <td>{{ $setting->location_en }}</td>
                                            <td>{{ $setting->location }}</td>
                                            <td>{{ $setting->subtitle_en }}</td>
                                            <td>{{ $setting->subtitle }}</td>
                                            <td>
                                            <img src="{{ asset('assets/imgs/'.$setting->favicon) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>
                                            <img src="{{ asset('assets/imgs/'.$setting->dr_image) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>{{ $setting->dr_name_en }}</td>
                                            <td>{{ $setting->dr_name }}</td>
                                            <td>{{ $setting->instagram }}</td>
                                            <td>{{ $setting->twitter }}</td>
                                            <td>{{ $setting->facebook }}</td>
                                            <td>{{ $setting->linkedin }}</td>
                                           
                                        </tr>

                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $settings->links() }}


		</div>
    </div>
</div>
@endsection

@section('scripts')



<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins-init/datatables.init.js')}}"></script>

@endsection

