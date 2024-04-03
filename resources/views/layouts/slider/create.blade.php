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
                        <h4 class="card-title">slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Slider.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_image</label>
                                    <div class="form-file">
                                        <input type="file" name="slider_image" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_content1_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slider_content1_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_content1</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slider_content1" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_content2_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slider_content2_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_content2</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slider_content2" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_content3_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slider_content3_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slider_content3</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slider_content3" class="form-control form-control-sm">
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