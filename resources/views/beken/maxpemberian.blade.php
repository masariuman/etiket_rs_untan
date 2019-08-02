@extends('tenpureto.beken.index')

@section('seo-title')
	Max Pemberian
@endsection

@section('title')
  <h1>
  Max Pemberian
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Max Pemberian</li>
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
              <h3 class="box-title">Max Pemberian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahMaxPemberian')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Max Pemberian</label>
                  <input type="text" name="nama_max_pemberian" class="form-control" placeholder="Max Pemberian ..." required>
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
              <h3 class="box-title">Data Max Pemberian</h3>
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
                @foreach($maxpemberian as $key => $maxpemberians)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $maxpemberians->nama_max_pemberian}}</td>
                  <td>
                      <!-- <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default"><i class="fa fa-fw fa-edit text-green"></i>Edit</div>
                      <div class="col-md-5 col-sm-4" data-toggle="modal" data-target="#modal-default2"><i class="fa fa-fw fa-trash text-red"></i>Hapus</div> -->
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default-{{ $maxpemberians->id }}">
                      <i class="fa fa-fw fa-edit text-green"></i>
                         Edit
                       </button></div>
                      <div class="col-md-2 col-sm-4"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default2-{{ $maxpemberians->id }}">
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


          @foreach($maxpemberian as $maxpemberians)
        <div class="modal fade" id="modal-default-{{ $maxpemberians->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Edit Data : {{ $maxpemberians->nama_max_pemberian }}</h4>
              </div>
              <div class="modal-body">
              
            <form role="form" method="post" action="{{route('editMaxPemberian', $maxpemberians->id)}}">
              @method('PATCH')
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Aturan Minum</label>
                  <input type="text" name="nama_max_pemberian" value="{{ $maxpemberians->nama_max_pemberian }}" class="form-control" placeholder="Max Pemberian ..." required>
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


@foreach($maxpemberian as $maxpemberians)
        <div class="modal fade" id="modal-default2-{{ $maxpemberians->id }}">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Hapus Data : {{ $maxpemberians->nama_max_pemberian }}</h4>
              </div>
              <div class="modal-body">
                
            <form role="form" method="post" action="{{route('hapusMaxPemberian', $maxpemberians->id)}}">
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
