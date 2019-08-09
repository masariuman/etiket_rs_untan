@extends('tenpureto.beken.index')

@section('seo-title')
	Label Obat Luar
@endsection

@section('title')
  <h1>
    Label Obat Luar
    <small>Farmasi</small>
  </h1>
@endsection

@section('breadcrumb')
  <li><a href="#"><i class="fa fa-ticket"></i> Label</a></li>
  <li class="active">Label Obat Luar</li>
@endsection

@push('css')
    <style>
        .table>thead>tr>th, .table>tbody>tr>th, .table>tfoot>tr>th, .table>thead>tr>td, .table>tbody>tr>td, .table>tfoot>tr>td {
            border-top:0;
        }
    </style>
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
              <h3 class="box-title">Data Pasien</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <form role="form" name="add_name" id="add_name" method="post" action="{{route('tambahLabelObatLuar')}}">
              {{csrf_field()}}



              <div class="table-responsive">
                <table class="table table-borderless" border="0" id="dynamic_field">
                    <tr>
                        <td>
                            <!-- text input -->
                            <div class="row"><!-- row -->
                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>No RM :</label>
                                    <input type="number" name="mr" class="form-control" placeholder="No RM ...">
                                </div>
                            </div>


                                <div class="col-md-6">
                                <div class="form-group">
                                    <label>Per Jam :</label>
                                    <select name="rows[0][per_jam]" class="form-control" placeholder="Per Jam ...">
                                   @foreach($perjam as $perjams)
                                    <option>{{ $perjams->nama_per_jam}}</option>
                                    @endforeach
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


                                <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jumlah :</label>
                                    <input type="number" name="rows[0][jumlah]" class="form-control" placeholder="Jumlah ...">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>&nbsp;</label>
                                    <select name="rows[0][jumlah_jenis]" class="form-control" placeholder="Jumlah Jenis ...">
                                    @foreach($rutepemberian as $rutepemberians)    
                                    <option>{{ $rutepemberians->nama_rute_pemberian}}</option>
                                    @endforeach
                                    </select>
                                </div>
                                </div>

                                </div><!-- row -->

                            <div class="row"><!-- row -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nama Obat/Dosis :</label>
                                    <select name="rows[0][obat]" class="form-control" placeholder="Nama Obat ...">
                                    @foreach($obat as $obats)
                                    <option>{{ $obats->nama_obat}}</option>
                                    @endforeach
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
                                    <input type="text" name="rows[0][ed]" class="datepicker form-control pull-right" id="date[0]" placeholder="Expired Date ...">
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
                                    <input type="text" name="rows[0][indikasi]" class="form-control" placeholder="Indikasi Obat ...">
                                </div>
                                </div>


                                <div class="col-md-2">
                                <div class="form-group">
                                    <label>x :</label>
                                    <input type="number" name="rows[0][note_x]" class="form-control" placeholder="x ...">
                                </div>
                                </div>

                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>Note Tambahan :</label>
                                    <input type="text" name="rows[0][note]" class="form-control" placeholder="Catatan ...">
                                </select>
                                </div>
                                </div>

                                </div><!-- row -->


                            <div class="row"><!-- row -->
                                <div class="col-md-4">
                                <div class="form-group">
                                    <label>Rute Pemberian :</label>
                                    <select name="rows[0][rute_pemberian]" class="form-control" placeholder="Rute Pemberian ...">
                                    @foreach($rutepemberian as $rutepemberians)    
                                    <option>{{ $rutepemberians->nama_rute_pemberian}}</option>
                                    @endforeach
                                </select>
                                </div>
                                </div>
                                <div class="col-md-2">
                                <div class="form-group">
                                    <label>x Sehari :</label>
                                    <input type="number" name="rows[0][x_sehari]" class="form-control" placeholder="x Sehari ...">
                                </div>
                                </div>
                        

                            </div><!-- row -->

                        </td>
                    </tr>
                </table>
                <div class="box-footer">
                    <button type="button" name="add" id="add" class="btn btn-success"><i class="fa fa-fw fa-user-plus"></i>Tambah Label Baru dengan Orang Sama</button>
                    <button style="float:right;" type="submit" id="submit" class="btn btn-primary float-left"><i class="fa fa-fw fa-print"></i>Cetak</button>

                </div>
              </div>













            </div>
            <!-- /.box-body -->
           </form>
          </div>
          <!-- /.box -->

