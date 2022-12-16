<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\ecommerce;
use Illuminate\Http\Request;

class ecommerceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $ecommerce = ecommerce::where('Name', 'LIKE', "%$keyword%")
                ->orWhere('Shop', 'LIKE', "%$keyword%")
                ->orWhere('product', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $ecommerce = ecommerce::latest()->paginate($perPage);
        }

        return view('admin.ecommerce.index',
        ['title' => 'ecommerce'],
        compact('ecommerce'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.ecommerce.create',[
            'title' => 'Create ecommerce'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        
        ecommerce::create($requestData);

        return redirect('admin/ecommerce')->with('flash_message', 'ecommerce added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $ecommerce = ecommerce::findOrFail($id);

        return view('admin.ecommerce.show',[ 
        'title' => 'ecommerce'].
        compact('ecommerce'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $ecommerce = ecommerce::findOrFail($id);

        return view('admin.ecommerce.edit',[
        'title' => 'ecommerce'],
        compact('ecommerce'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $ecommerce = ecommerce::findOrFail($id);
        $ecommerce->update($requestData);

        return redirect('admin/ecommerce')->with('flash_message', 'ecommerce updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        ecommerce::destroy($id);

        return redirect('admin/ecommerce')->with('flash_message', 'ecommerce deleted!');
    }
}
