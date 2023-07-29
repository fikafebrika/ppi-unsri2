@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Karya Temuan') }}
@endsection

@section('sidebar')
@include('verifikator.partials.sidebar-detail', ["userId" => $userId ])
@endsection

@section('content')
<div class="card">
  <h5 class="card-header">Data Pencapaian</h5>
    <form
      id="formAccountSettings"
      method="POST"
      action="/verifikator/publikasi/karya-temuan/{{ $karya_temuan_user->id }}/edit"
    >
    @method('put')
      @csrf
      <div class="card-body pb-3">
        <div class="row">
            {{-- V.4 KOLOM B --}}
            <div class="mb-3 col-md-6">
                <label for="bulan_tahun" class="form-label"
                  >Bulan - Tahun</label
                >
                <input
                  type="text"
                  class="form-control bg-white"
                  id="bulan_tahun"
                  name="bulan_tahun"
                  placeholder="Bulan - Tahun"
                  value="{{ old('lokasi', $karya_temuan_user->bulan_tahun) }}"
                  disabled
                />
              </div>
          {{-- V.4 KOLOM C --}}
              <div class="mb-3">
            <label for="judul_karya_temuan" class="form-label"
              >Judul/ Nama Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Terbaru</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="judul_karya_temuan"
              name="judul_karya_temuan"
              placeholder="Judul/ Nama Krya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru"
              value="{{ old('judul_karya_temuan', $karya_temuan_user->judul_karya_temuan) }}"
              disabled
            />
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
              class="form-control bg-white"
              placeholder="Uraian Singkat Karya Temuan/ Inovasi/ Paten dan Implementasi Teknologi Baru" rows="5"
              disabled
            >{{ old('uraian', $karya_temuan_user->uraian) }}</textarea>
          </div>
          {{-- V.4 KOLOM E --}}
          <div class="mb-3 col-md-6">
            <label for="nama_media" class="form-label"
              >Media Publikasi Karya (Kalau Ada)</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="nama_media"
              name="nama_media"
              placeholder="Media Publikasi Karya (Kalau Ada)"
              value="{{ old('nama_media', $karya_temuan_user->nama_media) }}"
              disabled
            />
          </div>
          {{-- V.4 KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkatan_media"
              >Media Publikasi Tingkat</label
            >
            <select
              id="tingkatan_media"
              name="tingkatan_media"
              class="select2 form-select bg-white"
              disabled
            >
            <option value="lokal" {{ old('tingkatan_media', $karya_temuan_user->tingkatan_media) == "lokal" ? ' selected' : '' }}>
              Dipublikasikan di Media Lokal
            </option>
            <option value="nasional" {{ old('tingkatan_media', $karya_temuan_user->tingkatan_media) == "nasional" ? ' selected' : '' }}>
              Dipublikasikan di Media Nasional
            </option>
            <option value="regional-internasional" {{ old('tingkatan_media', $karya_temuan_user->tingkatan_media) == "regional-internasional" ? ' selected' : '' }}>
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
              class="select2 form-select bg-white"
              disabled
            >
            <option value="rendah" {{ old('tingkat_kesulitan', $karya_temuan_user->tingkat_kesulitan) == "rendah" ? ' selected' : '' }}>
              Rendah
            </option>
            <option value="sedang" {{ old('tingkat_kesulitan', $karya_temuan_user->tingkat_kesulitan) == "sedang" ? ' selected' : '' }}>
              Sedang
            </option>
            <option value="tinggi" {{ old('tingkat_kesulitan', $karya_temuan_user->tingkat_kesulitan) == "tinggi" ? ' selected' : '' }}>
              Tinggi
            </option>
            <option value="sangat-tinggi" {{ old('tingkat_kesulitan', $karya_temuan_user->tingkat_kesulitan) == "sangat-tinggi" ? ' selected' : '' }}>
              Sangat Tinggi
            </option>
            </select>
          </div>
          <div class="mb-3">
            <label for="bukti" class="form-label"
              >Bukti Pencapaian</label
            >
            <div>
              @if ($karya_temuan_user->bukti_karya_temuan)
              <iframe  id="pdf-preview" src="{{ asset('storage/' . $karya_temuan_user->bukti_karya_temuan) }}" width="50%" height="500px"></iframe>
              @else
              <p>Tidak ada file PDF yang diunggah.</p>
              @endif
            </div>
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
      <hr class="my-0" />
      <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="status_validasi"
            >Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa</label
          >
          <select
            id="status_validasi"
            name="status_validasi"
            class="select2 form-select"
          >
          <option value="" {{ old('status_validasi', $karya_temuan_user->status_validasi) == "" ? ' selected' : '' }} class="text-warning fw-bold">
            PENDING (*Pilih Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa)
            </option>
            <option value="invalid" {{ old('status_validasi', $karya_temuan_user->status_validasi) == "invalid" ? ' selected' : '' }} class="text-danger fw-bold">
              INVALID (*Bila ada kesalahan pada pencapaian
              mahasiswa atau ada pencapaian yang tidak sesuai)
            </option>
            <option value="valid" {{ old('status_validasi', $karya_temuan_user->status_validasi) == "valid" ? ' selected' : '' }} class="text-success fw-bold">
              VALID (*Bila semua pencapaian mahasiswa telah
              sesuai)
            </option>
          </select>
        </div>
        <div class="mb-3 col-md-12">
          <label
            for="catatan_verifikator"
            class="form-label text-danger"
            >Catatan Tim Verifikator (*Bila Ada)</label
          >
          <textarea
            id="catatan_verifikator"
            name="catatan_verifikator"
            class="form-control"
            placeholder="Berikan Catatan Kepada Mahasiswa Terkait Kesesuaian Maupun Kesalahan Dalam Mengklaim Pencapaian Mahasiswa"
            rows="5"
          >{{ old('catatan_verifikator', $karya_temuan_user->catatan_verifikator) }}</textarea>
        </div>
        <div class="mt-4 d-flex justify-content-between">
          <div class="me-2">
            <a href="/verifikator/publikasi/karya-temuan" class="btn btn-secondary"
              >Kembali</a
            >
          </div>
          <div class="d-flex">
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
      </div>
    </form>
    <!-- /Account -->
  </div>
  <script>
    // Dapatkan elemen input file
        const pdfFileInput = document.getElementById('bukti_karya_temuan');

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

