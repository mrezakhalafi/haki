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
            <h1 class="m-0 text-dark">Email</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li></li>
              <li class="breadcrumb-item active">Read Email</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-block mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Folders</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                  <a href="#" class="nav-link">
                    <i class="fas fa-inbox"></i> Inbox
                    <span class="badge bg-primary float-right">12</span>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-envelope"></i> Sent
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="card card-primary card-outline">
            <div class="card-header">
              <h3 class="card-title">Read Mail</h3>

              <div class="card-tools">
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                <h5><b>Personalia</b></h5>
                <h6>From: goldy@gmail.com
                  <span class="mailbox-read-time float-right">15 Feb. 2015 11:03 PM</span></h6>
              </div>
              <!-- /.mailbox-read-info -->
          
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
              <p><strong>Biodata</strong></p>

                <table class="table-striped w-100">
                  <tr>
                    <td>ID KTP</td>
                    <td>:</td>
                    <td>214678234672364</td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Goldy</td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>Jakarta</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>Goldy@gmail.com</td>
                  </tr>
                </table>

              <ul class="mailbox-attachments d-flex align-items-stretch clearfix">
                <li>
                  <span class="mailbox-attachment-icon"><i class="far fa-file-image"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.pdf</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>1,245 KB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                  </div>
                </li>
                <li>
                  <span class="mailbox-attachment-icon"><i class="far fa-file-image"></i></span>

                  <div class="mailbox-attachment-info">
                    <a href="#" class="mailbox-attachment-name"><i class="fas fa-paperclip"></i> Sep2014-report.img</a>
                        <span class="mailbox-attachment-size clearfix mt-1">
                          <span>1,245 KB</span>
                          <a href="#" class="btn btn-default btn-sm float-right"><i class="fas fa-cloud-download-alt"></i></a>
                        </span>
                  </div>
                </li>
              </ul>
                  <div class="float-right mb-3">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#revisi-modal"><i class="fas fa-wrong"></i> Revisi</button>
                    </button>
                  </div>
              <hr style="clear: both;">  

              <p><strong>Data Pendidikan</strong></p>

                <table class="table-striped w-100">
                  <tr>
                    <td>ID KTP</td>
                    <td>:</td>
                    <td>214678234672364</td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Goldy</td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>Jakarta</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>Goldy@gmail.com</td>
                  </tr>
                </table>
                  <div class="float-right mb-3">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#revisi-modal"><i class="fas fa-wrong"></i> Revisi</button>
                    </button>
                  </div>

                  <hr style="clear: both;">  

              <p><strong>Data Organisasi</strong></p>

                <table class="table-striped w-100">
                  <tr>
                    <td>ID KTP</td>
                    <td>:</td>
                    <td>214678234672364</td>
                  </tr>
                  <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td>Goldy</td>
                  </tr>
                  <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td>Jakarta</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>Goldy@gmail.com</td>
                  </tr>
                </table>
                  <div class="float-right mb-3">
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#revisi-modal"><i class="fas fa-wrong"></i> Revisi</button>
                    </button>
                  </div>
            </div>
            <!-- /.card-footer -->
            <div class="card-footer">
              <div class="float-right">
                <button type="button" class="btn btn-primary" disabled=""><i class="fas fa-check"></i> Terima</button>
              </div>
            </div>
            <!-- /.card-footer -->
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

  <!-- Modal -->
<div class="modal fade" id="revisi-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Revisi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Masukan Revisi Perbaikan</label>
          <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </div>
</div>

@endsection

@section('js')

@endsection