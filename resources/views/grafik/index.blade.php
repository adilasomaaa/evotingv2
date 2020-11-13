@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{$total_pemilih}} Orang</h3>

                <p>Total Pemilih</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            </div>
    </div>
    <div class="col">
        <div class="small-box bg-primary">
            <div class="inner">
                <h3>{{$hak_pemilih}} Orang</h3>

                <p>Total yang Menggunakan hak pemilih</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            </div>
    </div>
</div>


<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No Urut</th>
                <th>Foto</th>
                <th>Nama Pasangan Calon</th>
                <th>Total Suara</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kandidat as $e=>$dt)
            <tr>
                <td>{{$dt->no_urut}}</td>
                <td><img src="{{asset($dt->photo)}}" style="width:250px"></td>
                <td>
                   <b>Ketua</b>   :  {{$dt->calon_ketua}} <br/>
                   <b>Wakil</b> : {{$dt->calon_wakil}}
                </td>
                <td>
                {!! json_encode($total_suara) !!}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>

@endsection

@section('scripts')

<script>
    $(document).ready(function(){
        Highcharts.chart('container', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'Grafik Pemilihan Ketua OSIS'
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
        },
        accessibility: {
            point: {
                valueSuffix: '%'
            }
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: true,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %'
                }
            }
        },
        series: [{
            name: 'Perolehan Suara',
            colorByPoint: true,
            data: {!! json_encode($hasil) !!}
        }]
    });
    })
</script>
@endsection