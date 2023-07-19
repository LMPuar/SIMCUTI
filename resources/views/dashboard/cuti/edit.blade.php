@extends('dashboard.luar.main')

@Section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Form Pengajuan Cuti</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/cuti/{{ $cuti->id }}">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="jenis" class="form-label">Jenis Cuti</label>
            <select class="form-select" name="jenis_id">
              @foreach ($jeniss as $jenis)
              @if(old('jenis_id',$cuti->jenis_id) == $jenis->id)
                <option value="{{ $jenis->id }}" selected>{{ $jenis->name }}</option>    
              @else
                <option value="{{ $jenis->id }}">{{ $jenis->name }}</option>
              @endif
              @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="alasan" class="form-label">Alasan</label>
            <textarea class="form-control @error('alasan') is-invalid @enderror" id="alasan" rows="3" name="alasan">{{ old('alasan',$cuti->alasan) }}</textarea>
            @error('alasan')
             <div class="invalid-feedback">
              {{ $message }}
             </div>
            @enderror
        </div>
        <div class="mb-3">
          <label for="prihal_cuti" class="form-label">Prihal Cuti</label>
          <input type="text" class="form-control @error('prihal_cuti') is-invalid @enderror" id="prihal_cuti" name="prihal_cuti" value={{ old('prihal_cuti',$cuti->prihal_cuti) }}>
          @error('prihal_cuti')
            <div class="invalid-feedback">
            {{ $message }}
            </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="mulai" class="form-label @error('mulai') is-invalid @enderror">Mulai Cuti</label>
          <input type="date" class="form-control" id="mulai" name="mulai" value={{ old('mulai',$cuti->mulai) }}>
          @error('mulai')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
        @enderror
        </div>
        <div class="mb-3">
          <label for="berakhir" class="form-label @error('mulai') is-invalid @enderror">Masuk Cuti</label>
          <input type="date" class="form-control" id="berakhir" name="berakhir" value={{ old('berakhir',$cuti->berakhir) }}>
          @error('berakhir')
          <div class="invalid-feedback">
          {{ $message }}
          </div>
        @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection

