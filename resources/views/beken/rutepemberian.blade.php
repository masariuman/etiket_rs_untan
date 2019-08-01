@extends('tenpureto.beken.index')

@section('seo-title')
	Rute Pemberian
@endsection

@section('title')
  <h1>
  Rute Pemberian
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Rute Pemberian</li>
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
              <h3 class="box-title">Rute Pemberian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahRutePemberian')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Rute Pemberian</label>
                  <input type="text" name="nama_rute_pemberian" class="form-control" placeholder="Rute Pemberian ..." required>
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
              <h3 class="box-title">Data Rute Pemberian</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Rute Pemberian</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($rutepemberians as $key => $rutepemberian)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $rutepemberian->nama_rute_pemberian}}</td>
                  <td><div class="col-md-5 col-sm-4"><a href="/edit"><i class="fa fa-fw fa-edit text-green"></i>Edit</a></div>
                      <div class="col-md-5 col-sm-4"><a href="/hapus"><i class="fa fa-fw fa-trash text-red"></i>Hapus</a></div>
                  </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->


</section>
@endsection

@push('js')
@endpush
