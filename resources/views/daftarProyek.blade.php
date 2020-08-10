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
            <th>nama</th>
            <th>deskripsi</th>
            <th>tanggal_mulai</th>
            <th>deadline</th>
            <th>status</th>
        </tr>
      </thead>
      <tbody>
        @forelse($proyek as $key => $proyek)
            
        @empty
            kosong
        @endforelse
      </tbody>
    </table>
    <a href="/proyek/create" class="btn btn-success btn-icon-split">
        <span class="icon text-white-50">
          <i class="fas fa-check"></i>
        </span>
        <span class="text">Add Proyek</span>
    </a>
  </div>
</div>
</div> 


@endSection

