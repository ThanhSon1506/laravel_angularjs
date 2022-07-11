<?php
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\SellController;
use App\Http\Controllers\Admin\WarehouseController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CalendarController;
use App\Http\Controllers\Admin\MailController;
use App\Http\Controllers\Admin\PageFormStockController;
use App\Http\Controllers\Admin\InvoiceController;
use App\Http\Controllers\Admin\PrintedFormController;
use App\Http\Controllers\Admin\SearchController;
use App\Http\Controllers\Admin\ApproveController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\TestController;

Route::get('/', [DashboardController::class,'index'])->name('admin.index.dashboard');
Route::get('/data', [DashboardController::class,'anyData'])->name('admin.index.anyData');
Route::get('/data2', [DashboardController::class,'anyData2'])->name('admin.index.anyData2');
Route::get('/insert',[DashboardController::class,'insert'])->name('admin.user.create');

Route::prefix('sell')->group(function(){
    Route::get('/', [SellController::class,'index'])->name('admin.index.sell');
    Route::get('/order', [OrderController::class,'index'])->name('admin.index.order');
});

Route::prefix('warehouse')->group(function(){
    Route::get('/', [WarehouseController::class,'index'])->name('admin.index.warehouse');
});

Route::prefix('user')->group(function(){
    Route::get('/', [UserController::class,'index'])->name('admin.index.user');
});

Route::prefix('calendar')->group(function(){
    Route::get('/', [CalendarController::class,'index'])->name('admin.index.calendar');
});

Route::prefix('mail')->group(function(){
    Route::get('/', [MailController::class,'index'])->name('admin.index.mail');
    Route::get('/email-compose', [MailController::class,'IndexEmailCompose'])->name('admin.index.email_compose');
});

Route::prefix('approve')->group(function(){
    Route::get('/', [ApproveController::class,'index'])->name('admin.index.approve');
});

Route::prefix('faq')->group(function(){
    Route::get('/', [FaqController::class,'index'])->name('admin.index.faq');
});

Route::prefix('notification')->group(function(){
    Route::get('/', [NotificationController::class,'index'])->name('admin.index.notification');
});
Route::prefix('receipt')->group(function(){
    Route::get('/page-form-stock', [PageFormStockController::class,'index'])->name('admin.index.page_form_stock');
    Route::get('/invoice', [InvoiceController::class,'index'])->name('admin.index.invoice');
    Route::get('/printed-form', [PrintedFormController::class,'index'])->name('admin.index.printed_form');
    Route::get('/search', [SearchController::class,'index'])->name('admin.index.search');
});

Route::prefix('test02')->group(function(){
    Route::get('/', [TestController::class,'index'])->name('admin.index.test');
});