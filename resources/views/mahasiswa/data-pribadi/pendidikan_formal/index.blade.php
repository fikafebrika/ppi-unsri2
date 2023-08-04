@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Pendidikan Formal') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between">
      <h5 class="card-header">Pendidikan Formal</h5>

      <a href="/data-pribadi/pendidikan_formal/create" class="btn btn-primary text-nowrap mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

    @if ($pendidikan_formal_users->count())
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Jenjang</th>
            <th>Nama Perguruan Tinggi</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>Kota</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Verifikator</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($pendidikan_formal_users as $pendidikan_formal_user)

          <tr>
            <th scope="row">{{ $loop->iteration }} </th>
            {{-- I.2 C2 --}}
            <td><strong>{{ $pendidikan_formal_user->jenjang }}</strong></td>
            {{-- I.2 C3 --}}
            <td>{{ $pendidikan_formal_user->nama_perguruan_tinggi }}</td>
            {{-- I.2 C4 --}}
            <td>{{ $pendidikan_formal_user->fakultas }}</td>
            {{-- I.2 C5 --}}
            <td>{{ $pendidikan_formal_user->jurusan }}</td>
            {{-- I.2 C6 --}}
            <td>{{ $pendidikan_formal_user->kota }}</td>
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            @if ($pendidikan_formal_user->bukti)
              <td>Ada</td>
            @else
            <td>Belum Ada</td>
            @endif
            {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
            {{-- <td>Ada</td> --}}
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              @if ( $pendidikan_formal_user->status_validasi === "pending" )
                <span class="badge bg-label-warning me-1">Pending</span>
              @elseif($pendidikan_formal_user->status_validasi === "valid")
               {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
              <span class="badge bg-label-success me-1">Valid</span>
              @elseif($pendidikan_formal_user->status_validasi === "invalid")
               {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
              <span class="badge bg-label-danger me-1">Invalid</span>
              @endif

            </td>
            <td>Belum Ada</td>
            {{-- <td>
              <a
                href="/data-pribadi/pendidikan-formal/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td> --}}
            <td>
                <a href="/data-pribadi/pendidikan_formal/{{ $pendidikan_formal_user->id }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="/data-pribadi/pendidikan_formal/{{ $pendidikan_formal_user->id }}/edit"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <form action="/data-pribadi/pendidikan_formal/{{ $pendidikan_formal_user->id }}" method="post" class="d-inline">
                  @method('delete')
						      @csrf
                  <button class="bx bx-trash me-1 text-danger border-0 " title="Hapus" onclick="return confirm('Are you sure ?')"></button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>


      <div class="d-flex justify-content-between mt-3 mx-1">
        <div><small>Showing 1 to 2 of 2 entries</small></div>
        <div>
          <nav aria-label="Page navigation">
            <ul class="pagination pagination-sm">
              <li class="page-item prev">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-left"></i
                ></a>
              </li>
              <li class="page-item active">
                <a class="page-link" href="javascript:void(0);"
                  >1</a
                >
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);"
                  >2</a
                >
              </li>
              <li class="page-item">
                <a class="page-link" href="javascript:void(0);"
                  >3</a
                >
              </li>
              <li class="page-item next">
                <a class="page-link" href="javascript:void(0);"
                  ><i class="tf-icon bx bx-chevron-right"></i
                ></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
    @else
    <div class="alert alert-primary text-center fs-5 mx-4 mt-2" role="alert">
        Data Pendidikan Formal Tidak Ada, Silakan <a href="/data-pribadi/pendidikan_formal/create" class="fw-semibold text-decoration-underline">Tambah Data</a> Pendidikan Formal
    </div>
    @endif

  </div>
  <script>
    // Dapatkan elemen input file
        const pdfFileInput = document.getElementById('bukti_pelatihan');

        // Tambahkan event listener untuk saat ada perubahan pada input file
        pdfFileInput.addEventListener('change', function(e) {
        // Dapatkan file yang dipilih oleh pengguna
        const selectedFile = e.target.files[0];

        // Buat objek URL untuk file yang dipilih
        const fileUrl = URL.createObjectURL(selectedFile);

        // Perbarui sumber data iframe dengan URL file yang baru
        document.getElementById('pdf-preview').src = fileUrl;
        });
  </script>
@endsection

