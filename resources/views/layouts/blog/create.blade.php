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
                        <h4 class="card-title">Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Blog.store') }}" method="POST"  enctype="multipart/form-data">
                            @csrf
                                <div class="input-group custom_file_input mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_img</label>
                                    <div class="form-file">
                                        <input type="file" name="blog_img" class="form-file-input form-control">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_title_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_title_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_title</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">slug</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="slug" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_subtitle_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_subtitle_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_subtitle</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_subtitle" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_desc_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_desc_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_desc</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_desc" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">blog_keywords</label>
                                    <div class="col-sm-10">
                                        <input type="text" name="blog_keywords" class="form-control form-control-sm">
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