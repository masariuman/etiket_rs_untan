@extends('tenpureto.beken.index')

@section('seo-title')
	Aturan Minum
@endsection

@section('title')
  <h1>
  Aturan Minum
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Aturan Minum</li>
@endsection

@push('css')
@endpush

@section('main')
    <!-- Main content -->
    <section class="content container-fluid">

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Aturan Minum</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahAturanMinum')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Aturan Minum</label>
                  <input type="text" name="nama_aturan_minum" class="form-control" placeholder="Aturan Minum ..." required>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
           </form>
          </div>
          <!-- /.box -->



          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Aturan Minum</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Max Pemberian</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($aturanminums as $key => $aturanminum)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $aturanminum->nama_aturan_minum}}</td>
                  <td>
                      <!-- <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit text-green"></i>Edit</div>
                      <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-fw fa-trash text-red"></i>Hapus</div> -->
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                      <i class="fa fa-fw fa-edit text-green"></i>
                         Edit
                       </button></div>
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2">
                      <i class="fa fa-fw fa-trash text-red"></i>
                         Hapus
                      </button></div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->



        <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit</h4>
              </div>
              <div class="modal-body">
              
            <form role="form" method="post" action="{{route('tambahSatuanObat')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Satuan Obat</label>
                  <input type="text" name="nama_satuan_obat" class="form-control" placeholder="Satuan Obat ..." required>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </form>  
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->




        <div class="modal fade" id="modal-default2">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus</h4>
              </div>
              <div class="modal-body">
                <p>One fine body&hellip;</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
         


</section>
@endsection

@push('js')
@endpush
