<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\ViewSHOP;
use PDF;


class SHOPController extends Controller
{
    //
    public function index()
    {  
        $SHOP = ViewSHOP::all();
        return view('admin.SHOP.index', ['title' => 'SHOP'],compact('SHOP'));
    }

    public function print_pdf()
    {
    	$SHOP = ViewSHOP::all();
 
    	$pdf = PDF::loadView('admin.SHOP.print_pdf', compact('SHOP'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('SHOP-pdf.pdf');
    }
}
