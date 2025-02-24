@inject('AcctAccount','App\Http\Controllers\AcctAccountController')
@extends('adminlte::page')

@section('title', 'MOZAIC Point of Sales')

@section('content_header')
    
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ url('home') }}">Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{ url('acct-Account') }}">Daftar Perkiraan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Perkiraan</li>
    </ol>
  </nav>

@stop

@section('content')

<h3 class="page-title">
    Form Tambah Perkiraan
</h3>
<br/>
@if(session('msg'))
<div class="alert alert-info" role="alert">
    {{session('msg')}}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger" role="alert">
    @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
    @endforeach
</div>
@endif
    <div class="card border border-dark">
    <div class="card-header border-dark bg-dark">
        <h5 class="mb-0 float-left">
            Form Tambah
        </h5>
        <div class="float-right">
            <button onclick="location.href='{{ url('acct-Account') }}'" name="Find" class="btn btn-sm btn-info" title="Back"><i class="fa fa-angle-left"></i>  Kembali</button>
        </div>
    </div>

    <?php 
            // if (empty($coresection)){
            //     $coresection['section_name'] = '';
            // }
        ?>

    <form method="post" action="{{ route('process-edit-acct-Account') }}" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
            <div class="row form-group">
                <div class="col-md-6">
                    <div class="form-group">
                        <a class="text-dark">Nomor Perkiraan<a class='red'> *</a></a>
                        <input class="form-control input-bb" name="Account_code" id="Account_code" type="text" autocomplete="off" value="{{ $data['Account_code'] }}"/>
                        <input class="form-control input-bb" name="Account_id" id="Account_id" type="text" autocomplete="off" value="{{ $data['Account_id'] }}" hidden/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a class="text-dark">Nama Perkiraan<a class='red'> *</a></a>
                        <input class="form-control input-bb" name="Account_name" id="Account_name" type="text" autocomplete="off" value="{{ $data['Account_name'] }}"/>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a class="text-dark">Golongan Perkiraan<a class='red'> *</a></a>
                        <input class="form-control input-bb" name="Account_group" id="Account_group" type="text" autocomplete="off" value="{{ $data['Account_group'] }}"/>
                    </div>
                </div>
                <div class="col-md-6 mt-4">
                    <div class="form-group">
                        {!! Form::select(0, $status, $data['Account_status'],['class' => 'selection-search-clear select-form','name'=>'Account_status','id'=>'Account_status']) !!} 
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <a class="text-dark">Kelompok Perkiraan<a class='red'> *</a></a>
                        {!! Form::select(0, $Account_type, $data['Account_type_id'],['class' => 'selection-search-clear select-form','name'=>'Account_type_id','id'=>'Account_type_id']) !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <div class="form-actions float-right">
                <button type="reset" name="Reset" class="btn btn-danger" onclick="window.location.reload();"><i class="fa fa-times"></i> Batal</button>
                <button type="submit" name="Save" class="btn btn-primary" title="Save"><i class="fa fa-check"></i> Simpan</button>
            </div>
        </div>
    </div>
    </div>
</form>

@stop

@section('footer')
    
@stop

@section('css')
    
@stop