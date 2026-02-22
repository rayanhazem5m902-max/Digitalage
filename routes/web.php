<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/project/{id}', [HomeController::class, 'showProject'])->name('project.show');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/career/{id}', [HomeController::class, 'showCareer'])->name('career.show');

// Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLogin'])->name('admin.login');
    Route::post('/login', [AdminController::class, 'login']);
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Portfolio Projects
    Route::post('/projects/save', [AdminController::class, 'saveProject'])->name('admin.projects.save');
    Route::post('/projects/delete/{id}', [AdminController::class, 'deleteProject'])->name('admin.projects.delete');

    // Members
    Route::post('/members/save', [AdminController::class, 'saveMember'])->name('admin.members.save');
    Route::post('/members/delete/{id}', [AdminController::class, 'deleteMember'])->name('admin.members.delete');

    // Services
    Route::post('/services/save', [AdminController::class, 'saveService'])->name('admin.services.save');
    Route::post('/services/delete/{id}', [AdminController::class, 'deleteService'])->name('admin.services.delete');

    // Contact Info
    Route::post('/contact/save', [AdminController::class, 'saveContact'])->name('admin.contact.save');

    // Impacts
    Route::post('/impact/save', [AdminController::class, 'saveImpact'])->name('admin.impact.save');
    Route::post('/impact/delete/{id}', [AdminController::class, 'deleteImpact'])->name('admin.impact.delete');

    // Careers
    Route::post('/careers/save', [AdminController::class, 'saveCareer'])->name('admin.careers.save');
    Route::post('/careers/delete/{id}', [AdminController::class, 'deleteCareer'])->name('admin.careers.delete');
    Route::post('/translate', [AdminController::class, 'translate'])->name('admin.translate');
});