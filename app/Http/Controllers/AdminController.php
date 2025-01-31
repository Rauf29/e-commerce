<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class AdminController extends Controller {
    public function index() {
        return view( 'admin.index' );
    }

    public function brands() {
        $brands = Brand::orderBy( 'name', 'asc' )->paginate( 10 );
        return view( 'admin.brands', compact( 'brands' ) );
    }
}
