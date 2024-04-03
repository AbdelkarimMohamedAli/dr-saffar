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
                        <h4 class="card-title">Setting</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Setting.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">title_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">seo_keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="seo_keywords" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">seo_desc</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="seo_desc" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">phone1</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone1" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">phone2</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="phone2" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">whatsapp</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="whatsapp" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">email</label>
                                    <div class="col-sm-10">
                                        <input type="email" name="email" class="form-control form-control-sm">
                                    </div>
                                </div>
                                
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">logo</label>
                                    <div class="form-file">
                                        <input type="file" name="logo" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">open_hours_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="open_hours_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">open_hours</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="open_hours" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">location_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="location_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">location</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="location" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">subtitle_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="subtitle_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">subtitle</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="subtitle" class="form-control form-control-sm">
                                    </div>
                                </div>
                                
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">favicon</label>
                                    <div class="form-file">
                                        <input type="file" name="favicon" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_image</label>
                                    <div class="form-file">
                                        <input type="file" name="dr_image" class="form-file-input form-control">
                                    </div>
                                </div>
                                
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_name_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dr_name_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">dr_name</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="dr_name" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">instagram</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="instagram" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">twitter</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="twitter" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">facebook</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="facebook" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">linkedin</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="linkedin" class="form-control form-control-sm">
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