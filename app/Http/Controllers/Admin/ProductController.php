<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use voku\helper\ASCII;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $list = Product::all();
        return view('admin._product', ['list'=> $list ] );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        $list = Category::all();
        return view('admin.add-product', ['list' => $list]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $data = new Product;
        $data->category_id = $request->input('category_id');
        $data->title = $request->input('title');
        $data->keywords = $request->input('parent_id');
        $data->description = $request->input('description');
        $data->image = Storage::putFile('images', $request->file('image'));
        $data->price = $request->input('price');
        $data->user_id = Auth::id();
        $data->quantity = $request->input('quantity');
        $data->minquantity = $request->input('minquantity');
        $data->tax = $request->input('tax');
        $data->minquantity = $request->input('minquantity');
        $data->status = $request->input('status');
        $data->detail = $request->input('detail');
        $data->save();
        return redirect()->route('admin-product');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(product $product, $id)
    {
        $data = Product::find($id);
        $list = Category::all();
        return view('admin.edit-product', ['data' => $data, 'list' => $list]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, product $product, $id)
    {
            $data = Product::find($id);
            $data->category_id = $request->input('category_id');
            $data->title = $request->input('title');
            $data->keywords = $request->input('parent_id');
            $data->description = $request->input('description');
            $data->image = Storage::putFile('images', $request->file('image'));
            $data->price = $request->input('price');
            $data->user_id = Auth::id();
            $data->quantity = $request->input('quantity');
            $data->minquantity = $request->input('minquantity');
            $data->tax = $request->input('tax');
            $data->minquantity = $request->input('minquantity');
            $data->status = $request->input('status');
            $data->detail = $request->input('detail');
            $data->save();
            return redirect()->route('admin-product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(product $product, $id)
    {
        Product::find($id)->delete();
        return redirect()->route('admin-product');

    }
}
