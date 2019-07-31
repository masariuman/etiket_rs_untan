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
                  <input type="text" name="nama_max_pemberian" class="form-control" placeholder="Max Pemberian ...">
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
                @foreach($maxpemberians as $key => $maxpemberian)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $maxpemberian->nama_max_pemberian}}</td>
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
