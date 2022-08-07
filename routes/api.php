<?php

use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Authorization
Route::get('/getToken', [AuthController::class, 'getToken']);

// Clients
    # Return data of one client
    Route::get(
        '/client/{id}',
        [ClientController::class, 'getClient']
    )->middleware('auth:sanctum');

    # Return data of all clients
    Route::get(
        '/clients',
        [ClientController::class, 'getClients']
    )->middleware('auth:sanctum');

    # Create a new client
    Route::post(
        '/client',
        [ClientController::class, 'newClient']
    )->middleware('auth:sanctum');

    # Update client information
    Route::put(
        '/client/{id}',
        [ClientController::class, 'updateClient']
    )->middleware('auth:sanctum');

    # Delete a client
    Route::delete(
        '/client/{id}',
        [ClientController::class, 'deleteClient']
    )->middleware('auth:sanctum');
