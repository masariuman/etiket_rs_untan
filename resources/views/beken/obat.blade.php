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
              <form role="form">
                <!-- text input -->
                <div class="form-group">
                  <label>Nama Obat</label>
                  <input type="text" class="form-control" placeholder="Nama Obat ...">
                </div>
                <div class="form-group">
                  <label>Stok Obat</label>
                  <input type="number" class="form-control" placeholder="Stok Obat ...">
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
        <h3 class="box-title">Data Obat & Stok</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
          <tr>
            <th>Nama Obat</th>
            <th>Stok</th>     
          </tr>
          </thead>
          <tbody>
          <tr>
            <td>Paracetamol</td>
            <td>96</td> 
          </tr>
          <tr>
          </tbody>
          <tfoot>
            <td>Sirup Anak</td>
            <td>48</td>
          </tr>
          </tfoot>
        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->

</section>
@endsection

@push('js')
@endpush
