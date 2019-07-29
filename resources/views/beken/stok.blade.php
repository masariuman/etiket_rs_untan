@extends('tenpureto.beken.index')

@section('seo-title')
	Stok
@endsection

@section('title')
  <h1>
    Stok
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Stok</li>
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
                </tr>
                </thead>
                <tbody>
                @foreach($obats as $key => $obat)
                <tr>
                  <td>{{ ++$key }}</td>
                  <td>{{ $obat->nama_obat}}</td>
                  <td>{{ $obat->stok }}</td>
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
