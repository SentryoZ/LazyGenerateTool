<?php

use App\Http\Controllers\CommandPanelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemAdderController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [DashboardController::class, 'index'])->name('index');

Route::group([
    'prefix' => 'item-adder'
], function (){
    Route::get('/', [ItemAdderController::class, 'index'])->name('item-adder.index');
});

Route::group([
    'prefix' => 'command-panel'
], function (){
    Route::get('/', [CommandPanelController::class, 'index'])->name('command-panel.index');
    Route::get('/workbench-recipe', [CommandPanelController::class, 'workbench'])->name('command-panel.workbench');
    Route::post('/workbench-recipe', [CommandPanelController::class, 'handleWorkbench']);
});
