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
                        <h4 class="card-title">Service</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Service.update',$service->id) }}" method="POST"  enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            @csrf
                                 
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_img</label>
                                    <div class="form-file">
                                        <input type="file" value="{{ $service->services_img }}" name="services_img" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_icon</label>
                                    <div class="form-file">
                                        <input type="file" value="{{ $service->services_icon }}" name="services_icon" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_title_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_title_en }}" name="services_title_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_title</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_title }}" name="services_title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->slug }}" name="slug" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_desc_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_desc_en }}" name="services_desc_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_desc</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_desc }}" name="services_desc" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_subtitle_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_subtitle_en }}" name="services_subtitle_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_subtitle</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_subtitle }}" name="services_subtitle" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">services_seo_keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $service->services_seo_keywords }}" name="services_seo_keywords" class="form-control form-control-sm">
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                
                                <button type="submit" class="btn btn-primary">update</button>

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