<?php declare(strict_types=1);

// @codeCoverageIgnoreStart
use Illuminate\Support\Facades\Route;

/**
 * Paxsy-Stub
 * Test double route
 */
Route::prefix('default-package-web')
     ->group(function() {
         Route::get(
             'index',
             function() {
                 return 'Paxsy Route in: ' . ' bootraiser-test/default-package-web';
             },
         );
     })
;

// use Filefabrik\BootraiserTesting\Http\Controllers\Demo1Controller;

// Route::get('/demo-1s', [Demo1Controller::class, 'index'])->name('demo-1s.index');
// Route::get('/demo-1s/create', [Demo1Controller::class, 'create'])->name('demo-1s.create');
// Route::post('/demo-1s', [Demo1Controller::class, 'store'])->name('demo-1s.store');
// Route::get('/demo-1s/{demo-1}', [Demo1Controller::class, 'show'])->name('demo-1s.show');
// Route::get('/demo-1s/{demo-1}/edit', [Demo1Controller::class, 'edit'])->name('demo-1s.edit');
// Route::put('/demo-1s/{demo-1}', [Demo1Controller::class, 'update'])->name('demo-1s.update');
// Route::delete('/demo-1s/{demo-1}', [Demo1Controller::class, 'destroy'])->name('demo-1s.destroy');
// @codeCoverageIgnoreEnd
