@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Tanda Penghargaan') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
    <div
      class="d-flex align-items-center justify-content-between"
    >
      <h5 class="card-header">
        Tanda Penghargaan yang Diterima
      </h5>
      <a href="/data-pribadi/tanda-penghargaan/create" class="btn btn-primary mx-4 mt-2">Tambah Data</a>
    </div>
    @if (session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="table-responsive mx-3 mb-2 text-center">
      <table class="table table-hover">
        <thead class="align-middle">
          <tr>
            <th>#</th>
            <th>Tahun</th>
            <th>Nama Tanda Penghargaan</th>
            <th>Nama Lembaga Yang Memberikan</th>
            <th>Lokasi</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            {{-- I.4 Kolom B --}}
            <td><strong>2022</strong></td>
            {{-- I.4 Kolom C --}}
            <td>Penghargaan Satu</td>
            {{-- I.4 Kolom D --}}
            <td>Universitas Sriwijaya</td>
            {{-- I.4 Kolom E --}}
            <td>Palembang</td>
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            <td>Belum Ada</td>
            {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
            {{-- <td>Ada</td> --}}
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              <span class="badge bg-label-warning me-1"
                >Pending</span
              >
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            {{-- <td>
              <a
                href="/data-pribadi/tanda-penghargaan/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td> --}}
            <td>
                <a href="{{ url('data-pribadi/tanda-penghargaan/detail') }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="{{ url('data-pribadi/tanda-penghargaan/detail') }}"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <a href="#"
                ><i
                    class="bx bx-trash me-1 text-danger"
                    title="Hapus"
                ></i
                ></a>
            </td>
          </tr>
          <tr>
            <th scope="row">2</th>
            {{-- I.4 Kolom B --}}
            <td><strong>2022</strong></td>
            {{-- I.4 Kolom C --}}
            <td>Penghargaan Satu</td>
            {{-- I.4 Kolom D --}}
            <td>Universitas Sriwijaya</td>
            {{-- I.4 Kolom E --}}
            <td>Palembang</td>
            {{-- Kalo Belum Upload Bukti, status buktinyo jadi "Belum Ada" --}}
            <td>Belum Ada</td>
            {{-- Kalo Sudah Upload Bukti, status buktinyo jadi "Ada" --}}
            {{-- <td>Ada</td> --}}
            {{-- Status Data FAIP, Kalo dah upload excel, statusnyo masih "Pending" --}}
            <td>
              <span class="badge bg-label-warning me-1"
                >Pending</span
              >
            </td>
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo valid, statusnyo jadi "Valid" --}}
            {{-- <td>
              <span class="badge bg-label-success me-1"
                >Valid</span
              >
            </td> --}}
            {{-- Status Data FAIP, Kalo dah diverifikasi oleh verifikator dan hasil datanyo tidak valid, statusnyo jadi "Invalid" --}}
            {{-- <td>
              <span class="badge bg-label-danger me-1"
                >Invalid</span
              >
            </td> --}}
            {{-- <td>
              <a
                href="/data-pribadi/tanda-penghargaan/detail"
                class="btn btn-sm btn-primary"
                >Detail</a
              >
            </td> --}}
            <td>
                <a href="{{ url('data-pribadi/tanda-penghargaan/detail') }}"
                ><i class="bx bxs-show me-1" title="Lihat"></i
                ></a>
                <a href="{{ url('data-pribadi/tanda-penghargaan/detail') }}"
                ><i class="bx bx-edit-alt me-1" title="Edit"></i
                ></a>
                <a href="#"
                ><i
                    class="bx bx-trash me-1 text-danger"
                    title="Hapus"
                ></i
                ></a>
            </td>
          </tr>
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

