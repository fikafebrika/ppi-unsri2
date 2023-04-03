<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

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
        return view('admin.login');
    });

    Route::get('/beranda', function () {
        return view('admin.index');
    });

    Route::prefix('/verifikator')->group(function () {
        Route::get('/', function () {
            return view('admin.verifikator.index');
        });

        Route::get('/tambah', function () {
            return view('admin.verifikator.tambah');
        });

        Route::get('/edit', function () {
            return view('admin.verifikator.edit');
        });

    });

});

Route::prefix('/verifikator')->group(function () {
    Route::get('/login', function () {
        return view('verifikator.auth.login');
    });

    // Route::get('/register', function () {
    //     return view('verifikator.auth.register');
    // });

    Route::get('/beranda', function () {
        return view('verifikator.index');
    });

    Route::prefix('/data-pribadi')->group(function () {
        Route::get('/pendidikan-formal', function () {
            return view('verifikator.data-pribadi.pendidikan-formal');
        });

        Route::get('/pendidikan-formal/periksa', function () {
            return view('verifikator.data-pribadi.periksa.pendidikan-formal');
        });

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

Route::get('/', function () {
    return view('mahasiswa.auth.login');
});
Route::post('/', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', function () {
    return view('mahasiswa.auth.register');
});

Route::get('/beranda', function () {
    return view('mahasiswa.index');
})->middleware('auth');

Route::get('/profil', function () {
    return view('mahasiswa.profil');
});

//route login mhs, registrasi mhs //
// Route::get('beranda', [CustomAuthController::class, 'beranda']); 
// Route::get('login', [CustomAuthController::class, 'index'])->name('login');
// Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('register', [CustomAuthController::class, 'register'])->name('register-user');
// Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::prefix('/data-pribadi')->group(function () {
    Route::get('/pendidikan-formal', function () {
        return view('mahasiswa.data-pribadi.pendidikan-formal');
    });

    Route::get('/pendidikan-formal/detail', function () {
        return view('mahasiswa.data-pribadi.detail.pendidikan-formal');
    });

    Route::get('/organisasi', function () {
        return view('mahasiswa.data-pribadi.organisasi');
    });

    Route::get('/organisasi/detail', function () {
        return view('mahasiswa.data-pribadi.detail.organisasi');
    });

    Route::get('/tanda-penghargaan', function () {
        return view('mahasiswa.data-pribadi.tanda-penghargaan');
    });

    Route::get('/tanda-penghargaan/detail', function () {
        return view('mahasiswa.data-pribadi.detail.tanda-penghargaan');
    });

    Route::get('/pelatihan', function () {
        return view('mahasiswa.data-pribadi.pelatihan');
    });

    Route::get('/pelatihan/detail', function () {
        return view('mahasiswa.data-pribadi.detail.pelatihan');
    });

    Route::get('/sertifikat', function () {
        return view('mahasiswa.data-pribadi.sertifikat');
    });

    Route::get('/sertifikat/detail', function () {
        return view('mahasiswa.data-pribadi.detail.sertifikat');
    });

});

Route::prefix('/kode-etik-insinyur')->group(function () {
    Route::get('/referensi', function () {
        return view('mahasiswa.kode-etik-insinyur.referensi');
    });

    Route::get('/referensi/detail', function () {
        return view('mahasiswa.kode-etik-insinyur.detail.referensi');
    });

    Route::get('/pengertian', function () {
        return view('mahasiswa.kode-etik-insinyur.pengertian');
    });

    Route::get('/pengertian/detail', function () {
        return view('mahasiswa.kode-etik-insinyur.detail.pengertian');
    });

});

Route::get('/kualifikasi-profesional', function () {
    return view('mahasiswa.kualifikasi-profesional');
});

Route::get('/kualifikasi-profesional/detail', function () {
    return view('mahasiswa.detail.kualifikasi-profesional');
});

Route::get('/pengalaman-mengajar', function () {
    return view('mahasiswa.pengalaman-mengajar');
});

Route::get('/pengalaman-mengajar/detail', function () {
    return view('mahasiswa.detail.pengalaman-mengajar');
});

Route::prefix('/publikasi')->group(function () {
    Route::get('/karya-tulis', function () {
        return view('mahasiswa.publikasi.karya-tulis');
    });

    Route::get('/karya-tulis/detail', function () {
        return view('mahasiswa.publikasi.detail.karya-tulis');
    });

    Route::get('/makalah', function () {
        return view('mahasiswa.publikasi.makalah');
    });

    Route::get('/makalah/detail', function () {
        return view('mahasiswa.publikasi.detail.makalah');
    });

    Route::get('/seminar', function () {
        return view('mahasiswa.publikasi.seminar');
    });

    Route::get('/seminar/detail', function () {
        return view('mahasiswa.publikasi.detail.seminar');
    });

    Route::get('/karya-temuan', function () {
        return view('mahasiswa.publikasi.karya-temuan');
    });

    Route::get('/karya-temuan/detail', function () {
        return view('mahasiswa.publikasi.detail.karya-temuan');
    });

});

Route::get('/bahasa', function () {
    return view('mahasiswa.bahasa');
});

Route::get('/bahasa/detail', function () {
    return view('mahasiswa.detail.bahasa');
});

Route::get('/rekognisi-pencapaian', function () {
    return view('mahasiswa.rekognisi-pencapaian');
});

Route::get('/kartu-hasil-studi', function () {
    return view('mahasiswa.kartu-hasil-studi');
});


