@extends('layouts.master')

@section('content')
<?php 
  $dt = \App\User::where('id', \Auth::user()->id)->first();
?>
 @if(\Auth::user()->id == 1)
            <div class="box-body">
                <p>
                    <button class="btn btn-warning btn-refresh text-white">
                    <i class="fa fa-redo"></i> Refresh
                    </button>
                
                    <a class="btn btn-success" href=" {{ url('siswa/add') }} " role="button">
                        <i class="fa fa-plus"></i>  Buat Akun
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#import">
                        Impor Excel
                      </button>

                      <span class="float-sm-right"><a href="{{route('voters.generateAkun')}}" class="btn btn-md btn-danger">Generate Akun Voters</a>&nbsp;
            
                      </span>
                </p>
            
            </div>
           
            <div class="table-responsive">
                <table id="example1" class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $e=>$dt)
                        <tr>
                            <td> {{ $e+1 }} </td>
                            <td> {{ $dt->nama }} </td>
                            <td> {{ $dt->kelas }} </td>
                            <td> {{ $dt->email }} </td>
                            <td> 
                                <a class="btn btn-warning text-white" href="{{url('siswa/'.$dt->id)}}" role="button">
                                    <i class="fa fa-edit"></i>  Edit
                                </a> 
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

@endif
<div class="modal fade" id="import" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Impor Data Voters</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{route('voters.import')}}" enctype="multipart/form-data" >
            @csrf
            <input type="file" class="form-controll" name="importVoters" required>
          
          {{-- Format Ms. Excel : <a href="{{asset('/format/format_Import_Guru.xlsx')}}" class="btn btn-sm btn-success">Unduh Format</a>  --}}
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">+Unggah</button>
        </div>
      </form>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
<script src="{{url('../../ltex/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{url('../../ltex/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{url('../../ltex/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('../../ltex/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{url('../../ltex/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{url('../../ltex/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script type="text/javascript">
    $(document).ready(function  () {
        $('.btn-refresh').click(function (e) {
            e.preventDefault();
            $('.preloader').fadeIn();
            location.reload();
        });
        $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
        });
        $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
        "responsive": true,
        });
    })
</script>
<script>
 
</script>

@endsection