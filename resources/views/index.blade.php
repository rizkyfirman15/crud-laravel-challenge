@extends('layouts.master')

@section('title', 'Larahub | Question')
    
@section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Question Data</h1>  
          </div>
          <div class="col-sm-6">
        
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
                    <div class="card">
                        <div class="card-header">
                            <a href="/pertanyaan/create" role="button" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> Asking Question</a>
                        </div>
                        <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th style="width: 30%">Question Title</th>
                                    <th style="width: 50%">Fill out the Question</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $kosong=true;?>
                                @foreach ($pertanyaan as $value)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$value->judul}}</td>
                                        <td>
                                          {{$value->isi}}
                                          <a href="/jawaban/{{$value->id}}" class="btn btn-secondary btn-sm"><i class="fas fa-comments"></i> comment</a>
                                        </td>
                                        <td>
                                          <a href="/pertanyaan/{{ $value->id }}" class="btn btn-info btn-sm"><i class="fas fa-eye"></i></a>
                                            <a href="/pertanyaan/{{ $value->id }}/edit" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a>
                                            <form action="/pertanyaan/{{ $value->id }}" method="POST" style="display: inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>

                                        {{-- <td><a href="/jawaban/{{$value->id}}">
                                        <td><a href="/jawaban/{{$value->id}}"> --}}
                                    </tr>
                                    <?php $kosong=false;?>
                                @endforeach
                                @if ($kosong===true)
                                    <tr><td colspan="2">No questions have been asked yet</td></tr>
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>#</th>
                                    <th>Question Title</th>
                                    <th>Fill out the Question</th>
                                    <th>Option</th>
                                </tr>
                                </tfoot>
                        </table>
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

@push('pertanyaan')
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush