<?php

use App\Http\Controllers\AcademicWritingController;
use App\Http\Controllers\AdminVerifikatorController;
use App\Http\Controllers\BahasaController;
use App\Http\Controllers\KartuHasilStudiMahasiswaController;
use App\Http\Controllers\KaryaController;
use App\Http\Controllers\KaryaTemuanController;
use App\Http\Controllers\KaryaTulisController;
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
use App\Http\Controllers\PenghargaanController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ReferensiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekognisiPencapaianController;
use App\Http\Controllers\SeminarController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\TandaPenghargaanController;
use App\Http\Controllers\VerifikatorController;


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

    Route::resource('/verifikator', AdminVerifikatorController::class);


    // Route::prefix('/verifikator')->group(function () {

    //     // Route::get('/', function () {
    //     //     return view('admin.verifikator.index');
    //     // });

    //     // Route::get('/tambah', function () {
    //     //     return view('admin.verifikator.tambah');
    //     // });

    //     // Route::get('/edit', function () {
    //     //     return view('admin.verifikator.edit');
    //     // });
    // });
});

Route::prefix('/verifikator')->group(function () {
    // Route::get('/login', function () {
    //     return view('verifikator.auth.login');
    // });


    Route::get('/login', [LoginAdminController::class, 'index'])->name('login');
    Route::post('/login', [LoginAdminController::class, 'authenticate'])->name('login');

    // Route::get('/register', function () {
    //     return view('verifikator.auth.register');
    // });

    // Route::get('/beranda', function () {
    //     return view('verifikator.index');
    // });

    Route::resource('/beranda', VerifikatorController::class)->middleware('auth');

    Route::prefix('/data-pribadi')->group(function () {

        // Route::get('/pendidikan-formal', function () {
        //     return view('verifikator.data-pribadi.pendidikan-formal');
        // });

        Route::get('/pendidikan-formal/{id}', [VerifikatorController::class, 'showPendidikanFormal']);

        // Route::get('/pendidikan-formal/periksa', function () {
        //     return view('verifikator.data-pribadi.periksa.pendidikan-formal');
        // });

        Route::get('/pendidikan-formal/periksa/{id}/edit', [VerifikatorController::class, 'showDetailPendidikanFormalUser']);

        Route::put('/pendidikan-formal/periksa/{id}/edit', [VerifikatorController::class, 'updateDetailPendidikanFormalUser']);

        Route::get('/organisasi', function () {
            return view('verifikator.data-pribadi.organisasi');
        });

        Route::get('/organisasi/periksa', function () {
            return view('verifikator.data-pribadi.periksa.organisasi');
        });

        Route::get('/tanda-penghargaan', function () {
            return view('verifikator.data-pribadi.tanda-penghargaan');
        });

        Route::get('/tanda-penghargaan/periksa', function () {
            return view('verifikator.data-pribadi.periksa.tanda-penghargaan');
        });

        Route::get('/pelatihan', function () {
            return view('verifikator.data-pribadi.pelatihan');
        });

        Route::get('/pelatihan/periksa', function () {
            return view('verifikator.data-pribadi.periksa.pelatihan');
        });

        Route::get('/sertifikat', function () {
            return view('verifikator.data-pribadi.sertifikat');
        });

        Route::get('/sertifikat/periksa', function () {
            return view('verifikator.data-pribadi.periksa.sertifikat');
        });
    });

    Route::prefix('/kode-etik-insinyur')->group(function () {
        Route::get('/referensi', function () {
            return view('verifikator.kode-etik-insinyur.referensi');
        });

        Route::get('/referensi/periksa', function () {
            return view('verifikator.kode-etik-insinyur.periksa.referensi');
        });

        Route::get('/pengertian', function () {
            return view('verifikator.kode-etik-insinyur.pengertian');
        });

        Route::get('/pengertian/periksa', function () {
            return view('verifikator.kode-etik-insinyur.periksa.pengertian');
        });
    });

    Route::get('/kualifikasi-profesional', function () {
        return view('verifikator.kualifikasi-profesional');
    });

    Route::get('/kualifikasi-profesional/periksa', function () {
        return view('verifikator.periksa.kualifikasi-profesional');
    });

    Route::get('/pengalaman-mengajar', function () {
        return view('verifikator.pengalaman-mengajar');
    });

    Route::get('/pengalaman-mengajar/periksa', function () {
        return view('verifikator.periksa.pengalaman-mengajar');
    });

    Route::prefix('/publikasi')->group(function () {
        Route::get('/karya-tulis', function () {
            return view('verifikator.publikasi.karya-tulis');
        });

        Route::get('/karya-tulis/periksa', function () {
            return view('verifikator.publikasi.periksa.karya-tulis');
        });

        Route::get('/makalah', function () {
            return view('verifikator.publikasi.makalah');
        });

        Route::get('/makalah/periksa', function () {
            return view('verifikator.publikasi.periksa.makalah');
        });

        Route::get('/seminar', function () {
            return view('verifikator.publikasi.seminar');
        });

        Route::get('/seminar/periksa', function () {
            return view('verifikator.publikasi.periksa.seminar');
        });

        Route::get('/karya-temuan', function () {
            return view('verifikator.publikasi.karya-temuan');
        });

        Route::get('/karya-temuan/periksa', function () {
            return view('verifikator.publikasi.periksa.karya-temuan');
        });
    });

    Route::get('/bahasa', function () {
        return view('verifikator.bahasa');
    });

    Route::get('/bahasa/periksa', function () {
        return view('verifikator.periksa.bahasa');
    });

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
Route::put('profil/store', [ProfilController::class, 'store'])->name('profil.store');




// Route::get('/beranda', [RekognisiPencapaianController::class, 'showBeranda']);

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
