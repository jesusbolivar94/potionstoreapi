<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\PotionController;
use App\Http\Controllers\RecipeController;
use App\Http\Controllers\SellController;
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
    # Get authorization token
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

    # Return sells of one client
    Route::get(
        '/client/{id}/sells',
        [ClientController::class, 'getClientSells']
    )->middleware('auth:sanctum');

// Ingredients
    # Return data of all Ingredients
    Route::get(
        '/ingredients',
        [IngredientController::class, 'getIngredients'],
    )->middleware('auth:sanctum');

    # Return data of one Ingredient
    Route::get(
        '/ingredient/{id}',
        [IngredientController::class, 'getIngredient']
    )->middleware('auth:sanctum');

// Potions
    # Return data of all Potions
    Route::get(
        '/potions',
        [PotionController::class, 'getPotions']
    )->middleware('auth:sanctum');

    # Return potion data
    Route::get(
        '/potion/{id}',
        [PotionController::class, 'getPotion']
    )->middleware('auth:sanctum');

    # Return potion recipe data
    Route::get(
        '/potion/{id}/recipe',
        [RecipeController::class, 'getPotionRecipe']
    )->middleware('auth:sanctum');

// Sells
    # Return data of all sells
    Route::get(
        '/sells',
        [SellController::class, 'getSells']
    )->middleware('auth:sanctum');

    # Return data of one sell
    Route::get(
        '/sell/{id}',
        [SellController::class, 'getSell']
    )->middleware('auth:sanctum');

    # Return details of one sell
    Route::get(
        '/sell/{id}/detail',
        [SellController::class, 'getSellDetail']
    )->middleware('auth:sanctum');
