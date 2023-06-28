@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Organisasi') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
  <h5 class="card-header">Data Pencapaian</h5>
    <form
      id="formAccountSettings"
      method="POST"
      onsubmit="return false"
    >
      {{-- Hasil Validasi Ditampilkan, ketika data pencapaian, statusnya dah valid atau invalid --}}
      <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="hasil-validasi"
            >Hasil Validasi</label
          >
          <select
            id="hasil-validasi"
            class="select2 form-select bg-white" disabled
          >
          @if ($organisasi_user->status_validasi === "valid")
          <option value="valid" class="text-success fw-bold" selected>
            VALID (*Bila semua pencapaian mahasiswa telah
            sesuai)
          </option>
          @elseif($organisasi_user->status_validasi === "invalid")
          <option value="invalid" class="text-danger fw-bold">
            INVALID (*Bila ada kesalahan pada pencapaian
            mahasiswa atau ada pencapaian yang tidak sesuai)
          </option>
          @elseif($organisasi_user->status_validasi === "pending")
          <option value="" class="text-warning fw-bold">
            Pending(*Menunggu Verifikasi Pencapaian Mahasiswa)
          </option>  
          @endif
          </select>
        </div>
        <div class="mb-3 col-md-12">
          <label
            for="catatan-verifikator"
            class="form-label text-danger"
            >Catatan Tim Verifikator</label
          >
          <textarea
            id="catatan-verifikator"
            class="form-control bg-white" disabled
            placeholder="Berikan Catatan Kepada Mahasiswa Terkait Kesesuaian Maupun Kesalahan Dalam Mengklaim Pencapaian Mahasiswa"
            rows="5"
          >{{ $organisasi_user->catatan_verifikator }}</textarea>
        </div>
      </div>
      <hr class="my-0" />
      <div class="card-body pb-3">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="bukti_organisasi" class="form-label"
                  >Upload Bukti</label
                >
                <iframe src="{{ asset('storage/' . $organisasi_user->bukti_organisasi) }}" width="100%" height="500px"></iframe>
                <input
                  class="form-control"
                  type="file"
                  id="bukti_organisasi"
                  name="bukti_organisasi"
                  disabled
                />
              </div>
            {{-- I.3 Kolom B --}}
            <div class="mb-3 col-md-6">
                <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
                <input type="text" class="form-control" id="nama_organisasi" name="nama_organisasi" placeholder="Nama Organisasi" value="{{ $organisasi_user->nama_organisasi }}"
                disabled
                />
            </div>
            {{-- I.3 Kolom C --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="jenis_organisasi">Jenis Organisasi</label>
                <input type="text" class="form-control" id="jenis_organisasi" name="jenis_organisasi" placeholder="jenis_organisasi" value="{{ $organisasi_user->jenis_organisasi }}" disabled/>
            </div>
            {{-- I.3 Kolom D --}}
            <div class="mb-3 col-md-6">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control" id="kota" name="kota" placeholder="Kota" value="{{ $organisasi_user->kota }}" disabled/>
            </div>
            {{-- I.3 Kolom E --}}
            <div class="mb-3 col-md-6">
                <label for="negara" class="form-label">Negara</label>
                <input type="text" class="form-control" id="negara" name="negara" placeholder="Negara" value="{{ $organisasi_user->negara }}"disabled/>
            </div>
            {{-- I.3 Kolom F --}}
            <div class="mb-3 col-md-6">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control" id="periode" name="periode" placeholder="Periode" value="{{ $organisasi_user->periode }}" disabled/>
            </div>
            {{-- I.3 Kolom G --}}
            <div class="mb-3 col-md-6">
                <label for="lama_anggota" class="form-label">Sudah Berapa Lama Menjadi Anggota?</label>
                <input type="text" class="form-control" id="lama_anggota" name="lama_anggota" placeholder="lama_anggota" value="{{ $organisasi_user->lama_anggota }}" disabled/>
            </div>
            {{-- I.3 Kolom H --}}
            <div class="mb-3 col-md-6">
                <label for="jabatan" class="form-label">Jabatan Dalam Organisasi</label>
                <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan" value="{{ $organisasi_user->jabatan }}" disabled/>
            </div>
            {{-- I.3 Kolom I --}}
            <div class="mb-3 col-md-6">
                <label for="tingkatan_organisasi" class="form-label">Tingkatan Organisasi</label>
                <input type="text" class="form-control" id="tingkatan_organisasi" name="tingkatan_organisasi" placeholder="tingkatan_organisasi" value="{{ $organisasi_user->tingkatan_organisasi }}" disabled/>
            </div>
            {{-- I.3 Kolom J --}}
            <div class="mb-3 col-md-6">
                <label for="lingkup_organisasi" class="form-label">Lingkup Kegiatan Organisasi</label>
                <input type="text" class="form-control" id="lingkup_organisasi" name="lingkup_organisasi" placeholder="lingkup_organisasi" value="{{ $organisasi_user->lingkup_organisasi }}" disabled/>
            </div>
            {{-- I.3 Kolom K --}}
            <div class="mb-3">
                <label for="aktifitas" class="form-label">Aktifitas Dalam Organisasi</label>
                <textarea name="aktifitas" id="aktifitas" class="form-control" placeholder="Aktifitas Dalam Organisasi" rows="5" disabled>{{ $organisasi_user->aktifitas }}</textarea>
            </div>
        </div>
      </div>
      {{-- <hr class="my-0" />
      <div class="card-body">
        <div class="row pb-2">
          <div class="col-md mb-4 mb-md-0">
            <h5>Pilih Bakuan Kompetensi</h5>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengembangkan dan mewujudkan tanggungjawab
                kecendekiaan dan kepedulian profesi keinsinyuran
                kepada bangsa, negara dan komunitas
                internasional
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w111"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w111"
                    >Menyadari tanggungjawab kecendekiaan
                    Insinyur Profesional bagi memahami dan
                    menjunjung falsafah dan nilai Pancasila
                    sebagai falsafah dasar masyarakat bangsa
                    Indonesia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w112"
                    disabled
                  />
                  <label class="form-check-label" for="w112"
                    >Menghayati dan senantiasa berusaha
                    mengamalkan nilai dan jiwa Pancasila dalam
                    menjalankan profesi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w113"
                    disabled
                  />
                  <label class="form-check-label" for="w113"
                    >Berpedoman kepada konstitusi dan
                    perundang-undangan yang berlaku di Negara
                    Kesatuan Republik Indonesia dalam
                    menjalankan profesi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w114"
                    disabled
                  />
                  <label class="form-check-label" for="w114"
                    >Menjunjung rasa kesetiakawanan nasional dan
                    rasa kepedulian sosial dan berusaha
                    mendorong kewirausahaan dan kesejahteraan
                    masyarakat menuju cita-cita Bangsa dan
                    Negara</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w115"
                    disabled
                  />
                  <label class="form-check-label" for="w115"
                    >Mengembangkan wawasan kebangsaan yang kuat
                    dan dengan sadar menumbuhkan kepercayaan
                    diri membangun kemandirian nasional dalam
                    profesinya dan dalam mengembangkan kerjasama
                    di komunitas internasional</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menghayati serta mematuhi Kode Etik Insinyur
                Indonesia dan tatalaku profesi yang berlaku
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w121"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w121"
                    >Menempatkan tanggungjawab pada
                    kesejahteraan, kesehatan dan keselamatan
                    masyarakat di atas tanggungjawabnya kepada
                    profesi, kepada kepentingan golongan, atau
                    kepada rekan sesama insinyur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w122"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w122"
                    >Bertindak dengan menjunjung tinggi
                    kehormatan, martabat dan nilai luhur
                    profesi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w123"
                    disabled
                  />
                  <label class="form-check-label" for="w123"
                    >Melakukan pekerjaan, hanya dalam batasan
                    kompetensinya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w124"
                    disabled
                  />
                  <label class="form-check-label" for="w124"
                    >Mengembangkan nama baik berdasarkan
                    prestasi dan tidak bersaing secara
                    curang</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w125"
                    disabled
                  />
                  <label class="form-check-label" for="w125"
                    >Menerapkan kemampuan profesionalnya untuk
                    kepentingan pemberi kerja keinsinyuran
                    secara penuh amanah</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w126"
                    disabled
                  />
                  <label class="form-check-label" for="w126"
                    >Memberikan keterangan, pendapat atau
                    pernyataan secara obyektif berdasarkan
                    kebenaran dan dalam cakupan
                    pengetahuannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w127"
                    disabled
                  />
                  <label class="form-check-label" for="w127"
                    >Melakukan pengembangan kemampuan
                    profesional secara berkelanjutan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w128"
                    disabled
                  />
                  <label class="form-check-label" for="w128"
                    >Secara aktif membantu dan mendorong rekan
                    kerjanya untuk memajukan pengetahuan dan
                    pengalaman mereka</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami, menerapkan, serta mengembangkan
                wawasan dan kaidah-kaidah kelestarian lingkungan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w131"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w131"
                    >Menyadari bahwa saling ketergantungan dan
                    keaneka-ragaman ekosistem adalah dasar bagi
                    kelangsungan hidup manusia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w132"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w132"
                    >Menyadari keterbatasan daya dukung
                    lingkungan hidup untuk menyerap perubahan
                    yang dibuat manusia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w133"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w133"
                    >Menggalakkan tindakan keinsinyuran yang
                    diperlukan untuk memperbaiki, mempertahankan
                    dan memulihkan lingkungan hidup</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w134"
                    disabled
                  />
                  <label class="form-check-label" for="w134"
                    >Menggalakkan penggunaan yang bijaksana atas
                    sumber-daya tak terbarukan dengan
                    memperkecil atau mendaur-ulang limbah dan
                    mengembangkan sumber-daya alternatif lain
                    sejauh mungkin</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w135"
                    disabled
                  />
                  <label class="form-check-label" for="w135"
                    >Berusaha mencapai tujuan pekerjaan
                    keinsinyurannya dengan penggunaan bahan baku
                    dan enerji secara hemat dan dengan
                    menerapkan kaidah pengelolaan lingkungan
                    berkelanjutan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w136"
                    disabled
                  />
                  <label class="form-check-label" for="w136"
                    >Memperhatikan keseluruhan dampak dari
                    siklus hidup produk dan proyek terhadap
                    lingkungan hidup</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w137"
                    disabled
                  />
                  <label class="form-check-label" for="w137"
                    >Memperhitungkan pengaruh yang mungkin
                    muncul dari tindakan keinsinyuran terhadap
                    faktor budaya atau warisan sejarah</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengemban tanggungjawab profesional atas
                tindakan dan karyanya
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w141"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w141"
                    >Memperhitungkan risiko dan tanggung-gugat
                    (liabilities) profesional, dan sanggup
                    bertanggungjawab untuk itu</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w142"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w142"
                    >Menerapkan dengan tepat persyaratan
                    kesehatan dan keselamatan kerja (K-3)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w143"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w143"
                    >Menyelidiki kebutuhan keselamatan
                    masyarakat dan bertindak untuk memecahkan
                    masalah keselamatan yang mungkin
                    timbul</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w144"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w144"
                    >Mengambil tindakan pencegahan yang tepat
                    dalam menangani pekerjaan yang
                    berbahaya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w145"
                    disabled
                  />
                  <label class="form-check-label" for="w145"
                    >Memperhatikan kaidah-kaidah pencegahan dan
                    penanganan bencana alam serta pemulihan
                    akibatnya</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="data-pribadi-organisasi.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <div class="d-flex justify-content-between m-4 mt-0">
        <div>
          <a
            href="/data-pribadi/organisasi"
            class="btn btn-secondary"
            >Kembali</a
          >
        </div>
        <div>
          <button
            type="reset"
            class="btn btn-outline-primary me-2"
          >
            Reset
          </button>
          <a
            href="/data-pribadi/organisasi"
            class="btn btn-primary text-white"
            >Simpan</a
          >
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>

@endsection
