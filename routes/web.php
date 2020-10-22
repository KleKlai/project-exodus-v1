<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//TODO: Public Shared
Route::prefix('notification')->name('notification.')->middleware('auth')->group(function() {

    Route::get('view', 'NotificationController@index')->name('view');
    Route::get('clear', 'NotificationController@markAllAsRead')->name('clear');
    Route::get('read/{notification}', 'NotificationController@markAsRead')->name('view.read');
    Route::get('single/read/{id}', 'NotificationController@singleMarkAsRead')->name('read');

});

//TODO: User Password Change
Route::middleware('auth')->group(function() {

    Route::resource('user', 'Admin\UserController');
    Route::post('user/permission/{user}', 'Admin\Partial@overridePermission')->name('override.permission');
    Route::patch('user/restore/{id}', 'Admin\Partial@restore')->name('user.restore');
    Route::delete('user/forceDelete/{id}', 'Admin\Partial@forceDelete')->name('user.force.delete');
    Route::get('profile/{user}', 'Admin\ProfileController@myProfile')->name('my.profile');
    Route::patch('profile/{user}', 'Admin\ProfileController@updateUser')->name('profile.update');
    Route::delete('profile/{user}', 'Admin\ProfileController@deleteUser')->name('profile.delete');
    Route::get('profile/approve/{user}', 'Admin\ProfileController@markVerified')->name('profile.approve');
    Route::patch('password/{user}', 'Auth\ChangePasswordController@change')->name('password.change');

    Route::get('trash', 'Admin\Partial@trashUser')->name('user.trash'); // Get All Trash User

});

Route::group(['middleware' => ['role_or_permission:Super-admin|read util|create util|delete util']], function () {

    //TODO: Art component
    Route::namespace('Art')->prefix('component')->name('art.')->group( function () {

            Route::resource('subject', 'SubjectController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('category', 'CategoryController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('style', 'StyleController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('medium', 'MediumController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('material', 'MaterialController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('size', 'SizeController', ['except' => 'create', 'show', 'edit', 'update']);
            Route::resource('status', 'StatusController');

    });

    //TODO: Profile Category
    Route::get('artist/category', 'Admin\Profile\TypeController@index')->name('artist.category.index');
    Route::post('artist/category/show', 'Admin\Profile\TypeController@store')->name('artist.category.store');
    Route::delete('artist/category/destroy/{id}', 'Admin\Profile\TypeController@destroy')->name('artist.category.destroy');

});


Route::patch('art/status/{art}', 'ArtUtility@status');
Route::get('art/watch/{id}', 'ArtUtility@watch')->name('art.watch');
Route::get('art/reserve/list', 'Art\ReserveController@index')->name('art.reserve.index');
Route::get('art/reservation/{art}', 'Art\ReserveController@reserve')->name('art.reserve.set');
Route::get('art/reserve/cancel{reserve}', 'Art\ReserveController@cancelReservation')->name('art.reserve.cancel');

Route::get('art/reserve/sold/{reserve}', 'Art\ReserveController@sold')->name('art.sold');

// Route::group(['middleware' => ['role_or_permission:Super-admin|read art|create art|delete art|update art']], function () {

    Route::resource('art', 'ArtController');
// });

Route::namespace('Help')->group( function() {

    Route::get('about', 'AboutController@index');
    Route::get('about/edit/{about}', 'AboutController@edit');
    Route::patch('about', 'AboutController@update');

    Route::get('contact', 'ContactController@index');
    Route::post('contact', 'ContactController@send');

    Route::resource('faqs' , 'FAQsController');

});

Route::post('newsletter', 'NewsletterController@store');

Route::resource('ticket', 'Help\Ticket\TicketController');
Route::post('ticket/note/{ticket}', 'Help\Ticket\ComponentController@saveNotes')->name('ticket.note');
Route::post('ticket/archive/{ticket}', 'Help\Ticket\ComponentController@archive')->name('ticket.archive');
Route::patch('ticket/status/{ticket}', 'Help\Ticket\ComponentController@status')->name('ticket.status');

Route::resource('conversation', 'Help\Ticket\ConversationController');


// TODO: Sub Musuem
Route::get('galleries', function() {
    return view('welcome');
});

Route::get('artworks', function() {
    return view('welcome');
});

Route::get('artists', function() {
    return view('welcome');
});

Route::get('Bakaw', 'Museum\BakawController@index')->name('bakaw.index');
Route::get('Balangay', 'Museum\BalangayController@index')->name('balangay.index');
Route::get('Dabakan', 'Museum\DabakanController@index')->name('dabakan.index');
Route::get('Heart', 'Museum\HeartController@index')->name('heart.index');
Route::get('Kaban', 'Museum\KabanController@index')->name('kaban.index');
Route::get('Kulintang', 'Museum\KulintangController@index')->name('kulintang.index');
Route::get('Lamin', 'Museum\LaminController@index')->name('lamin.index');
Route::get('Lullaby', 'Museum\LullabyController@index')->name('lullaby.index');
Route::get('Tambol', 'Museum\TambolController@index')->name('tambol.index');
Route::get('Vinta', 'Museum\VintaController@index')->name('vinta.index');

Route::get('export', 'Admin\Export\Exports@index')->name('export');

Route::get('export/default/user', 'Admin\Export\Exports@UserExportDefault')->name('user.export.default');
Route::get('export/default/art', 'Admin\Export\Exports@ArtExportDefault')->name('art.export.default');
Route::post('export/custom/user', 'Admin\Export\Exports@UserExportCustom')->name('user.export.custom');
Route::post('export/custom/art', 'Admin\Export\Exports@ArtExportCustom')->name('art.export.custom');

Route::post('import/user', 'Admin\Import\UsersImportController@import')->name('user.import');
Route::post('import/art', 'Admin\Import\ArtImportController@import')->name('art.import');
