@extends('layouts.master')

@section('title', 'Larahub | Update Question')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <a href="{{ url('/pertanyaan') }}" class="btn btn-success btn-sm float-right"><i class="fas fa-arrow-circle-left"></i> Back</a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="card-body">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-body">
                    <div class="card card-primary">
                        <div class="card-header">
                          <h3 class="card-title">Form Update</h3>
                        </div>
                        <div class="card-body">
                          <!-- Date range -->
                          <form action="/pertanyaan/{{ $value->id }}" method="POST">
                            {{ csrf_field() }}
                            @method('PUT')
                            <div class="form-group">
                              <h3>Please update your question!</h3>
                              <label for="judul">Question title:</label>
                              <input type="text" class="form-control" name="judul" id="judul" value="{{ $value->judul }}">
                          </div>
                          <div class="form-group">
                              <label for="isi">Fill out the question:</label><br/>
                                <textarea style="width:600px; height:100px" class="ckeditor" id="isi" name="isi">{{ $value->isi }}</textarea>
                          </div> 
                          <div class="form-group">
                            <label for="tgl_dibuat">Date Created:</label>
                            <input type="date" class="form-control" name="tgl_dibuat" id="tgl_dibuat" value="{{ $value->tgl_dibuat }}">
                        </div>
                        <div class="form-group">
                          <label for="tgl_diperbaharui">Date Updated:</label>
                          <input type="date" class="form-control" name="tgl_diperbaharui" id="tgl_diperbaharui" value="{{ $value->tgl_diperbaharui }}">
                      </div>         
                          <div>
                            <button type="submit" class="btn btn-primary"><i class="fas fa-paper-plane"></i> Send</button>
                          </div>
                        </form>
                        <!-- /.card-body -->
                      </div>
                <!-- /.card-body -->
              </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <b><i class="fas fa-code"></i> SanberCode Challenge</b>
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
  
    @endsection