<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Category;
use App\Models\Product;

class PagesController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $bestsellers = Product::where('bestseller', 1)->get();
        return Inertia::render('IndexPage',
            [
                'categories' => $categories->toArray(),
                'bestsellers' => $bestsellers->toArray(),
            ]);
    }

    public function productPage(Product $product)
    {
        $categories = Category::findOrFail($product->category_id);
        return Inertia::render('ProductPage',
            [
                'product' => $product,
                'category' => $categories->toArray(),
            ]);
    }

    public function categoriesPage()
    {
        $categories = Category::all();
        return Inertia::render('CategoriesPage', ['categories' => $categories]);
    }

    public function categoryPage(Category $category)
    {
        $newsInCategory = $category->products()->latest()->limit(8)->get();
        return Inertia::render('CategoryPage', [
            'category' => $category,
            'products' => $category->products()->latest()->paginate(8),
            'newsInCategory'=> $newsInCategory
        ]);
    }

    public function newsPage()
    {
        $categories = Category::all();
        $news = Product::latest()->limit(10)->get();
        return Inertia::render('NewsPage', [
            'news'=> $news,
            'categories' => $categories->toArray(),
        ]);
    }

    public function bestsellerPage()
    {
        $categories = Category::all();
        $bestsellers = Product::where('bestseller', 1)->limit(20)->get();
        return Inertia::render('BestsellersPage', [
            'bestsellers'=> $bestsellers,
            'categories' => $categories->toArray(),
        ]);
    }

}
