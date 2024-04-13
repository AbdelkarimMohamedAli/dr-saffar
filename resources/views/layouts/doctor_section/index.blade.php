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
                        <h4 class="card-title">DoctorSection</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>actions</th>
                                        <th>id</th>
                                        <th>section_vector_img</th>
                                        <th>section_dr_img</th>
                                        <th>section_title_en</th>
                                        <th>section_title</th>
                                        <th>section_sub_en</th>
                                        <th>section_sub</th>
                                        <th>section_desc_en</th>
                                        <th>section_desc</th>
                                        <th>dr_name_en</th>
                                        <th>dr_name</th>
                                        <th>dr_medical_title_en</th>
                                        <th>dr_medical_title</th>
                                        <th>Qualification_en</th>
                                        <th>Qualification</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @php
                                $i = 0;
                                @endphp
                                    @foreach($doctor_sections as $doctor_section)
                                    @php
                                    $i++
                                    @endphp
                                        <tr>
                                            <td>
                                           
                                        <button type="submit" class="btn btn-danger">
                                        <a class="dropdown-item"href="{{ route('DoctorSection.edit', $doctor_section->id) }}"  >edit</a>        

                                        </button>

                                        <form class="deleteForm" action="{{route('DoctorSection.destroy','test')}}" method="post">
                                                    {{method_field('Delete')}}
                                                    @csrf
                                                    <input id="id" type="hidden" name="id" class="form-control"
                                                           value="{{ $doctor_section->id }}">
                                                    <button type="submit" class="btn btn-danger">delete</button>
                                            </td>
                                        </form>


                                            <td>{{ $i }}</td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$doctor_section->section_vector_img) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>
                                                <img src="{{ asset('assets/imgs/'.$doctor_section->section_dr_img) }}" height="40px;" width="40px;" alt="">
                                            </td>
                                            <td>{{ $doctor_section->section_title_en }}</td>
                                            <td>{{ $doctor_section->section_title }}</td>
                                            <td>{{ $doctor_section->section_sub_en }}</td>
                                            <td>{{ $doctor_section->section_sub }}</td>
                                            <td>{{ $doctor_section->section_desc_en }}</td>
                                            <td>{{ $doctor_section->section_desc }}</td>
                                            <td>{{ $doctor_section->dr_name_en }}</td>
                                            <td>{{ $doctor_section->dr_name }}</td>
                                            <td>{{ $doctor_section->dr_medical_title_en }}</td>
                                            <td>{{ $doctor_section->dr_medical_title }}</td>
                                            <td>{{ $doctor_section->Qualification_en }}</td>
                                            <td>{{ $doctor_section->Qualification }}</td>
                                        </tr>
                                        

                                    @endforeach                                           
                                </tbody>
                               
                            </table>
                        </div>
                    </div>
                </div>
            </div>
                    
			{{ $doctor_sections->links() }}


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