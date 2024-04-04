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
                        <h4 class="card-title">whychooseus</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Whychooseus.update',$whychooseus->id) }}" method="POST"  enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            @csrf
                                 
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_title_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->section_title_en }}" name="section_title_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_title</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->section_title }}" name="section_title" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_sub_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->section_sub_en }}" name="section_sub_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_sub</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->section_sub }}" name="section_sub" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_desc_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->section_desc_en }}" name="section_desc_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">section_desc</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->section_desc }}" name="section_desc" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_1_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_1_en }}" name="box_title_1_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_1</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_1 }}" name="box_title_1" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_2_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_2_en }}" name="box_title_2_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_2</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_2 }}" name="box_title_2" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_3_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_3_en }}" name="box_title_3_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_3</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_3 }}" name="box_title_3" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_4_en</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_4_en }}" name="box_title_4_en" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_title_4</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_title_4 }}" name="box_title_4" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_counter_1</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_counter_1 }}" name="box_counter_1" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_counter_2</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_counter_2 }}" name="box_counter_2" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_counter_3</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_counter_3 }}" name="box_counter_3" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">box_counter_4</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $whychooseus->box_counter_4 }}" name="box_counter_4" class="form-control form-control-sm">
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