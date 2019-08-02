@extends('tenpureto.beken.index')

@section('seo-title')
	Obat
@endsection

@section('title')
  <h1>
    Obat
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Obat</li>
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
              <h3 class="box-title">Tambah Obat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahObat')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Obat</label>
                  <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat ..." required >
                </div>
                <div class="form-group">
                  <label>Stok Obat</label>
                  <input type="number" name="stok" class="form-control" placeholder="Stok Obat ..." required>
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
              <h3 class="box-title">Data Obat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Obat</th>
                  <th>Stok Obat</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($obat as $key => $obats)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $obats->nama_obat}}</td>
                  <td>{{ $obats->stok }}</td>
                  <td>
                       <!-- <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit text-green"></i>Edit</div>
                      <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-fw fa-trash text-red"></i>Hapus</div> -->
                      <div class="col-md-3 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-{{ $obats->id }}">
                      <i class="fa fa-fw fa-edit text-green"></i>
                         Edit
                       </button></div>
                      <div class="col-md-3 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2-{{ $obats->id }}">
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


          @foreach($obat as $obats)
        <div class="modal fade" id="modal-default-{{ $obats->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data : {{ $obats->nama_obat }}</h4>
              </div>
              <div class="modal-body">
              
            <form role="form" method="post" action="{{route('editObat', $obats->id)}}">
              @method('PATCH')
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Obat</label>
                  <input type="text" name="nama_obat" value="{{ $obats->nama_obat }}" class="form-control" placeholder="Obat ..." required>
                </div>
                <div class="form-group">
                  <label>Stok Obat</label>
                  <input type="number" name="stok" value="{{ $obats->stok }}" class="form-control" placeholder="Stok Obat ..." required>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </form>  
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
@endforeach


@foreach($obat as $obats)
        <div class="modal fade" id="modal-default2-{{ $obats->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data : {{ $obats->nama_obat }}</h4>
              </div>
              <div class="modal-body">
                
            <form role="form" method="post" action="{{route('hapusObat', $obats->id)}}">
             @method('DELETE')
             {{csrf_field()}}

              <center><h3>Apakah Anda Yakin ?</h3></center>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-danger">Delete</button>
              </div>
            </form> 
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
@endforeach 


</section>
@endsection

@push('js')
@endpush
