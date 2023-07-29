@extends('admin.layout')

@section('pageHeading')
  {{ __('Edit Verifikator') }}
@endsection

@section('sidebar')
@include('admin.partials.sidebar')
@endsection

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="order-3 order-md-2">
        <div class="col-12">
          <div class="card">
            <h5 class="card-header">Pilih Verifikator</h5>
            <form action="/admin/beranda/{{ $user->id }}" method="POST">
                @csrf
                <div class="card-body pb-3 d-flex align-items-center">
                    <div class="mb-3 col-md-6">
                      <label
                        for="verifikator_id"
                        class="form-label"
                        >Pilih Verifikator</label
                      >
                      <select class="form-select" name="verifikator_id" id="verifikator_id">
                        @foreach ($list_verifikator as $verifikator)
                        <option value="{{ $verifikator->id }}"  {{ old('verifikator_id') == $verifikator->id ? ' selected' : '' }}>{{ $verifikator->nama_lengkap }}</option>
                        
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3 col-md-6 mt-4 ms-3">
                      <button type="submit" class="btn btn-primary">Pilih</button>
                    </div>
                </div>
            </form>
          </div>
          <div class="card mt-3">
            <h5 class="card-header">Verifikator user: {{ $user->name }}</h5>
            <ul class="list-group">
              @foreach ($list_verifikasi as $verifikasi)
                  
              <li class="list-group-item d-flex align-items-center justify-content-between">
                <span>{{ $verifikasi->verifikator->nama_lengkap }}</span>
                <form action="{{ route('destroy', ['user_id' => $id, 'verifikator_id' => $verifikasi->verifikator_id]) }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="btn btn-danger text-white border-0" type="submit" onclick="return confirm('Are you sure ?')">Hapus</button>
                </form>
              </li>
             
              @endforeach
            </ul>
          </div>
        </div>
    </div>
  </div>
</div>
@endsection
