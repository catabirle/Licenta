<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\User\FileUpload;

use App\Http\Controllers\User\ContactController;

use function PHPUnit\Framework\isEmpty;

//Route::get('/contact', [App\Http\Controllers\ContactController::class, 'contactForm'])->name('contact');
//Route::post('/contact', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact.store');

//Route::get('/image-upload', [FileUpload::class, 'createForm']);
//Route::post('/image-upload', [FileUpload::class, 'fileUpload'])->name('imageUpload');

Route::get('/', function () {
    return view('welcome');
});



Route::get('/home', function () {
     //dd(auth()->user()->roles[0]["title"]);
    if(count(auth()->user()->roles) && auth()->user()->roles[0]["title"]=="Admin"){
        return redirect()->route('admin.home');
    }
    return redirect()->route('user.home');
});

Auth::routes(['register' => true]);
// Admin

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
], 

function () {
    Route::get('/', 'HomeController@index')->name('home');
    //Service
    Route::get('/service', 'ServiceController@index')->name('service');
    //Contact
    Route::get('/contact', 'ContactController@contactForm')->name('contact');
    Route::post('/contact', 'ContactController@storeContactForm')->name('contact.store');
    
    Route::get('/offerHistory', 'ContactController@offersHistory')->name('contact.offerHistory');
    
    Route::get('/offerSend', 'ContactController@offersSend')->name('contact.offerSend');
    
    Route::get('/offerReceived', 'ContactController@offersReceived')->name('contact.offerReceived');
    
    Route::get('/offerAccepted', 'ContactController@offersAccepted')->name('contact.offerAccepted');
    
    Route::get('/show/{contact}', 'ContactController@show')->name('contact.show');

    Route::get('/image-upload', 'FileUpload@createForm')->name('image-upload');
    Route::post('/image-upload', 'FileUpload@fileUpload')->name('imageUpload');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
],

function () {
    Route::get('/', 'HomeController@index')->name('home');
    //Route::get('/', 'HomeController@index')->name('home');
    
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Contacts
    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');
    
    Route::get('offerMade', 'ContactsController@offersMade')->name('contacts.offerMade');
    
    Route::get('offerRequest', 'ContactsController@offersRequest')->name('contacts.offerRequest');
    
    Route::get('offerAccepted', 'ContactsController@offersAccepted')->name('contacts.offerAccepted');
    
    Route::get('offerHistory', 'ContactsController@offersHistory')->name('contacts.offerHistory');
    
    Route::get('entryToday', 'ContactsController@entriesToday')->name('contacts.entryToday');
    
    Route::get('exitToday', 'ContactsController@exitsToday')->name('contacts.exitToday');
    

    // Cities
    Route::delete('cities/destroy', 'CitiesController@massDestroy')->name('cities.massDestroy');
    Route::resource('cities', 'CitiesController');

    // Trips
    Route::delete('offers/destroy', 'OffersController@massDestroy')->name('offers.massDestroy');
    Route::resource('offers', 'OffersController');
    
});

Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
// Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
    }
});