</section>



@endsection

@push('js')
<script>
$(document).ready(function(){
    var i=1;
    var j=0;
    $('#add').click(function(){
        i++;
        j++;
        $('#dynamic_field').append('<tr><td colspan="2"><hr style="border-top:5px solid #eee;"></td></tr><tr id="row'+i+'"><td><div class="row"><div class="col-md-6"><div class="form-group"><label>Nama Obat/Dosis :</label><select name="rows['+j+'][obat]" class="form-control" placeholder="Nama Obat ...">@foreach($obat as $obats)<option>{{ $obats->nama_obat}}</option>@endforeach</select></div></div><div class="col-md-6"><div class="form-group"><label>Per Jam :</label><select name="rows['+j+'][per_jam]" class="form-control" placeholder="Per Jam ...">@foreach($perjam as $perjams)<option>{{ $perjams->nama_per_jam}}</option>@endforeach</select></div></div></div><div class="row"><div class="col-md-6"><div class="form-group"><label>Indikasi Obat :</label><input type="text" name="rows['+j+'][indikasi]" class="form-control" placeholder="Indikasi Obat ..."></div></div><div class="col-md-2"><div class="form-group"><label>Jumlah :</label><input type="number" name="rows['+j+'][jumlah]" class="form-control" placeholder="Jumlah ..."></div></div><div class="col-md-4"><div class="form-group"><label>&nbsp;</label><select name="rows['+j+'][jumlah_jenis]" class="form-control" placeholder="Jumlah Jenis ...">@foreach($rutepemberian as $rutepemberians)<option>{{ $rutepemberians->nama_rute_pemberian}}</option>@endforeach</select></div></div></div><div class="row"><div class="col-md-4"><div class="form-group"><label>Rute Pemberian :</label><select name="rows['+j+'][rute_pemberian]" class="form-control" placeholder="Rute Pemberian ...">@foreach($rutepemberian as $rutepemberians)<option>{{ $rutepemberians->nama_rute_pemberian}}</option>@endforeach</select></div></div><div class="col-md-2"><div class="form-group"><label>x Sehari :</label><input type="number" name="rows['+j+'][x_sehari]" class="form-control" placeholder="x Sehari ..."></div></div><div class="col-md-6"><div class="form-group"><label>Expired Date :</label><div class="input-group date"><div class="input-group-addon"><i class="fa fa-calendar"></i></div><input type="text" name="rows['+j+'][ed]" class="datepicker form-control pull-right" id="date['+j+']" placeholder="Expired Date ..."></div></div></div></div><div class="row"><div class="col-md-2"><div class="form-group"><label>x :</label><input type="number" name="rows['+j+'][note_x]" class="form-control" placeholder="x ..."></div></div><div class="col-md-4"><div class="form-group"><label>Note Tambahan :</label><input type="text" name="rows['+j+'][note]" class="form-control" placeholder="Catatan ..."></select></div></div></div></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');

        $('.datepicker').datepicker({ format: "yyyy-mm-dd", todayHighlight:"true", autoclose: "true" });
    });

    $(document).on('click', '.btn_remove', function(){
        var button_id = $(this).attr("id");
        $('#row'+button_id+'').remove();
    });

    // $('#submit').click(function(){
    //     $.ajax({
    //         url:"name.php",
    //         method:"POST",
    //         data:$('#add_name').serialize(),
    //         success:function(data)
    //         {
    //             alert(data);
    //             $('#add_name')[0].reset();
    //         }
    //     });
    // });

});
</script>
@endpush
