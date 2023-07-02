@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Rekognisi Pencapaian') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
{{-- Komposisi Penilaian Untuk Profesi Utama "PRAKTISI" --}}
<div class="card mb-3">
    <h5 class="card-header">Kode Etik Profesi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Organisasi Profesi & Organisasi Lainnya yang Dimasuki</strong
              >
            </td>
            <td>{{ $bobot['kode_etik_profesi']['organisasi'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>{{ $bobot['kode_etik_profesi']['tanda-penghargaaan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>{{ $bobot['kode_etik_profesi']['pendidikan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>{{ $bobot['kode_etik_profesi']['sertifikat'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>{{ $bobot['kode_etik_profesi']['kualifikasi_professional'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['kode_etik_profesi']['pengalaman_mengajar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Profesionalisme</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Pendidikan Formal</strong>
            </td>
            <td>{{ $bobot['profesionalisme']['pendidikan_formal'] }}</td>
            <td>0</td> 
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>{{ $bobot['profesionalisme']['tanda_penghargaan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>{{ $bobot['profesionalisme']['pendidikan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>{{ $bobot['profesionalisme']['sertifikat'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>{{ $bobot['profesionalisme']['kualifikasi_professional'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['profesionalisme']['pengalaman_mengajar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>{{ $bobot['profesionalisme']['bahasa'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">
      Kesehatan dan Keselamatan Kerja dan Lingkungan
    </h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Kualifikasi Profesional</strong
              >
            </td>
            <td>{{ $bobot['kesehatan_keselamatan_kerja']['kualifikasi_professional'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Studi Kasus</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['kualifikasi_professional'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['pengalaman_mengajar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['karya_tulis'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['makalah'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['seminar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['karya_temuan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>{{ $bobot['studi_kasus']['bahasa'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Seminar, Lokakarya dan/atau Diskusi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>{{ $bobot['seminar']['kualifikasi_professional'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          @if (auth()->user()->profesiutama === "praktisi")
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['seminar']['pengalaman_mengajar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>       
          @endif
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>{{ $bobot['seminar']['karya_tulis'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['seminar']['makalah'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          @if (auth()->user()->profesiutama === "dosen")
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>{{ $bobot['seminar']['makalah'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>     
          @endif
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>{{ $bobot['seminar']['karya_temuan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>{{ $bobot['seminar']['bahasa'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Praktek Keinsinyuran</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          @if (auth()->user()->profesiutama === "praktisi")
          <tr>
            <td class="text-start">
              <strong
                >Pengalaman Mengajar Keinsinyuran</strong
              >
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['kualifikasi_professional'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr> 
          @endif
          @if (auth()->user()->profesiutama === "dosen")
          <tr>
            <td class="text-start">
              <strong
                >Kualifikasi Profesional</strong
              >
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['pengalaman_mengajar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr> 
          @endif
             
          
          <tr>
            <td class="text-start">
              <strong
                >Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong
              >
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['karya_tulis'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['makalah'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['seminar'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['karya_temuan'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>{{ $bobot['praktek_keinsinyuran']['bahasa'] }}</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Predikat</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>

{{-- Komposisi Penilaian Untuk Profesi Utama "DOSEN" --}}
{{-- <div class="card mb-3">
    <h5 class="card-header">Kode Etik Profesi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Organisasi Profesi & Organisasi Lainnya yang Dimasuki</strong
              >
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Profesionalisme</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Pendidikan Formal</strong>
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Tanda Penghargaan yang Diterima</strong
              >
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pendidikan/ Pelatihan Teknik/ Manajemen</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Sertifikat Kompetensi dan Bidang Lainnya</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">
      Kesehatan dan Keselamatan Kerja dan Lingkungan
    </h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Kualifikasi Profesional</strong
              >
            </td>
            <td>100%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Studi Kasus</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Keinsinyuran</strong>
            </td>
            <td>35%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card mb-3">
    <h5 class="card-header">Seminar, Lokakarya dan/atau Diskusi</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong>Kualifikasi Profesional</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Pengalaman Mengajar Pelajaran Keinsinyuran</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong>
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>30%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>25%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>5%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div>
<div class="card">
    <h5 class="card-header">Praktek Keinsinyuran</h5>
    <div class="table-responsive mx-3 mb-2">
      <table class="table table-hover text-center">
        <thead>
          <tr>
            <th class="text-start">Indikator Penilaian</th>
            <th>Bobot</th>
            <th>Poin</th>
            <th>(Bobot x Poin)</th>
          </tr>
        </thead>
        <tbody class="table-border-bottom-0">
          <tr>
            <td class="text-start">
              <strong
                >Pengalaman Mengajar Pelajaran Keinsinyuran</strong
              >
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong
                >Karya Tulis di Bidang Keinsinyuran yang Dipublikasikan</strong
              >
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Makalah/ Tulisan yang Disajikan Dalam Seminar/ Lokakarya Keinsinyuran</strong>
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Seminar/ Lokakarya yang Diikuti</strong>
            </td>
            <td>15%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru</strong>
            </td>
            <td>20%</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <td class="text-start">
              <strong>Bahasa yang Dikuasai</strong>
            </td>
            <td>10%</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <td colspan="2"></td>
            <td><strong>Total</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Konversi</strong></td>
            <td class="fw-bold">0</td>
          </tr>
          <tr>
            <td colspan="2"></td>
            <td><strong>Nilai Mutu</strong></td>
            <td class="fw-bold">F</td>
          </tr>
        </tfoot>
      </table>
    </div>
</div> --}}
@endsection

