@extends('tenpureto.beken.index')

@section('seo-title')
	Satuan Obat
@endsection

@section('title')
  <h1>
  Satuan Obat
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Satuan Obat</li>
@endsection

@push('css')
@endpush

@section('main')
    <!-- Main content -->
    <section class="content container-fluid">
    @include('pesan')
      <!--------------------------
        | Your Page Content Here |
        -------------------------->
        <!-- /.box -->
          <!-- general form elements disabled -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Satuan Obat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahSatuanObat')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Satuan Obat :</label>
                  <input type="text" name="nama_satuan_obat" class="form-control" placeholder="Satuan Obat ..." required>
                </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-plus"></i>Tambah</button>
            </div>
           </form>
          </div>
          <!-- /.box -->



          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Data Satuan Obat</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Satuan Obat</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($satuanobat as $key => $satuanobats)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $satuanobats->nama_satuan_obat}}</td>
                  <td>
                       <!-- <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit text-green"></i>Edit</div>
                      <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-fw fa-trash text-red"></i>Hapus</div> -->
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-{{ $satuanobats->id }}">
                      <i class="fa fa-fw fa-edit text-green"></i>Ubah</button></div>
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2-{{ $satuanobats->id }}">
                      <i class="fa fa-fw fa-trash text-red"></i>Hapus</button></div>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


          @foreach($satuanobat as $satuanobats)
        <div class="modal fade" id="modal-default-{{ $satuanobats->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data : {{ $satuanobats->nama_satuan_obat }}</h4>
              </div>
              <div class="modal-body">
              
            <form role="form" method="post" action="{{route('editSatuanObat', $satuanobats->id)}}">
              @method('PATCH')
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Satuan Obat :</label>
                  <input type="text" name="nama_satuan_obat" value="{{ $satuanobats->nama_satuan_obat }}" class="form-control" placeholder="Satuan Obat ..." required>
                </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-fw fa-close"></i>Batal</button>
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-edit"></i>Ubah</button>
              </div>
            </form>  
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
@endforeach


@foreach($satuanobat as $satuanobats)
        <div class="modal fade" id="modal-default2-{{ $satuanobats->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data : {{ $satuanobats->nama_satuan_obat }}</h4>
              </div>
              <div class="modal-body">
                
            <form role="form" method="post" action="{{route('hapusSatuanObat', $satuanobats->id)}}">
             @method('DELETE')
             {{csrf_field()}}

              <center><h3>Apakah anda yakin ?</h3></center>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal"><i class="fa fa-fw fa-close"></i>Batal</button>
                <button type="submit" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i>Hapus</button>
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
