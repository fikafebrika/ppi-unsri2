@extends('verifikator.layout')

@section('pageHeading')
  {{ __('Makalah') }}
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
      action="/verifikator/publikasi/makalah/{{ $makalah_user->id }}/edit"
    >
    @method('put')
    @csrf
      <div class="card-body pb-3">
        <div class="row">
            {{-- V.2 KOLOM B --}}
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
                  value="{{ old('bulan_tahun', $makalah_user->bulan_tahun) }}"
                  disabled
                />
              </div>
          {{-- V.2 KOLOM C --}}
              <div class="mb-3">
            <label for="judul_makalah" class="form-label"
              >Judul Makalah/ Tulisan</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="judul_makalah"
              name="judul_makalah"
              placeholder="Judul Makalah/ Tulisan"
              value="{{ old('judul_makalah', $makalah_user->judul_makalah) }}"
              disabled
            />
          </div>
          {{-- V.2 KOLOM D --}}
          <div class="mb-3 col-md-6">
            <label for="nama_makalah" class="form-label"
              >Nama Seminar/ Lokakarya</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="nama_makalah"
              name="nama_makalah"
              placeholder="Nama Seminar/ Lokakarya"
              value="{{ old('nama_makalah', $makalah_user->nama_makalah) }}"
              disabled
            />
          </div>
          {{-- V.2 KOLOM E --}}
          <div class="mb-3 col-md-6">
            <label for="penyelenggara" class="form-label"
              >Penyelenggara</label
            >
            <input
              class="form-control bg-white"
              type="text"
              id="penyelenggara"
              name="penyelenggara"
              placeholder="Penyelenggara"
              value="{{ old('penyelenggara', $makalah_user->penyelenggara) }}"
              disabled
            />
          </div>
          {{-- V.2 KOLOM F --}}
          <div class="mb-3 col-md-6">
            <label for="lokasi" class="form-label"
              >Lokasi</label
            >
            <input
              type="text"
              class="form-control bg-white"
              id="lokasi"
              name="lokasi"
              placeholder="Lokasi"
              value="{{ old('lokasi', $makalah_user->lokasi) }}"
              disabled
            />
          </div>
          {{-- V.2 KOLOM G --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkatan_makalah"
              >Seminar/ Lokakarya Tingkat</label
            >
            <select
              id="tingkatan_makalah"
              name="tingkatan_makalah"
              class="select2 form-select bg-white"
              disabled
            >
            <option value="nasional" {{ old('tingkatan_makalah', $makalah_user->tingkatan_makalah) == "nasional" ? ' selected' : '' }}>
              Pada Seminar Nasional
            </option>
            <option value="internasional" {{ old('tingkatan_makalah', $makalah_user->tingkatan_makalah) == "internasional" ? ' selected' : '' }}>
              Pada Seminar Internasional
            </option>
            </select>
          </div>
          {{-- V.2 KOLOM H --}}
          <div class="mb-3 col-md-6">
            <label class="form-label" for="tingkat_kesulitan"
              >Tingkat Kesulitan dan Manfaatnya Materi Seminar/
              Lokakarya</label
            >
            <select
              id="tingkat_kesulitan"
              name="tingkat_kesulitan"
              class="select2 form-select bg-white"
              disabled
            >
            <option value="rendah" {{ old('tingkat_kesulitan', $makalah_user->tingkat_kesulitan) == "rendah" ? ' selected' : '' }}>
              Rendah
            </option>
            <option value="sedang" {{ old('tingkat_kesulitan', $makalah_user->tingkat_kesulitan) == "sedang" ? ' selected' : '' }}>
              Sedang
            </option>
            <option value="tinggi" {{ old('tingkat_kesulitan', $makalah_user->tingkat_kesulitan) == "tinggi" ? ' selected' : '' }}>
              Tinggi
            </option>
            <option value="sangat-tinggi" {{ old('tingkat_kesulitan', $makalah_user->tingkat_kesulitan) == "sangat-tinggi" ? ' selected' : '' }}>
              Sangat Tinggi
            </option>
            </select>
          </div>
          {{-- V.2 KOLOM I --}}
          <div class="mb-3">
            <label for="uraian" class="form-label"
              >Uraian Singkat Materi Makalah/ Tulisan</label
            >
            <textarea
              name="uraian"
              id="uraian"
              class="form-control bg-white"
              placeholder="Uraian Singkat Materi Makalah/ Tulisan"
              disabled rows="5"
            >{{ old('uraian', $makalah_user->uraian) }}</textarea>
          </div>
          <div class="mb-3">
            <label for="bukti" class="form-label"
              >Bukti Pencapaian</label
            >
            <div>
              @if ($makalah_user->bukti_makalah)
              <iframe  id="pdf-preview" src="{{ asset('storage/' . $makalah_user->bukti_makalah) }}" width="50%" height="500px"></iframe>
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
                Menerapkan kaidah-kaidah manajemen atas diri
                sendiri
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w411"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w411"
                    >Melakukan pengembangan diri dalam kemampuan
                    di bidang manajemen, termasuk hukum, ekonomi
                    dan sosial</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w412"
                    disabled
                  />
                  <label class="form-check-label" for="w412"
                    >Menentukan sasaran bagi diri sendiri dalam
                    mencapai tujuan kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w413"
                    disabled
                  />
                  <label class="form-check-label" for="w413"
                    >Menerapkan pengelolaan waktu dan tatakerja
                    yang efektif</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w414"
                    disabled
                  />
                  <label class="form-check-label" for="w414"
                    >Melakukan pengembangan diri dalam
                    kepemimpinan dan kerjasama kelompok</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w415"
                    disabled
                  />
                  <label class="form-check-label" for="w415"
                    >Melakukan pengembangan diri dalam cara
                    berpikir yang berwawasan luas, analitis dan
                    kreatif</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah
                pengelolaan pekerjaan keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w421"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w421"
                    >Melakukan tugas perencanaan dan pemantauan
                    proyek</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w422"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w422"
                    >Mengembangkan uraian rincian pekerjaan yang
                    terstruktur</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w423"
                    disabled
                  />
                  <label class="form-check-label" for="w423"
                    >Menyiapkan jadwal pekerjaan dan jalur
                    kritisnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w424"
                    disabled
                  />
                  <label class="form-check-label" for="w424"
                    >Memantau kemajuan, menyelidiki penyimpangan
                    dari jadwal dan memulai tindakan
                    perbaikan</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Memahami dan menerapkan kaidah-kaidah
                kepemimpinan dalam pekerjaan keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w431"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w431"
                    >Melakukan penilaian kinerja bawahan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w432"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w432"
                    >Mematuhi prinsip keadilan dan
                    kebersamaan</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w433"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w433"
                    >Menggalang lingkungan hubungan kerja yang
                    efektif</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w434"
                    disabled
                  />
                  <label class="form-check-label" for="w434"
                    >Mengorganisasikan kelompok-kelompok
                    kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w435"
                    disabled
                  />
                  <label class="form-check-label" for="w435"
                    >Memimpin insinyur muda, teknisi atau tenaga
                    bawahan lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w436"
                    disabled
                  />
                  <label class="form-check-label" for="w436"
                    >Menghargai ataupun menghukum sesuai dengan
                    kinerja (on-merit)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w437"
                    disabled
                  />
                  <label class="form-check-label" for="w437"
                    >Memantau tugas-tugas untuk menjamin bahwa
                    kegiatan dilaksanakan sesuai rencana dan
                    mengambil tindakan perbaikan yang
                    perlu</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Berkomunikasi dengan efektif
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w441"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w441"
                    >Berkomunikasi dengan baik, benar dan lancar
                    untuk menyampaikan pendapat secara lisan
                    maupun tertulis dalam bahasa
                    Indonesia</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w442"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w442"
                    >Menyiapkan, menafsirkan dan memaparkan
                    informasi</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w443"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w443"
                    >Berhubungan dengan rekan dan pakar di dalam
                    dan di luar kalangannya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w444"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w444"
                    >Mengartikan dengan benar instruksi
                    keinsinyuran yang diterima</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w445"
                    disabled
                  />
                  <label class="form-check-label" for="w445"
                    >Memberikan instruksi yang jelas, cermat dan
                    tepat kepada bawahan dalam suatu bahasa
                    asing yang lazim dipergunakan di bidang
                    keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w446"
                    disabled
                  />
                  <label class="form-check-label" for="w446"
                    >Memilih media dan cara komunikasi yang
                    tepat guna</label
                  >
                </div>
              </div>
            </div>
            <div class="card mt-2">
              <h6 class="card-header pb-3">
                Mengelola informasi keinsinyuran
              </h6>
              <div class="card-body pb-3">
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w451"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w451"
                    >Menyiapkan dan menyajikan ceramah
                    (lectures) pada suatu tingkat
                    profesional</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w452"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w452"
                    >Menyiapkan tulisan untuk diterbitkan dalam
                    berkala keinsinyuran</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w453"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w453"
                    >Menyampaikan informasi keinsinyuran secara
                    efektif kepada kalangan keinsinyuran dan
                    kalangan lainnya</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w454"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w454"
                    >Meneruskan informasi keinsinyuran secara
                    efektif kepada atasan (insinyur maupun
                    bukan)</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w455"
                    checked
                    disabled
                  />
                  <label class="form-check-label" for="w455"
                    >Melakukan perundingan, penyelesaian
                    sengketa, pembinaan, pertukar-pikiran serta
                    menyatakan pendapat dan sikap</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w456"
                    disabled
                  />
                  <label class="form-check-label" for="w456"
                    >Menyiapkan laporan keinsinyuran
                    professional, seperti laporan kemajuan
                    pekerjaan, secara baik dan benar</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w457"
                    disabled
                  />
                  <label class="form-check-label" for="w457"
                    >Menyiapkan dokumen seperti spesifikasi,
                    bakuan dan paparan grafis</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w458"
                    disabled
                  />
                  <label class="form-check-label" for="w458"
                    >Menyiapkan dokumen yang lebih kompleks
                    seperti analisis dampak lingkungan atau
                    kontrak kerja</label
                  >
                </div>
                <div class="form-check">
                  <input
                    class="form-check-input"
                    type="checkbox"
                    value=""
                    id="w459"
                    disabled
                  />
                  <label class="form-check-label" for="w459"
                    >Menafsirkan dengan benar gambar teknik
                    serta grafik, spesifikasi, bakuan,
                    peraturan, pedoman praktek dan analisis
                    dampak lingkungan</label
                  >
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-4">
          <a
            href="publikasi-makalah.html"
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
          <option value="" {{ old('status_validasi', $makalah_user->status_validasi) == "" ? ' selected' : '' }} class="text-warning fw-bold">
            PENDING (*Pilih Hasil Validasi Anda Terhadap Pencapaian
            Mahasiswa)
            </option>
            <option value="invalid" {{ old('status_validasi', $makalah_user->status_validasi) == "invalid" ? ' selected' : '' }} class="text-danger fw-bold">
              INVALID (*Bila ada kesalahan pada pencapaian
              mahasiswa atau ada pencapaian yang tidak sesuai)
            </option>
            <option value="valid" {{ old('status_validasi', $makalah_user->status_validasi) == "valid" ? ' selected' : '' }} class="text-success fw-bold">
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
          >{{ old('catatan_verifikator', $makalah_user->catatan_verifikator) }}</textarea>
        </div>
        <div class="mt-4 d-flex justify-content-between">
          <div class="me-2">
            <a href="/verifikator/publikasi/makalah" class="btn btn-secondary"
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
        const pdfFileInput = document.getElementById('bukti_makalah');

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

