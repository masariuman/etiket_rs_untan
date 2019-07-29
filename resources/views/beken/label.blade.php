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
              <h3 class="box-title">Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" method="post" action="{{route('tambahLabel')}}">
              {{csrf_field()}}
                <!-- text input -->
            <div class="row">   <!-- row -->
              <div class="col-md-6">
                <div class="form-group">
                  <label>No RM :</label>
                  <input type="number" name="mr" class="form-control" placeholder="No RM ...">
                </div>
                </div>


              <div class="col-md-6">
                <div class="form-group">
                  <label>Per Jam :</label>
                  <select name="aturan_pakai3" class="form-control" placeholder="Per Jam ...">
                  <option>Tiap 1 Jam</option>
                  <option>Tiap 2 Jam</option>
                  <option>Tiap 3 Jam</option>
                 </select>
                </div>  
                </div>    

  
              </div><!-- row -->
            
            
            <div class="row"><!-- row -->

               <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Pasien :</label>
                  <input type="text" name="nama" class="form-control" placeholder="Nama Pasien ...">
                </div>
                </div>                 


              <div class="col-md-6">
                <div class="form-group">
                  <label>Jumlah :</label>
                  <input type="number" name="jumlah" class="form-control" placeholder="Jumlah ...">
                </div>
                </div>                  

              </div><!-- row -->
            
            <div class="row"><!-- row -->
            <div class="col-md-6">
                <div class="form-group">
                  <label>Nama Obat/Dosis :</label>
                  <select name="obat" class="form-control" placeholder="Nama Obat ...">
                  <option>Paracetamol</option>
                  <option>Sirup Anak</option>
                  <option>Antibiotik</option>
                 </select>
                </div>  
                </div>  

         

              <div class="col-md-6">

               <!-- Date -->
               <div class="form-group">
                <label>Expired Date :</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" name="ed" class="form-control pull-right" id="datepicker" placeholder="Expired Date ...">
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->

             </div>
        
             </div><!-- row -->


             <div class="row"><!-- row -->
             <div class="col-md-6">
                <div class="form-group">
                  <label>Indikasi Obat :</label>
                  <input type="text" name="indikasi" class="form-control" placeholder="Indikasi Obat ...">
                </div>
              </div>     

              <div class="col-md-6">
                <div class="form-group">
                  <label>Maksimal Pemberian :</label>
                  <select name="maksimal" class="form-control" placeholder="Maksimal Pemberian ...">
                  <option>Maksimal 1 Hari</option>
                  <option>Maksimal 2 Hari</option>
                  <option>Maksimak 3 Hari</option>
                 </select>
                </div>  
                </div>  

              </div><!-- row --> 


            <div class="row"><!-- row -->
              <div class="col-md-4">
                <div class="form-group">
                  <label>Rute Pemberian :</label>
                  <select name="rute_pemberian" class="form-control" placeholder="Nama Obat/Dosis ...">
                  <option>Hisap</option>
                  <option>Tablet</option>
                  <option>Bungkus</option>
                 </select>
                </div>  
              </div> 
              <div class="col-md-1">
                <div class="form-group">
                  <label>x Sehari :</label>
                  <input type="number" name="aturan_pakai" class="form-control" placeholder="x Sehari ...">
                </div>
              </div>
              <div class="col-md-1">
                <div class="form-group">
                  <label>x :</label>
                  <input type="number" name="aturan_pakai2" class="form-control" placeholder="x ...">
                </div>
              </div>       

              <div class="col-md-6">
                <div class="form-group">
                  <label>Aturan Minum:</label>
                  <select name="sebelum_sesudah" class="form-control" placeholder="Aturan Minum ...">
                  <option>Sebelum Makan</option>
                  <option>Sesudah Makan</option>
                  <option>Pagi Hari</option>
                 </select>
                </div>  
              </div>  

              </div><!-- row -->     


            <div class="row"><!-- row -->
            <div class="col-md-6">
                <div class="form-group">
                  <label>Satuan Obat :</label>
                  <select name="bentukobat" class="form-control" placeholder="Satuan Obat ...">
                  <option>Oles</option>
                  <option>Bungkus</option>
                  <option>Unit</option>
                 </select>
                </div>  
                </div>  

              </div><!-- row --> 


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
