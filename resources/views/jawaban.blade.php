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
                <div class="card bg-light">
                <div class="card-body">
                    <h3>{{$pertanyaan[0]->judul}}</h3>
                    <h5>{{$pertanyaan[0]->isi}}</h5>
                    </div>
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Answer</th>
                            <th colspan="3">Reaction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $kosong=true;?>
                        @foreach ($jawaban as $value)
                            <tr>
                                <td>{{$value->isi}}</td>
                                <td><a href="#"><i class="fas fa-heart"></i></a></td>
                                <td><a href="#"><i class="fas fa-thumbs-up"></i></a></td>
                                <td><a href="#"><i class="fas fa-thumbs-down"></i></a></td>
                            </tr>
                            <?php $kosong=false;?>
                        @endforeach
                        @if ($kosong===true)
                            <tr><td colspan="2">There is no answer</td></tr>
                        @endif
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Answer</th>
                        <th colspan="3">Reaction</th>
                      </tr>
                      </tfoot>
                </table>

                </div>
                <div class="card-body">
                  <h6 class="pt-1">Have another answer? Please answer here!</h6>
                  <form action="/jawaban/{{$pertanyaan[0]->id}}" method="POST">
                      @csrf
                      <div class="form-group">
                          <textarea style="width:50%" name="isi"></textarea>
                      </div>
                      <button type="submit" class="btn btn-info btn-sm"><i class="fas fa-paper-plane"></i> Send an answer</button>
                  </form>
                </div>
                
                <!-- /.card-body -->
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

    @push('pertanyaan')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
    <script>
      $(function () {
        $("#example1").DataTable();
      });
    </script>
    @endpush