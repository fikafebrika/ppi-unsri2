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
      action="/data-pribadi/organisasi/{{ $organisasi_user->id }}"
      enctype="multipart/form-data"
    >
    @method('put')
      @csrf
      {{-- Hasil Validasi Ditampilkan, ketika data pencapaian, statusnya dah valid atau invalid --}}
      <div class="card-body">
        <div class="mb-3 col-md-12">
          <label class="form-label" for="status-validasi"
            >Hasil Validasi</label
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
        </div>
        <div class="mb-3 col-md-12">
          <label
            for="catatan_verifikator"
            class="form-label text-danger"
            >Catatan Tim Verifikator</label
          >
          <textarea
            id="catatan_verifikator"
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
                <input type="hidden" name="oldbukti" value="{{ $organisasi_user->bukti_organisasi }}">
                @if ($organisasi_user->bukti_organisasi)
                <iframe  id="pdf-preview" src="{{ asset('storage/' . $organisasi_user->bukti_organisasi) }}" width="100%" height="500px"></iframe>
                @else
                <p>Tidak ada file PDF yang diunggah.</p>
                @endif
                <input
                  class="form-control @error('bukti_organisasi') is-invalid @enderror"
                  type="file"
                  id="bukti_organisasi"
                  name="bukti_organisasi"
                  value="{{ old('bukti_organisasi', $organisasi_user->bukti_organisasi) }}"
                />
                @error('bukti_organisasi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
              </div>
             
            {{-- I.3 Kolom B --}}
            <div class="mb-3 col-md-6">
                <label for="nama_organisasi" class="form-label">Nama Organisasi</label>
                <input type="text" class="form-control @error('nama_organisasi') is-invalid @enderror" id="nama_organisasi" name="nama_organisasi" placeholder="Nama Organisasi" value="{{ old('nama_organisasi', $organisasi_user->nama_organisasi) }}"
                />
                @error('nama_organisasi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom C --}}
            <div class="mb-3 col-md-6">
                <label class="form-label" for="jenis_organisasi">Jenis Organisasi</label>
                <input type="text" class="form-control @error('jenis_organisasi') is-invalid @enderror" id="jenis_organisasi" name="jenis_organisasi" placeholder="Jenis Organisasi" value="{{ old('jenis_organisasi', $organisasi_user->jenis_organisasi) }}"/>
                @error('jenis_organisasi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom D --}}
            <div class="mb-3 col-md-6">
                <label for="kota" class="form-label">Kota</label>
                <input type="text" class="form-control @error('kota') is-invalid @enderror" id="kota" name="kota" placeholder="Kota" value="{{ old('kota', $organisasi_user->kota) }}"/>
                @error('kota')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom E --}}
            <div class="mb-3 col-md-6">
                <label for="negara" class="form-label">Negara</label>
                <input type="text" class="form-control @error('negara') is-invalid @enderror" id="negara" name="negara" placeholder="Negara" value="{{ old('negara', $organisasi_user->negara) }}"/>
                @error('negara')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom F --}}
            <div class="mb-3 col-md-6">
                <label for="periode" class="form-label">Periode</label>
                <input type="text" class="form-control @error('periode') is-invalid @enderror" id="periode" name="periode" placeholder="Periode" value="{{ old('periode', $organisasi_user->periode) }}"/>
                @error('periode')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom G --}}
            <div class="mb-3 col-md-6">
                <label for="lama_anggota" class="form-label">Sudah Berapa Lama Menjadi Anggota?</label>

                <select id="lama_anggota" name="lama_anggota" class="select2 form-select">
                    <option value="">Pilih Sudah Berapa Lama Menjadi Anggota?</option>
                    <option value="1-5" {{ old('lama_anggota', $organisasi_user->lama_anggota) == "1-5" ? ' selected' : '' }}>
                        1 - 5 Tahun
                    </option>
                    <option value="6-10" {{ old('lama_anggota', $organisasi_user->lama_anggota) == "6-10" ? ' selected' : '' }}>
                        6 - 10 Tahun
                    </option>
                    <option value="11-15" {{ old('lama_anggota', $organisasi_user->lama_anggota) == "11-15" ? ' selected' : '' }}>
                        11 - 15 Tahun
                    </option>
                    <option value="lebih-dari-15" {{ old('lama_anggota', $organisasi_user->lama_anggota) == "lebih-dari-15" ? ' selected' : '' }}>
                        15 Tahun
                    </option>


                </select>

                @error('lama_anggota')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom H --}}
            <div class="mb-3 col-md-6">
                <label for="jabatan" class="form-label">Jabatan Dalam Organisasi</label>
                <select id="jabatan" name="jabatan" class="select2 form-select">
                    <option value="">
                        Pilih Jabatan Dalam Organisasi
                    </option>
                    <option value="anggota-biasa" {{ old('jabatan', $organisasi_user->tingkatan_organisasi) == "anggota-biasa" ? ' selected' : '' }}>
                        Anggota Biasa
                    </option>
                    <option value="anggota-pengurus" {{ old('jabatan', $organisasi_user->tingkatan_organisasi) == "anggota-pengurus" ? ' selected' : '' }}>
                        Anggota Pengurus
                    </option>
                    <option value="pimpinan" {{ old('jabatan', $organisasi_user->tingkatan_organisasi) == "pimpinan" ? ' selected' : '' }}>
                        Pimpinan
                    </option>
                </select>
                @error('jabatan')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom I --}}
            <div class="mb-3 col-md-6">
                <label for="tingkatan_organisasi" class="form-label">Tingkatan Organisasi</label>
                <select id="tingkatan_organisasi" name="tingkatan_organisasi" class="select2 form-select">
                    <option value="">
                        Pilih Tingkatan Organisasi
                    </option>
                    <option value="lokal" {{ old('tingkatan_organisasi', $organisasi_user->tingkatan_organisasi) == "lokal" ? ' selected' : '' }}>
                        Organisasi Lokal (Bukan Nasional)
                    </option>
                    <option value="nasional" {{ old('tingkatan_organisasi', $organisasi_user->tingkatan_organisasi) == "nasional" ? ' selected' : '' }}>
                        Organisasi Nasional
                    </option>
                    <option value="regional" {{ old('tingkatan_organisasi', $organisasi_user->tingkatan_organisasi) == "regional" ? ' selected' : '' }}>
                        Organisasi Regional
                    </option>
                    <option value="internasional" {{ old('tingkatan_organisasi', $organisasi_user->tingkatan_organisasi) == "internasional" ? ' selected' : '' }}>
                        Organisasi Internasional
                    </option>
                </select>
                @error('tingkatan_organisasi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom J --}}
            <div class="mb-3 col-md-6">
                <label for="lingkup_organisasi" class="form-label">Lingkup Kegiatan Organisasiiiii</label>
                <select id="lingkup_organisasi" name="lingkup_organisasi" class="select2 form-select">
                    <option value="">
                        Pilih Lingkup Kegiatan Organisasi
                    </option>
                    <option value="asosiasi-profesi"{{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "asosiasi-profesi" ? ' selected' : '' }}>
                        Asosiasi Profesi
                    </option>
                    <option value="lembaga-pemerintah" {{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "lembaga-pemerintah" ? ' selected' : '' }}>
                        Lembaga Pemerintah
                    </option>
                    <option value="lembaga-pendidikan" {{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "lembaga-pendidikan" ? ' selected' : '' }}>
                        Lembaga Pendidikan
                    </option>
                    <option value="bumn" {{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "bumn" ? ' selected' : '' }}>
                        Badan Usaha Milik Negara
                    </option>
                    <option value="badan-usaha-swasta" {{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "badan-usaha-swasta" ? ' selected' : '' }}>
                        Badan Usaha Swasta
                    </option>
                    <option value="organisasi-kemasyarakatan" {{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "asosiasi-profesi" ? ' selected' : '' }}>
                        Organisasi Kemasyarakatan
                    </option>
                    <option value="lain-lain" {{ old('lingkup_organisasi', $organisasi_user->lingkup_organisasi) == "lain-lain" ? ' selected' : '' }}>Lain-lain</option>
                </select>
                @error('lingkup_organisasi')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
            </div>
            {{-- I.3 Kolom K --}}
            <div class="mb-3">
                <label for="aktifitas" class="form-label">Aktifitas Dalam Organisasi</label>
                <textarea name="aktifitas" id="aktifitas" class="form-control @error('aktifitas') is-invalid @enderror" placeholder="Aktifitas Dalam Organisasi" rows="5">{{ $organisasi_user->aktifitas }}</textarea>
                @error('aktifitas')
                <div class="invalid-feedback"> {{ $message }}</div>
                {{-- <p class="text-danger">{{ $message }}</p> --}}
                @enderror
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
    // Dapatkan elemen input file
        const pdfFileInput = document.getElementById('bukti_organisasi');

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
