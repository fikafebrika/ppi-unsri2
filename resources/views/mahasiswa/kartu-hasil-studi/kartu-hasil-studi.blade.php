@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Kartu Hasil Studi') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card invoice-preview-card">
    <div class="card-body">
        <div class="text-center">
          <p class="text-uppercase mb-0">Kementerian Pendidikan dan Kebudayaan</p>
          <p class="text-uppercase fw-bold">Universitas Sriwijaya</p>
          <h5 class="text-uppercase fw-bold py-1">KARTU HASIL STUDI</h5>
          <div>
            <a href="#" class="btn btn-primary me-2 text-white"
              >Download</a
            >
          </div>
        </div>
    </div>
    <hr class="my-0" />
    <div class="card-body">
      <div class="row px-sm-3 pt-sm-3 p-0 text-uppercase align-items-center">
        <div class="col-2">
            <img src="{{asset('mahasiswa/assets/img/avatars/1.png')}}" alt="" height="160"
            width="120" class="rounded">
        </div>
        <div class="col-10">
          <table>
            <tbody>
              <tr>
                <td class="pe-3">Nama</td>
                <td>: Bambang Pamungkas</td>
              </tr>
              <tr>
                <td class="pe-3">No KTA</td>
                <td>: 09031281924160</td>
              </tr>
              <tr>
                <td class="pe-3">Tempat dan Tanggal Lahir</td>
                <td>: Palembang, 13 Februari 2002</td>
              </tr>
              <tr>
                <td class="pe-3">Program Studi</td>
                <td>: Program Profesi Insinyur</td>
              </tr>
              <tr>
                <td class="pe-3">Jalur Studi</td>
                <td>: Rekognisi Pembelajaran Lampau</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="table-responsive m-3">
      <table
        class="table border-top m-0 text-center table-hover"
      >
        <thead>
          <tr>
            <th>No.</th>
            <th class="text-start">Mata Kuliah</th>
            <th>SKS</th>
            <th>NILAI</th>
            <th>PREDIKAT</th>
            <th class="text-nowrap">(KXN)</th>
          </tr>
        </thead>
        <tbody class="text-uppercase">
          <tr>
            <td>1</td>
            <td class="text-start">
              Kode Etik Profesi
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>2</td>
            <td class="text-start">
              Profesionalisme
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>3</td>
            <td class="text-start">
              Kesehatan dan Keselamatan Kerja dan Lingkungan
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>4</td>
            <td class="text-start">
              Studi Kasus
            </td>
            <td>4</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>5</td>
            <td class="text-start">
              Seminar, Lokakarya dan/atau Diskusi
            </td>
            <td>2</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
          <tr>
            <td>6</td>
            <td class="text-start">
              Praktek Keinsinyuran
            </td>
            <td>12</td>
            <td>0</td>
            <td>F</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0 fw-bold">
          <tr>
            <td colspan="2" class="text-start">SKS yang Ditempuh</td>
            <td colspan="4">0</td>
          </tr>
          <tr>
            <td colspan="2" class="text-start">Total Kredit yang Ditempuh</td>
            <td colspan="4">0</td>
          </tr>
          <tr>
            <td colspan="2" class="text-start">
              Indeks Prestasi Semester
            </td>
            <td colspan="4">0</td>
          </tr>
          <tr>
            <td colspan="2" class="text-start">
              Indeks Prestasi Kumulatif
            </td>
            <td colspan="4">0</td>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
@endsection

