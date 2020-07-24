<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Product;
use App\Models\Order;
use App\Models\Slide;

class HomeController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $products = Product::popular()->get();
        $this->data['products'] = $products;

        $slides = Slide::active()->orderBy('position', 'ASC')->get();
        $this->data['slides'] = $slides;

        return $this->load_theme('home', $this->data);
    }
}