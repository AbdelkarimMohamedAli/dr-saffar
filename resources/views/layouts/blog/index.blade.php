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
                        <h4 class="card-title">Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>blog_img</th>
                                        <th>blog_title_en</th>
                                        <th>blog_title</th>
                                        <th>slug</th>
                                        <th>blog_subtitle_en</th>
                                        <th>blog_subtitle</th>
                                        <th>blog_desc_en</th>
                                        <th>blog_desc</th>
                                        <th>blog_keywords</th>
                                        <th>blog_date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($blogs as $blog)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('Blog.edit', $blog->id) }}"  >edit</a>        

                                        </button>

                                        <form action="{{route('Blog.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $blog->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                            </td>
                                        </form>


                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$blog->blog_img) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>{{ $blog->blog_title_en }}</td>
                                            <td>{{ $blog->blog_title }}</td>
                                            <td>{{ $blog->slug }}</td>
                                            <td>{{ $blog->blog_subtitle_en }}</td>
                                            <td>{{ $blog->blog_subtitle }}</td>
                                            <td>{{ $blog->blog_desc_en }}</td>
                                            <td>{{ $blog->blog_desc }}</td>
                                            <td>{{ $blog->blog_keywords }}</td>
                                            <td>{{ $blog->blog_date }}</td>
                                        </tr>
                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $blogs->links() }}


		</div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins-init/datatables.init.js')}}"></script>

@endsection