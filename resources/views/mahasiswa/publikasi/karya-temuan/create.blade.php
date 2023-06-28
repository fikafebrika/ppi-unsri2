@extends('mahasiswa.layout')

@section('pageHeading')
  {{ __('Karya Temuan') }}
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
      action="/publikasi/karya-temuan"
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
                <label for="bukti_karya_temuan" class="form-label"
                  >Upload Bukti</label
                >
                <div id="pdf-preview"></div>
                <input
                  class="form-control @error('bukti_karya_temuan') is-invalid @enderror"
                  type="file"
                  id="bukti_karya_temuan"
                  name="bukti_karya_temuan"
                  onchange="previewPDF(this)"
                />
                @error('bukti_karya_temuan')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
              </div>
            {{-- V.4 KOLOM B --}}
            <div class="mb-3 col-md-6">
                <label for="bulan_tahun" class="form-label"
                  >Bulan - Tahun</label
                >
                <input
                  type="text"
                  class="form-control @error('bulan_tahun') is-invalid @enderror"
                  id="bulan_tahun"
                  name="bulan_tahun"
                  placeholder="Bulan - Tahun"
                  value="{{ old('bulan_tahun') }}"

                />
                @error('bulan_tahun')
                <div class="invalid-feedback"> {{ $message }}</div>
                @enderror
              </div>
          {{-- V.4 KOLOM C --}}
              <div class="mb-3">
            <label for="judul_karya_temuan" class="form-label"
              >Judul/ Nama Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Terbaru</label
            >
            <input
              class="form-control @error('judul_karya_temuan') is-invalid @enderror"
              type="text"
              id="judul_karya_temuan"
              name="judul_karya_temuan"
              placeholder="Judul/ Nama Krya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru"
              value="{{ old('judul_karya_temuan') }}"

            />
            @error('judul_karya_temuan')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
          </div>
          {{-- V.4 KOLOM D --}}
          <div class="mb-3">
            <label for="uraian" class="form-label"
              >Uraian Singkat Karya Temuan/ Inovasi/
              Paten</label
            >
            <textarea
              name="uraian"
              id="uraian"
              class="form-control @error('uraian') is-invalid @enderror"
              placeholder="Uraian Singkat Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru" rows="5"

            >{{ old('uraian') }}</textarea>
            @error('uraian')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
          </div>
          {{-- V.4 KOLOM E --}}
          <div class="mb-3 col-md-6">
            <label for="nama_media" class="form-label"
              >Media Publikasi Karya (Kalau Ada)</label
            >
            <input
              class="form-control @error('nama_media') is-invalid @enderror"
              type="text"
              id="nama_media"
              name="nama_media"
              placeholder="Media Publikasi Karya (Kalau Ada)"
              value="{{ old('nama_media') }}"

            />
            @error('nama_media')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
          </div>
          {{-- V.4 KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkatan_media"
              >Media Publikasi Tingkat</label
            >
            <select
              id="tingkatan_media"
              name="tingkatan_media"
              class="select2 form-select"

            >
              <option value="">
                Pilih Media Publikasi Tingkat
              </option>
              <option value="lokal" {{ old('tingkatan_media') == "lokal" ? ' selected' : '' }}>
                Dipublikasikan di Media Lokal
              </option>
              <option value="nasional" {{ old('tingkatan_media') == "nasional" ? ' selected' : '' }}>
                Dipublikasikan di Media Nasiona
              </option>
              <option value="regional-internasional" {{ old('tingkatan_media') == "regional-internasional" ? ' selected' : '' }}>
                Dipublikasikan di Media Regional/ Internasional
              </option>

            </select>
          </div>
          {{-- V.4 KOLOM G --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkat_kesulitan"
              >Tingkat Kesulitan dan Manfaatnya Karya Temuan/
              Inovasi/ Paten dan Implementasi Tingkat Terbaru</label
            >
            <select
              id="tingkat_kesulitan"
              name="tingkat_kesulitan"
              class="select2 form-select"

            >
              <option value="">
                Pilih Tingkat Kesulitan dan Manfaatnya Karya
                Temuan/ Inovasi/ Paten dan Implementasi
                Teknologi Baru
              </option>
              <option value="rendah" {{ old('tingkat_kesulitan') == "rendah" ? ' selected' : '' }}>
                Rendah
              </option>
              <option value="sedang" {{ old('tingkat_kesulitan') == "sedang" ? ' selected' : '' }}>
                Sedang
              </option>
              <option value="tinggi" {{ old('tingkat_kesulitan') == "tinggi" ? ' selected' : '' }}>
                Tinggi
              </option>
              <option value="sangat-tinggi" {{ old('tingkat_kesulitan') == "sangat-tinggi" ? ' selected' : '' }}>
                Sangat Tinggi
              </option>
            </select>
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
                Melakukan penelitian
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p611"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p611"
                    >Mengidentifikasi kebutuhan
                    penelitian</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p612"
                    disabled
                  />
                  <label class="form-check-label" for="p612"
                    >Melakukan kajian pustaka</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p613"
                    disabled
                  />
                  <label class="form-check-label" for="p613"
                    >Melakukan penelitian dasar dan atau
                    terapan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p614"
                    disabled
                  />
                  <label class="form-check-label" for="p614"
                    >Mencari pengetahuan baru</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p615"
                    disabled
                  />
                  <label class="form-check-label" for="p615"
                    >Menemu-kenali dan menyampaikan hasil
                    penelitian</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Merumuskan konsep pengembangan hasil penelitian
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p621"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p621"
                    >Menemu-kenali kebutuhan pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p622"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p622"
                    >Memeriksa konsep-konsep yang mempunyai
                    kemungkinan untuk dilaksanakan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p623"
                    disabled
                  />
                  <label class="form-check-label" for="p623"
                    >Memilih konsep yang akan dikembangkan lebih
                    lanjut</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Menemu-kenali dan mengusahakan sumber daya untuk
                pengembangan hasil penelitian
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p631"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p631"
                    >Merumuskan kebutuhan akhir pemakai</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p632"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p632"
                    >Menyiapkan usulan untuk mencari sumber daya
                    bagi pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p633"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p633"
                    >Menyiapkan perkiraan biaya untuk
                    pengembangan, perancangan, produksi atau
                    konstruksi, dan operasi</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Melakukan kaji pasar untuk produk hasil
                penelitian dan pengembangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p641"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p641"
                    >Merumuskan ciri-ciri produk yang diinginkan
                    pasar</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p642"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p642"
                    >Mengumpulkan informasi dan membuat
                    rekomendasi untuk menentukan harga
                    produk</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p643"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p643"
                    >Membuat rekomendasi mengenai distribusi
                    produk</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p644"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p644"
                    >Membuat rekomendasi untuk mempromosikan
                    produk</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengkomersialkan hasil penelitian dan
                pengembangan
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p651"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p651"
                    >Melakukan kaji-nilai ekonomis atas produk
                    hasil penelitian dan pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p652"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p652"
                    >Memilih mekanisme yang cocok untuk
                    memasarkan produk hasil penelitian dan
                    pengembangan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p653"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p653"
                    >Menyiapkan model peragaan untuk membuktikan
                    kelayakan teknis dan komersial</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="p654"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="p654"
                    >Mengembangkan rencana proyek percontohan
                    untuk membuktikan kelayakan teknis dan
                    komersial</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="publikasi-temuan.html"
            class="btn btn-secondary me-2 text-white"
            >Kembali</a
          >
        </div>
      </div> --}}
      <div class="d-flex justify-content-between m-4 mt-0">
        <div>
          <a
            href="/publikasi/karya-temuan"
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

