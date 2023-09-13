@extends('dashboard.luar.main')

@Section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Form Cuti</h1>
</div>
    <a href="/dashboard/cuti/create" class="btn btn-primary mb-3">Buat Pengajuan</a>
      <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Jenis Cuti</th>
              <th scope="col">Alasan</th>
              <th scope="col">Perihal Cuti</th>
              <th scope="col">Mulai</th>
              <th scope="col">Masuk</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($cutis as $cuti)
            <tr>
              <td>{{  $loop->iteration }}</td>
              <td>{{  $cuti->jenis->name }}</td>
              <td>{{  $cuti->alasan }}</td>
              <td>{{  $cuti->prihal_cuti }}</td>
              <td>{{  $cuti->mulai }}</td>
              <td>{{  $cuti->berakhir }}</td>
              <td>
                <a href="/dashboard/cuti/{{ $cuti->id }}/edit" class="badge bg-primary"><i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/cuti/{{ $cuti->id }}" method="POST" class="d-inline">
                      @method('delete')
                      @csrf
                      <button class="badge bg-danger border-0" onclick="return confirm('yakin mau menghapus?')"><i class="bi bi-trash-fill"></i></button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection

