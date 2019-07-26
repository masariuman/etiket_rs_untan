<!DOCTYPE html>
<html>
<head>
    <title>Hi</title>
    <style>
        .page-break {
            page-break-after: always;
        }
        .aturan {
            font-size:30px;
            font-weight:bold;
        }
        .kanan {
            width: 20%;
        }
    </style>
</head>

<body>
    @foreach($label as $label)
        <!-- do something here | divs -->
        <table border="0" align="center" style="margin:auto; width:50%;">
            <tr>
                <td style="text-align:right; width:20%;">
                    <img src="{{asset('logo.png')}}" style="width:80%;">
                </td>
                <td style="text-align:center;" colspan="3">
                    <h2 style="text-align:center;margin:0;">INSTALASI FARMASI RUMAH SAKIT <br /> UNIVERSITAS TANJUNGPURA</h2>
                    <span style="text-align:center">Jl. Prof.Dr.Hadari Nawawi Pontianak 78124 <br />
                    Telp. 765324 </br>
                    Dede Robianto, S.Far., Apt.</span>
                </td>
            </tr>
            <tr>
                <td style="" colspan="4">
                    <hr />
                </td>
            </tr>
            <tr>
                <td>
                    No RM
                </td>
                <td>
                    :
                </td>
                <td>{{$label->mr}}</td>
                <td class="kanan">Tgl : {{$today}}</td>
            </tr>
            <tr>
                <td>
                    Nama Pasien
                </td>
                <td>
                    :
                </td>
                <td>{{$label->nama}}</td>
            </tr>
            <tr>
                <td>
                    Nama Obat
                </td>
                <td>
                    :
                </td>
                <td>{{$label->obat}}</td>
            </tr>
            <tr>
                <td>
                    Indikasi Obat
                </td>
                <td>
                    :
                </td>
                <td>{{$label->indikasi}}</td>
            </tr>
            <tr>
                <td>
                    Rute Pemberian
                </td>
                <td>
                    :
                </td>
                <td>ROUTE ?</td>
            </tr>
            <tr>
                <td class="aturan" colspan="4">
                    {{$label->aturan_pakai}} x Sehari {{$label->aturan_pakai2}} {{$label->bentukobat}}
                </td>
            </tr>
            <tr>
                <td class="aturan" colspan="4">
                    {{$label->sebelum_sesudah}}
                </td>
            </tr>
            <tr>
                <td class="aturan" colspan="3">
                    {{$label->maksimal}}
                </td>
                <td>
                    ED : {{$label->ed}}
                </td>
            </tr>
            <tr>
                <td class="aturan" colspan="3">
                    {{$label->aturan_pakai3}}
                </td>
                <td>
                    Jumlah : {{$label->jumlah}}
                </td>
            </tr>
            <tr>
                <td class="aturan" colspan="4" style="text-align:center;">
                    <i>SEMOGA LEKAS SEMBUH</i>
                </td>
            </tr>
        </table>


        <div class="page-break"></div>
    @endforeach


</body>
</html>
