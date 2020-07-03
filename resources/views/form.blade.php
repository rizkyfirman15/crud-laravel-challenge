@extends('layouts.master')

@section('title', 'Larahub | Add Question')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Question</h1>
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
                          <h3 class="card-title">Form Add</h3>
                        </div>
                        <div class="card-body">
                          <!-- Date range -->
                          <form action="{{ url('/pertanyaan') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                              <h3>Please Ask a Question!</h3>
                              <label for="judul">Question title:</label>
                              <input type="text" class="form-control" name="judul" id="judul">
                          </div>
                          <div class="form-group">
                              <label for="isi">Fill out the question:</label><br/>
                              <textarea style="width:100%" name="isi"></textarea>
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