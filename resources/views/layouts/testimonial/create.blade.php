@extends('layouts.master')
@section('title')
    kripton
@endsection
@section('css')

@endsection


@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Testimonial</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Testimonial.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">img</label>
                                    <div class="form-file">
                                        <input type="file" name="img" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">comment</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="comment" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">comment_name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="comment_name" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">comment_from</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="comment_from" class="form-control form-control-sm">
                                    </div>
                                </div>
                        
                                <div class="mb-3 row">
                                
                                <button type="submit" class="btn btn-primary">submit</button>

                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection

@section('scripts')

@endsection