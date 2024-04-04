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
                        <h4 class="card-title">Menu</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('Menu.update',$menu->id) }}" method="POST"  enctype="multipart/form-data">
                            {{ method_field('patch') }}
                            @csrf
                                 
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">label</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $menu->label }}" name="label" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">ar_translate</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $menu->ar_translate }}" name="ar_translate" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">link</label>
                                    <div class="col-sm-10">
                                        <input type="text" value="{{ $menu->link }}" name="link" class="form-control form-control-sm">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <div class="mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">parent Menu</label>
                                        <select name="parent" class="default-select  form-control wide" >
                                            <option value="{{ $menu_name_parent_id }}">{{ $menu_name_parent }}</option>
                                            @foreach($menus as $menu)
                                            <option value="{{ $menu->id }}">
                                                {{ $menu->label }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>                                    
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-sm">sort</label>
                                    <div class="col-sm-10">
                                        <input type="number" value="{{ $menu->sort }}" name="sort" class="form-control form-control-sm">
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