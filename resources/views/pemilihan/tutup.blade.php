@extends('layouts.master')

@section('content')

                <div class="alert alert-danger alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Pengumuman!</h5>
                    Pemilihan telah ditutup karena telah mencapai batas waktu
                </div>

                <div class="alert alert-warning alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                  <h5><i class="icon fas fa-ban"></i> Acara Selanjutnya!</h5>
                    Saksikan penghitungan suara dan pengumuman hasil melalui Instagram OSIS SMK Negeri 1 Limboto
                </div>

@endsection

@section('scripts')

<script type="text/javascript">
    $(document).ready(function  () {
        $('.btn-refresh').click(function (e) {
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        })
    })
</script>

@endsection