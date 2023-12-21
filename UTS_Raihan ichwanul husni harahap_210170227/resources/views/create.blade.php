@extends('layouts.main')
@section('container')
<div class="content-wrapper">
   <!-- Content Header (Page header) -->
   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Tambah Matakuliah</h1>
         </div>
             </div>
     </div><!-- /.container-fluid -->
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
      <form action="{{ route('matakuliah.store')  }}" method="POST">
         @csrf
         <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- jquery validation -->
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Form <small>Tambah Data</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Nama Matakuliah</label>
                      <input type="nama_matakuliah" name="nama_matakuliah" class="form-control" placeholder="Enter Nama Matakuliah">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">SKS</label>
                      <input type="sks" name="sks" class="form-control"  placeholder="Enter SKS">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Dosen</label>
                      <input type="dosen" name="dosen" class="form-control"  placeholder="Enter Dosen">
                    </div>
                   </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
              </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">
   
            </div>
            <!--/.col (right) -->
          </div>
          <!-- /.row -->
      </form>
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>

@endsection