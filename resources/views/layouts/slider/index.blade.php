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
                        <h4 class="card-title">Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>slider_image</th>
                                        <th>slider_content1_en</th>
                                        <th>slider_content2_en</th>
                                        <th>slider_content3_en</th>
                                        <th>slider_content1</th>
                                        <th>slider_content2</th>
                                        <th>slider_content3</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($sliders as $slider)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('Slider.edit', $slider->id) }}"  >edit</a>        

                                        </button>

                                        <form class="deleteForm" action="{{route('Slider.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $slider->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                            </td>
                                        </form>


                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$slider->slider_image) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>{{ $slider->slider_content1_en }}</td>
                                            <td>{{ $slider->slider_content2_en }}</td>
                                            <td>{{ $slider->slider_content3_en }}</td>
                                            <td>{{ $slider->slider_content1 }}</td>
                                            <td>{{ $slider->slider_content2 }}</td>
                                            <td>{{ $slider->slider_content3 }}</td>
                                                                                       
                                        </tr>

                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $sliders->links() }}


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