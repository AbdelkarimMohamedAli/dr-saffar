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
                                        <button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#delete{{ $blog->id }}">deletee</button>

                                        

                                        <form class="deleteForm" action="{{route('Blog.destroy','test')}}" method="post">
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
                                        
                                <!-- <div class="modal fade" id="delete{{ $blog->id }}" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                    id="exampleModalLabel">
                                                    are you delete
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('Blog.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    Warning_Blog
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $blog->id }}">
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                                class="btn btn-danger">submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
                                <div class="modal fade" id="delete{{ $blog->id }}">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modal title</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal">
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="{{route('Blog.destroy','test')}}" method="post">
                                                        {{method_field('Delete')}}
                                                        @csrf
                                                        Warning_Blog
                                                        <input id="id" type="hidden" name="id" class="form-control"
                                                            value="{{ $blog->id }}">
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary"
                                                                    data-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                    class="btn btn-danger">submit</button>
                                                        </div>
                                                    </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-danger light" >Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    document.querySelectorAll(".deleteForm").forEach(form => {
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission
            
            const swalWithBootstrapButtons = Swal.mixin({
                customClass: {
                    confirmButton: "btn btn-success",
                    cancelButton: "btn btn-danger"
                },
                buttonsStyling: false
            });

            swalWithBootstrapButtons.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "No, cancel!",
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    // If confirmed, submit the form
                    form.submit();
                } else {
                    swalWithBootstrapButtons.fire({
                        title: "Cancelled",
                        text: "Your setting is safe :)",
                        icon: "error"
                    });
                }
            });
        });
    });
</script>
<script src="{{ URL::asset('assets/vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ URL::asset('assets/js/plugins-init/datatables.init.js')}}"></script>

@endsection