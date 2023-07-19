@extends('dashboard.luar.main')

@Section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Data pegawai</h1>
</div>
<h2>Section title</h2>
      <div class="table-responsive col-lg-8">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Id_kantor</th>
              <th scope="col">nama</th>
              <th scope="col">email</th>
              <th scope="col">action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $pegawai)
            <tr>
              <td>{{  $loop->iteration }}</td>
              <td>{{  $pegawai->id_kantor }}</td>
              <td>{{  $pegawai->name }}</td>
              <td>{{  $pegawai->email }}</td>
              <td>sssss</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>

@endsection

