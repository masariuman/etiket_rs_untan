@extends('tenpureto.beken.index')

@section('seo-title')
	Label
@endsection

@section('title')
  <h1>
    Label
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li class="active">Label</li>
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
              <h3 class="box-title">Label</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form">
                <!-- text input -->
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>No RM:</label>
                  <input type="text" class="form-control" placeholder="No RM ...">
                </div>
                </div>

               <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Pasien:</label>
                  <input type="text" class="form-control" placeholder="Nama Pasien ...">
                </div>
                </div>

              </div>
            
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Obat:</label>
                  <select class="form-control" placeholder="Nama Obat ...">
                  <option>Paracetamol</option>
                  <option>Sirup Anak</option>
                  <option>Antibiotik</option>
                 </select>
                </div>  
                </div>              

                <div class="col-md-6">
                <div class="form-group">
                  <label>Indikasi Obat:</label>
                  <input type="text" class="form-control" placeholder="Indikasi Obat ...">
                </div>
                </div>

              </div> 
            
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Jumlah:</label>
                  <input type="number" class="form-control" placeholder="Jumlah Obat ...">
                </div>
              </div> 

              <div class="col-md-6">
                <div class="form-group">
                  <label>Aturan Pakai:</label>
                  <input type="text" class="form-control" placeholder="Aturan Pakai ...">
                </div>
             </div>
        
             </div>
   
            </div>
            <!-- /.box-body -->

            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
           </form>
          </div>
          <!-- /.box -->

</section>
@endsection

@push('js')
@endpush
