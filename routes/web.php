<?php

use App\Http\Controllers\BahasaController;
use App\Http\Controllers\KartuHasilStudiMahasiswaController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\KaryaTemuanController;
use App\Http\Controllers\KualifikasiProfesionalController;
use App\Http\Controllers\LoginAdminController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;
use App\Http\Controllers\MakalahController;
use App\Http\Controllers\OrganisasiController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PendidikanFormalController;
use App\Http\Controllers\PengalamanMengajarController;
use App\Http\Controllers\PengertianController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekognisiPencapaianController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\TandaPenghargaanController;
use App\Http\Controllers\Verifikator\BahasaVerifikatorController;
use App\Http\Controllers\Verifikator\DashboardVerifikatorController;
use App\Http\Controllers\Verifikator\KaryaTemuanVerifikatorController;
use App\Http\Controllers\Verifikator\KaryaTulisVerifikatorController;
use App\Http\Controllers\Verifikator\KualifikasiProfesionalVerifikatorController;
use App\Http\Controllers\Verifikator\MakalahVerifikatorController;
use App\Http\Controllers\Verifikator\OrganisasiVerifikatorController;
use App\Http\Controllers\Verifikator\PelatihanVerifikatorController;
use App\Http\Controllers\Verifikator\PendidikanFormalVerifikatorController;
use App\Http\Controllers\Verifikator\PengalamanMengajarVerifikatorController;
use App\Http\Controllers\Verifikator\PengertianVerifikatorController;
use App\Http\Controllers\Verifikator\ReferensiVerifikatorController;
use App\Http\Controllers\Verifikator\SeminarVerifikatorController;
use App\Http\Controllers\Verifikator\SertifikatVerifikatorController;
use App\Http\Controllers\Verifikator\TandaPenghargaanVerifikatorController;
use App\Http\Controllers\VerifikatorAdminController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/admin')->group(function () {
    Route::get('/login', function () {
        return view('admin.login.login');
    });

    Route::get('/beranda', function () {
        return view('admin.index');
    });

    Route::resource('/verifikator', VerifikatorAdminController::class);
});

