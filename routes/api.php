<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Countries
    Route::apiResource('contacts', 'ContactsApiController');

    // Cities
    Route::apiResource('cities', 'CitiesApiController');

    // Trips
    Route::apiResource('offers', 'OffersApiController');
});
