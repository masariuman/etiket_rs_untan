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
  <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
  <li class="active">Aturan Minum</li>
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
              <h3 class="box-title">Aturan Minum</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahAturanMinum')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Aturan Minum :</label>
                  <input type="text" name="nama_aturan_minum" class="form-control" placeholder="Aturan Minum ..." required>
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
                @foreach($aturanminum as $key => $aturanminums)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $aturanminums->nama_aturan_minum}}</td>
                  <td>
                      <!-- <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit text-green"></i>Edit</div>
                      <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-fw fa-trash text-red"></i>Hapus</div> -->
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-{{ $aturanminums->id }}">
                      <i class="fa fa-fw fa-edit text-green"></i>Ubah</button></div>
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2-{{ $aturanminums->id }}">
                      <i class="fa fa-fw fa-trash text-red"></i>Hapus</button></div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


@foreach($aturanminum as $aturanminums)
        <div class="modal fade" id="modal-default-{{ $aturanminums->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Ubah Data : {{ $aturanminums->nama_aturan_minum }}</h4>
              </div>
              <div class="modal-body">
              
            <form role="form" method="post" action="{{route('editAturanMinum', $aturanminums->id)}}">
              @method('PATCH')
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Aturan Minum :</label>
                  <input type="text" name="nama_aturan_minum" value="{{ $aturanminums->nama_aturan_minum }}" class="form-control" placeholder="Aturan Minum ..." required>
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


@foreach($aturanminum as $aturanminums)
        <div class="modal fade" id="modal-default2-{{ $aturanminums->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data : {{ $aturanminums->nama_aturan_minum }}</h4>
              </div>
              <div class="modal-body">
                
            <form role="form" method="post" action="{{route('hapusAturanMinum', $aturanminums->id)}}">
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