Route::prefix('/verifikator')->group(function () {

    Route::get('/login', [LoginAdminController::class, 'index'])->name('login');

    Route::post('/login', [LoginAdminController::class, 'authenticate'])->name('login');

    Route::get('/beranda', [DashboardVerifikatorController::class, 'index'])->middleware('auth');

    Route::prefix('/data-pribadi')->group(function () {

        Route::get('/pendidikan-formal/{id}', [PendidikanFormalVerifikatorController::class, 'showPendidikanFormal'])->middleware('auth');

        Route::get('/pendidikan-formal/{id}/edit', [PendidikanFormalVerifikatorController::class, 'showDetailPendidikanFormal']);

        Route::put('/pendidikan-formal/{id}/edit', [PendidikanFormalVerifikatorController::class, 'updateDetailPendidikanFormal']);

        Route::get('/organisasi/{id}', [OrganisasiVerifikatorController::class, 'showOrganisasi'])->middleware('auth');

        Route::get('/organisasi/{id}/edit', [OrganisasiVerifikatorController::class, 'showDetailOrganisasi'])->middleware('auth');

        Route::put('/organisasi/{id}/edit', [OrganisasiVerifikatorController::class, 'updateDetailOrganisasi'])->middleware('auth');

        Route::get('/tanda-penghargaan/{id}', [TandaPenghargaanVerifikatorController::class, 'showTandaPenghargaan'])->middleware('auth');

        Route::get('/tanda-penghargaan/{id}/edit', [TandaPenghargaanVerifikatorController::class, 'showDetailTandaPenghargaan'])->middleware('auth');

        Route::put('/tanda-penghargaan/{id}/edit', [TandaPenghargaanVerifikatorController::class, 'updateDetailTandaPenghargaan'])->middleware('auth');


        Route::get('/sertifikat/{id}', [SertifikatVerifikatorController::class, 'showSertifikat'])->middleware('auth');

        Route::get('/sertifikat/{id}/edit', [SertifikatVerifikatorController::class, 'showDetailSertifikat'])->middleware('auth');

        Route::put('/sertifikat/{id}/edit', [SertifikatVerifikatorController::class, 'updateDetailSertifikat'])->middleware('auth');

        Route::get('/pelatihan/{id}', [PelatihanVerifikatorController::class, 'showPelatihan'])->middleware('auth');

        Route::get('/pelatihan/{id}/edit', [PelatihanVerifikatorController::class, 'showDetailPelatihan'])->middleware('auth');

        Route::put('/pelatihan/{id}/edit', [PelatihanVerifikatorController::class, 'updateDetailPelatihan'])->middleware('auth');
    });

    Route::prefix('/kode-etik-insinyur')->group(function () {

        Route::get('/referensi/{id}', [ReferensiVerifikatorController::class, 'showReferensi'])->middleware('auth');

        Route::get('/referensi/{id}/edit', [ReferensiVerifikatorController::class, 'showDetailReferensi'])->middleware('auth');

        Route::put('/referensi/{id}/edit', [ReferensiVerifikatorController::class, 'updateDetailReferensi'])->middleware('auth');

        Route::get('/pengertian/{id}', [PengertianVerifikatorController::class, 'showPengertian'])->middleware('auth');

        Route::get('/pengertian/{id}/edit', [PengertianVerifikatorController::class, 'showDetailPengertian'])->middleware('auth');

        Route::put('/pengertian/{id}/edit', [PengertianVerifikatorController::class, 'updateDetailPengertian'])->middleware('auth');
    });

    Route::get('/kualifikasi-profesional/{id}', [KualifikasiProfesionalVerifikatorController::class, 'showKualifikasiProfesional'])->middleware('auth');

    Route::get('/kualifikasi-profesional/{id}/edit', [KualifikasiProfesionalVerifikatorController::class, 'showDetailKualifikasiProfesional'])->middleware('auth');

    Route::put('/kualifikasi-profesional/{id}/edit', [KualifikasiProfesionalVerifikatorController::class, 'updateDetailKualifikasiProfesional'])->middleware('auth');

    Route::get('/pengalaman-mengajar/{id}', [PengalamanMengajarVerifikatorController::class, 'showPengalamanMengajar'])->middleware('auth');

    Route::get('/pengalaman-mengajar/{id}/edit', [PengalamanMengajarVerifikatorController::class, 'showDetailPengalamanMengajar'])->middleware('auth');

    Route::put('/pengalaman-mengajar/{id}/edit', [PengalamanMengajarVerifikatorController::class, 'updateDetailPengalamanMengajar'])->middleware('auth');

    Route::prefix('/publikasi')->group(function () {

        Route::get('/karya-tulis/{id}', [KaryaTulisVerifikatorController::class, 'showKaryaTulis'])->middleware('auth');

        Route::get('/karya-tulis/{id}/edit', [KaryaTulisVerifikatorController::class, 'showDetailKaryaTulis'])->middleware('auth');

        Route::put('/karya-tulis/{id}/edit', [KaryaTulisVerifikatorController::class, 'updateDetailKaryaTulis'])->middleware('auth');

        Route::get('/makalah/{id}', [MakalahVerifikatorController::class, 'showMakalah'])->middleware('auth');

        Route::get('/makalah/{id}/edit', [MakalahVerifikatorController::class, 'showDetailMakalah'])->middleware('auth');

        Route::put('/makalah/{id}/edit', [MakalahVerifikatorController::class, 'updateDetailMakalah'])->middleware('auth');

        Route::get('/seminar/{id}', [SeminarVerifikatorController::class, 'showSeminar'])->middleware('auth');

        Route::get('/seminar/{id}/edit', [SeminarVerifikatorController::class, 'showDetailSeminar'])->middleware('auth');

        Route::put('/seminar/{id}/edit', [SeminarVerifikatorController::class, 'updateDetailSeminar'])->middleware('auth');

        Route::get('/karya-temuan/{id}', [KaryaTemuanVerifikatorController::class, 'showKaryaTemuan'])->middleware('auth');

        Route::get('/karya-temuan/{id}/edit', [KaryaTemuanVerifikatorController::class, 'showDetailKaryaTemuan'])->middleware('auth');

        Route::put('/karya-temuan/{id}/edit', [KaryaTemuanVerifikatorController::class, 'updateDetailKaryaTemuan'])->middleware('auth');
    });

    Route::get('/bahasa/{id}', [BahasaVerifikatorController::class, 'showBahasa'])->middleware('auth');

    Route::get('/bahasa/{id}/edit', [BahasaVerifikatorController::class, 'showDetailBahasa'])->middleware('auth');

    Route::put('/bahasa/{id}/edit', [BahasaVerifikatorController::class, 'updateDetailBahasa'])->middleware('auth');

    Route::get('/akun', function () {
        return view('verifikator.akun');
    });
});


