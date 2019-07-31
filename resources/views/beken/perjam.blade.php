@extends('tenpureto.beken.index')

@section('seo-title')
	Per Jam
@endsection

@section('title')
  <h1>
  Per Jam
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Per Jam</li>
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
              <h3 class="box-title">Per Jam</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahSatuanObat')}}">
              {{csrf_field()}}
                <!-- text input -->
                <div class="form-group">
                  <label>Per Jam</label>
                  <input type="text" name="nama_per_jam" class="form-control" placeholder="Per Jam ...">
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
              <h3 class="box-title">Data Per Jam</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Per Jam</th>
                  <th>Option</th>
                </tr>
                </thead>
                <tbody>
                @foreach($perjams as $key => $perjam)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $perjam->nama_per_jam}}</td>
                  <td><a href="/obat"><div class="col-md-4 col-sm-4"><i class="fa fa-fw fa-edit text-green"></i>Edit</div></a>
                      <div class="col-md-4 col-sm-4"><a href="/stok"><i class="fa fa-fw fa-trash text-red"></i>Hapus</a></div>
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
