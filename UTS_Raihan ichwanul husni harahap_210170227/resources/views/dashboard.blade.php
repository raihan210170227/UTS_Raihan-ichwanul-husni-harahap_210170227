@extends('layouts.main')
@section('container')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
           </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Daftar Nama Matakuliah</h3>
  
                  
                    </div>
                  </div>
                </div>

                <div class="row mb-2">
                  @foreach($maha as $post)
                      
                                  <h3 class="card-title"><b>Nama: </b>{{ $post->nama }}</h3>
                                  <p class="card-text"><b>NIM: </b>{{ $post->nim }}</p>
                                  @endforeach
                                  </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                  <table class="table table-hover text-nowrap">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Matakuliah</th>
                        <th>SKS</th>
                        <th>Dosen</th>
                        <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $d)
                      <tr>
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $d->nama_matakuliah }}</td>
                      <td>{{ $d->sks }}</td>
                      <td>{{ $d->dosen }}</td>
                      <td>
                        <a href="{{ route('matakuliah.edit', ['data' => $d->id]) }}" class="btn btn-primary"><i class="fas fa-edit"></i>Edit</a>
                        <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" href="#" class="btn btn-danger"><i class="fas fa-trash"></i>Hapus</a>
                                            </td>
                    </tr>   
                    <div class="modal fade" id="modal-hapus{{ $d->id }}">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h4 class="modal-title">Konfirmasi Hapus Data</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <p>Apakah Anda ingin menghapus <b>{{ $d->nama }}</b></p>
                          </div>
                          <div class="modal-footer justify-content-between">
                            <form action="{{ route('matakuliah.delete',['id'=>$d]) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Ya, Hapus</button>
                            </form>
                            
                          </div>
                        </div>
                        <!-- /.modal-content -->
                      </div>
                      <!-- /.modal-dialog -->
                    </div>
                      @endforeach
                        
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
          </div>
        <!-- /.row -->
        <!-- Main row -->
       
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->


@endsection