//PROFILE
Route::get('profil', [ProfilController::class, 'index'])->name('profil');
// Route::get('profil/create', [ProfilController::class,'create'])->name('profil.create');
Route::put('profil/store', [ProfilController::class, 'store'])->name('profil.store');


//route login mhs, registrasi mhs //
// Route::get('beranda', [CustomAuthController::class, 'beranda']);
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');



/**
 * route untuk login mahasiswa
 */
Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

/**
 * route untuk register
 */
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.process');
Route::get('/register/checkSlug', [RegisterController::class, 'checkSlug']);

/**
 * route untuk halaman profil mahasiswa
 */
//PROFILE
Route::get('profil', [ProfilController::class, 'index'])->name('profil');

Route::put('/profil/{id}/edit', [ProfilController::class, 'updateProfileUser']);
// Route::put('profil/store', [ProfilController::class, 'store'])->name('profil.store');


/**
 * route untuk ke halaman beranda
 */
Route::get('/beranda', function () {
    return view('mahasiswa.index');
})->middleware('auth');

Route::prefix('/data-pribadi')->group(function () {
    /**
     * route untuk ke halaman Pendidikan Formal
     */
    Route::resource('/pendidikan_formal', PendidikanFormalController::class)->middleware('auth');

    /**
     * Route untuk ke halaman organisasi
     */
    Route::resource('/organisasi', OrganisasiController::class)->middleware('auth');

    Route::resource('/tanda-penghargaan', TandaPenghargaanController::class)->middleware('auth');

    Route::resource('/pelatihan', PelatihanController::class)->middleware('auth');

    Route::resource('/sertifikat', SertifikatController::class)->middleware('auth');
});

Route::prefix('/kode-etik-insinyur')->group(function () {


    Route::resource('/referensi', ReferensiController::class)->middleware('auth');

    Route::resource('/pengertian', PengertianController::class)->middleware('auth');
});

Route::resource('/kualifikasi-profesional', KualifikasiProfesionalController::class)->middleware('auth');

Route::resource('/pengalaman-mengajar', PengalamanMengajarController::class)->middleware('auth');


Route::prefix('/publikasi')->group(function () {

    Route::resource('/karya', KaryaController::class)->middleware('auth');


    Route::resource('/makalah', MakalahController::class)->middleware('auth');


    Route::resource('/seminar', SeminarController::class)->middleware('auth');


    Route::resource('/karya-temuan', KaryaTemuanController::class)->middleware('auth');
});

Route::resource('/bahasa', BahasaController::class)->middleware('auth');

Route::get('/rekognisi-pencapaian', [RekognisiPencapaianController::class, 'index']);

Route::get('/kartu-hasil-studi', [KartuHasilStudiMahasiswaController::class, 'index']);
