<?php

namespace App\Http\Controllers\KendoUi\Widgets\DataManagement\Grid\Overview\GettingStarted\InitializeTheGrid;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FromAnHtmlTableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('kendo-ui/widgets/data-management/grid/overview/getting-started/initialized-the-grid/from-an-html-table/index', $data);
    }
}
