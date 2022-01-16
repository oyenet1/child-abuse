<?php

use App\Http\Controllers\CaseController;
use Illuminate\Support\Facades\Route;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

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

Route::get('/', function () {
    $data  = ['male', 'female'];
    $colors = '100, 250, 200, .5';
    $options = [
        'chart_title' => 'Child-Abuse Case by State',
        'report_type' => 'group_by_relationship',
        'model' => 'App\Models\Data',
        'relationship_name' => 'area',
        'group_by_field' => 'state',
        'chart_type' => 'bar',
        // 'chart_color' => "30, 40, 200, .5",
    ];
    $chart = new LaravelChart($options);
    return view('welcome', compact(['data', 'chart']));
});

Route::get('/cases/{data:name}', [CaseController::class, 'show']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
