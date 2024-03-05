<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = Product::all();

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        try {
            $viewData = [];
            $product = Product::findOrFail($id);
            $viewData['title'] = $product->getName() . ' - Online Store';
            $viewData['subtitle'] = $product->getName() . ' - Product information';
            $viewData['product'] = $product;

            return view('product.show')->with('viewData', $viewData);
        } catch (Exception $e) {
            return redirect('/');
        }
    }

    public function create(): View
    {
        $viewData = []; //to be sent to the view
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): View
    {
        Product::validate($request);

        $viewData = [];
        $viewData['name'] = $request->input('name');
        $viewData['price'] = $request->input('price');

        Product::create($request->only(['name', 'price']));

        return view('product.save')->with('viewData', $viewData);
        //here will be the code to call the model and save it to the database
    }
}
