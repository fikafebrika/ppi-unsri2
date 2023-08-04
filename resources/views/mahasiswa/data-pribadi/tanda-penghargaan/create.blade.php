@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Tanda Penghargaan') }}
@endsection

@section('sidebar')
@include('mahasiswa.layouts.sidebar')
@endsection

@section('content')
<div class="card">
    <h5 class="card-header pb-0">Data Pencapaian</h5>
    <form
      id="formAccountSettings"
      method="POST"
      action="/data-pribadi/tanda-penghargaan"
      enctype="multipart/form-data"
    >
    @csrf
      {{-- Hasil Validasi Ditampilkan, ketika data pencapaian, statusnya dah valid atau invalid --}}
      {{-- <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="hasil-validasi"
            >Hasil Validasi</label
          >
          <select
            id="hasil-validasi"
            class="select2 form-select bg-white" disabled
          >
            <option value="">
              Pilih Hasil Validasi Anda Terhadap Pencapaian
              Mahasiswa
            </option>
            <option value="invalid" class="text-danger fw-bold">
              INVALID (*Bila ada kesalahan pada pencapaian
              mahasiswa atau ada pencapaian yang tidak sesuai)
            </option>
            <option value="valid" class="text-success fw-bold" selected>
              VALID (*Bila semua pencapaian mahasiswa telah
              sesuai)
            </option>
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
          >Tidak Ada</textarea>
        </div>
      </div>
      <hr class="my-0" /> --}}
      <div class="card-body pb-3">
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="bukti_penghargaan" class="form-label"
                  >Upload Bukti</label
                >
                <div id="pdf-preview"></div>
                <input
                  class="form-control @error('bukti_penghargaan') is-invalid @enderror"
                  type="file"
                  id="bukti_penghargaan"
                  name="bukti_penghargaan"
                  value="{{ old('bukti_penghargaan') }}"
                  onchange="previewPDF(this)"
                />
                @error('bukti_penghargaan')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
              </div>
            {{-- I.4 Kolom B --}}
            <div class="mb-3 col-md-6">
                <label for="tahun" class="form-label"
                  >Tahun</label
                >
                <input
                  type="text"
                  class="form-control @error('tahun') is-invalid @enderror"
                  id="tahun"
                  name="tahun"
                  placeholder="Tahun"
                  value="{{ old('tahun') }}"
                />
                @error('tahun')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.4 Kolom C --}}
            <div class="mb-3">
                <label for="nama_penghargaan" class="form-label"
                  >Nama Tanda Penghargaan</label
                >
                <input
                  class="form-control @error('nama_penghargaan') is-invalid @enderror"
                  type="text"
                  id="nama_penghargaan"
                  name="nama_penghargaan"
                  placeholder="Nama Tanda Penghargaan"
                  value="{{ old('nama_penghargaan') }}"

                />
                @error('nama_penghargaan')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.4 Kolom D --}}
            <div class="mb-3 col-md-6">
                <label for="nama_lembaga_pemberi" class="form-label"
                  >Nama Lembaga yang Memberikan</label
                >
                <input
                  type="text"
                  class="form-control @error('nama_lembaga_pemberi') is-invalid @enderror"
                  id="nama_lembaga_pemberi"
                  name="nama_lembaga_pemberi"
                  placeholder="Nama Lembaga yang Memberikan"
                  value="{{ old('nama_lembaga_pemberi') }}"

                />
                @error('nama_lembaga_pemberi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.4 Kolom E --}}
            <div class="mb-3 col-md-6">
                <label for="lokasi" class="form-label"
                  >Lokasi</label
                >
                <input
                  type="text"
                  class="form-control @error('lokasi') is-invalid @enderror"
                  id="lokasi"
                  name="lokasi"
                  placeholder="Lokasi"
                  value="{{ old('lokasi') }}"

                />
                @error('lokasi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.4 Kolom F --}}
            <div class="mb-3 col-md-6">
                <label for="negara" class="form-label"
                  >Negara</label
                >
                <input
                  type="text"
                  class="form-control @error('negara') is-invalid @enderror"
                  id="negara"
                  name="negara"
                  placeholder="Negara"
                  value="{{ old('negara') }}"

                />
                @error('negara')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.4 Kolom G --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="tingkat_penghargaan"
                >Penghargaan yang Diterima Tingkat</label
                >
                <select
                id="tingkat_penghargaan"
                name="tingkat_penghargaan"
                class="select2 form-select"
                >
                <option value="">
                    Pilih Penghargaan yang Diterima Tingkat
                </option>
                <option value="pratama" {{ old('tingkat_penghargaan') == "pratama" ? ' selected' : '' }}>
                    Tingkatan Muda/ Pratama
                </option>
                <option value="madya" {{ old('tingkat_penghargaan') == "madya" ? ' selected' : '' }}>
                    Tingkatan Madya
                </option>
                <option value="utama" {{ old('tingkat_penghargaan') == "utama" ? ' selected' : '' }}>
                    Tingkatan Utama
                </option>
                </select>
            </div>
            {{-- I.4 Kolom H --}}
            <div class="mb-3 col-md-6">
                <label for="tingkatan_lembaga" class="form-label"
                >Penghargaan Diberikan Oleh Lembaga</label
                >
                <select
                id="tingkatan_lembaga"
                name="tingkatan_lembaga"
                class="select2 form-select"
                >
                <option value="">Pilih Penghargaan Diberikan Oleh Lembaga</option>
                <option value="lokal" {{ old('tingkatan_lembaga') == "lokal" ? ' selected' : '' }}>
                    Penghargaan Lokal
                </option>
                <option value="nasional" {{ old('tingkatan_lembaga') == "nasional" ? ' selected' : '' }}>
                    Penghargaan Nasional
                </option>
                <option value="regional" {{ old('tingkatan_lembaga') == "regional" ? ' selected' : '' }}>
                    Penghargaan Regional
                </option>
                <option value="internasional" {{ old('tingkatan_lembaga') == "internasional" ? ' selected' : '' }}>
                    Penghargaan Internasional
                </option>
                </select>
            </div>
            {{-- I.4 Kolom I --}}
            <div class="mb-3">
                <label for="uraian" class="form-label"
                >Uraian Singkat Tanda Penghargaan</label
                >
                <textarea
                id="uraian"
                name="uraian"
                class="form-control @error('uraian') is-invalid @enderror"
                placeholder="Uraian Singkat Tanda Penghargaan"
                rows="5"

                >{{ old('uraian') }}</textarea>
                @error('uraian')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- <div class="mb-3 col-md-6">
                <label for="bukti" class="form-label"
                >Upload Bukti Tanda Penghargaan</label
                >
                <input
                class="form-control"
                type="file"
                id="bukti"
                disabled
                />
            </div> --}}
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
            href="data-pribadi-penghargaan.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <div class="d-flex justify-content-between m-4 mt-0">
        <div>
          <a
            href="/data-pribadi/tanda-penghargaan"
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
          <button
            type="submit"
            class="btn btn-primary text-white"
            >Simpan</button
          >
        </div>
      </div>
    </form>
    <!-- /Account -->
  </div>
  <script>
    function previewPDF(input) {
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            const pdfPreview = document.getElementById('pdf-preview');
            pdfPreview.innerHTML = `<iframe src="${reader.result}" width="100%" height="500px"></iframe>`;
        }

        if (file) {
            reader.readAsDataURL(file);
        } else {
            const pdfPreview = document.getElementById('pdf-preview');
            pdfPreview.innerHTML = '';
        }
    }
  </script>
@endsection

