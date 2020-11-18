@extends('app')

@section('title')
HAKI
@endsection

@section('css')

@endsection

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Data Pengalaman Organisasi</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Data Pengalaman Organisasi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="col-lg-12">
        <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">Data Pengalaman Organisasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
            
                	<div class="row">
                			<div class="badge-id"><p  class="m-0">ID PERSONAL : 3232342423423</p></div>
                			<div class="badge-id"><p  class="m-0">NRKA : 324324324</p></div>
                	</div>
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Instansi</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Alamat</label>
                        <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                      </div>

                      <div class="form-group">
                        <label>Tanggal Awal</label>
                        <input type="date" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Deskripsi Pekerjaan</label>
                        <textarea class="form-control" rows="5" placeholder="Enter ..."></textarea>
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                      <div class="form-group">
                        <label>Jenis Instansi</label>
                        <select class="custom-select">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Tanggal Akhir</label>
                        <input type="date" class="form-control" placeholder="Enter ...">
                      </div>

                  
                      <div class="form-group">
                        <label>Upload Persyaratan Pengalaman Organisasi</label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Pilih File</label>
                          </div>
                        </div>
                      </div>
                    </div>
                   </div>
                   <hr>

                        <p><span class="text-primary">* Jika tombol submit tidak aktif padahal data lengkap, maka berarti data tersebut sudah ada dalam database.</span></p>
          <button class="btn btn-primary float-right">Submit</button> 

                      
                      

                    </div>
                  </div>

     
                </form>
              </div>
              <!-- /.card-body -->
            </div>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection

@section('js')

@endsection