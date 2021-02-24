<?php

namespace Ricadesign\LaravelProductDetail;

use Illuminate\Routing\Controller;
use App\Product;
class ProductDetailController extends Controller
{
    public function show($id)
    {
        $product = Product::find($id);
        return view('product::index', ['product' => $product]);
    }
}