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
            <h1 class="m-0 text-dark">Form Data Diri</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Form Data Diri</li>
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
                <h3 class="card-title">Personalia - Biodata</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Input Personal / KTP <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Nama Sertifikat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Tempat Lahir <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Email <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>NPWP <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Nama Tanpa Gelar</label>
                        <input type="text" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Tanggal Lahir <span class="text-danger">*</span></label>
                        <input type="date" class="form-control" placeholder="Enter ...">
                      </div>

                      <div class="form-group">
                        <label>Telepon <span class="text-danger">*</span></label>
                        <input type="text" class="form-control is-invalid" placeholder="Enter ...">
                        <small class="text-danger">Masukan Nomor bukan Huruf</small>
                      </div>

                      <div class="form-group">
                        <label>Jenis Kelamin <span class="text-danger">*</span></label>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked="">
                          <label for="customRadio2" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio3" disabled="">
                          <label for="customRadio3" class="custom-control-label">Perempuan</label>
                        </div>
                      </div>

                      <div class="form-group">
                      <label>Negara <span class="text-danger">*</span></label>
                        <select class="custom-select">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                        </select>
                      </div>

                    </div>
                  </div>

                  <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Alamat Sesuai KTP</h3>
              <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="col-lg-12 p-0">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Jalan</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group">
                      <label>Provinsi</label>
                        <select class="custom-select">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Upload KTP <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chrysanthemum.jpg</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Upload surat pernyataan kebenaran data pemohon <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chrysanthemum.jpg</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Upload pas photo pemohon <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chrysanthemum.jpg</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Kode Pos</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>

                    <div class="form-group">
                      <label>Kabupaten</label>
                        <select class="custom-select">
                              <option>option 1</option>
                              <option>option 2</option>
                              <option>option 3</option>
                              <option>option 4</option>
                              <option>option 5</option>
                        </select>
                      </div>

                      <div class="form-group">
                        <label>Upload Daftar Riwayat Hidup <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chrysanthemum.jpg</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <label>Upload NPWP <span class="text-danger">*</span></label>
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Chrysanthemum.jpg</label>
                          </div>
                          <div class="input-group-append">
                            <span class="input-group-text" id="">Upload</span>
                          </div>
                        </div>
                      </div>
                    
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card-body -->
     
          </div>
          <p><span class="text-primary">* Jika tombol submit tidak aktif padahal data lengkap, maka berarti data tersebut sudah ada dalam database.</span></p>
          <button class="btn btn-primary float-right">Submit</button>
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