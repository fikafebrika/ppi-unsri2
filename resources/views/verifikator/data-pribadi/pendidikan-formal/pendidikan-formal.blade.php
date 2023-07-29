@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Pendidikan Formal') }}
@endsection

@section('sidebar')
@include('verifikator.partials.sidebar-detail', ["userId" => $userId ])
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">Pendidikan Formal</h5>
    </div>
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
          @foreach ($pendidikan_formals as $pendidikan_formal) 
       

          <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            {{-- I.2 C2 --}}
            <td><strong>{{ $pendidikan_formal->jenjang }}</strong></td>
            {{-- I.2 C3 --}}
            <td>{{ $pendidikan_formal->nama_perguruan_tinggi }}</td>
            {{-- I.2 C4 --}}
            <td>{{ $pendidikan_formal->fakultas }}</td>
            {{-- I.2 C5 --}}
            <td>{{ $pendidikan_formal->jurusan }}</td>
            {{-- I.2 C6 --}}
            <td>{{ $pendidikan_formal->kota }}</td>
            
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            
            @if ($pendidikan_formal->bukti)
            <td>Ada</td>
                @else
                <td>Belum Ada</td>
            @endif
            
            {{-- Status Data FAIP, Kalo belum diverifikasi atau divalidasi, statusnyo masih "Pending" --}}
            <td>
              @if ( $pendidikan_formal->status_validasi === "pending" )
              <span class="badge bg-label-warning me-1">Pending</span>
              @elseif($pendidikan_formal->status_validasi === "valid")
              {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
              <span class="badge bg-label-success me-1">Valid</span>
              @elseif($pendidikan_formal->status_validasi === "invalid")
              {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
              <span class="badge bg-label-danger me-1">Invalid</span>
              @endif
              {{-- <span class="badge bg-label-warning me-1">{{ $pendidikan_formal->status_validasi }}</span> --}}
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator terakhir dan hasilnyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
              >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator terakhir dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
              >Invalid</span
              >
            </td> --}}

            {{-- Kalo belum ada verifikator yang meriksa, kosongin be --}}
            <td>
              @foreach ($list_verifikasi as $verifikasi)
              <ul>
                <li>{{ $verifikasi->verifikator->nama_lengkap }}</li>
              </ul>
              @endforeach
              
            </td>
            {{-- Kalo ada, tampilin verifikator terakhir yg meriksa --}}
            {{-- <td>Verifikator Satu</td> --}}
            
            <td>
              <a
              href="/verifikator/data-pribadi/pendidikan-formal/{{ $pendidikan_formal->id }}/edit"
              class="btn btn-sm btn-primary"
              >Periksa</a
              >
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
  </div>
@endsection

