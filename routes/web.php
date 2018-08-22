<?php

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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    });

Route::get('/about', 'AboutController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/category','CategoryController');

Route::get('kendo-ui/introduction', [
    'as' => 'kendo-ui.introduction',
    'uses' => 'KendoUi\IntroductionController@index',
]);

Route::get('kendo-ui/widgets/data-management/grid/overview/getting-started/initialized-the-grid/from-an-empty-div', [
    'as' => 'kendo-ui.widgets.data-management.grid.overview.getting-started.initialized-the-grid.from-an-empty-div.index',
    'uses' => 'KendoUi\Widgets\DataManagement\Grid\Overview\GettingStarted\InitializeTheGrid\FromAnEmptyDivController@index',
]);

Route::get('kendo-ui/widgets/data-management/grid/overview/getting-started/initialized-the-grid/from-an-html-table', [
    'as' => 'kendo-ui.widgets.data-management.grid.overview.getting-started.initialized-the-grid.from-an-html-table.index',
    'uses' => 'KendoUi\Widgets\DataManagement\Grid\Overview\GettingStarted\InitializeTheGrid\FromAnHtmlTableController@index',
]);
