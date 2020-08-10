@extends('layouts.master')

@section('content')
<script>
    Swal.fire({
        title: 'Berhasil!',
        text: 'Memasangkan script sweet alert',
        icon: 'success',
        confirmButtonText: 'Cool'
    })
</script>
<div class="card shadow mb-4">
<div class="card-header py-3">
  <h6 class="m-0 font-weight-bold text-primary">Daftar Proyek</h6>
</div>
<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered dataTable" 
        id="dataTable" role="grid" aria-describedby="dataTable_info" 
        style="width: 100%;" width="100%" cellspacing="0"
    >
      <thead>
<tr>
<th>#</th>
<th></th>
</tr>

      </thead>
      <tbody>

        @forelse($proyek as $key => $proyek)
            test
        @empty
            kosong
        @endforelse
      </tbody>
    </table>
  </div>
</div>
</div> 


@endSection

