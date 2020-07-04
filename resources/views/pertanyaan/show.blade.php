@extends('layouts.master')

@section('title', 'Larahub | Answer')

@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Answer Data</h1>
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
            <div class="card">
                <!-- /.card-header -->
                
                <div class="card-body">
                  <table class="table table-bordered">
                        <tbody>
                          <tr>
                            <th> Judul </th>
                            <td>
                              <div>
                                {{ $value->judul }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Isi </th>
                            <td>
                              <div>
                                {{ $value->isi }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Tanggal Dibuat </th>
                            <td>
                              <div>
                                {{ $value->tgl_dibuat }}
                              </div>
                            </td>
                          </tr>
                          <tr>
                            <th> Tanggal Diperbaharui</th>
                            <td>
                              <div>
                                {{ $value->tgl_diperbaharui }}
                              </div>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                      <div class="card pt-2">
                        <a href="/jawaban/{{$value->id}}" class="btn btn-info"><i class="fas fa-lightbulb"></i> View full question</a>
                      </div>

                </div>

                </div>
                
                <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="card-footer">
          <b><i class="fas fa-code"></i> SanberCode Challenge</b>
        </div>
        <!-- /.card-footer-->
      <!-- /.card -->

    </section>
  
    @endsection

    @push('pertanyaan')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
      });
    </script>
    @endpush