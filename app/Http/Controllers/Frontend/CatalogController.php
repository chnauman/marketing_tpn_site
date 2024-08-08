<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CatalogController extends Controller
{
    public function products()
    {
        $baseUrl = 'https://merchants.theprintnation.com/uploads/tpn/admin/product_images/';
        $products = DB::connection('other')->table('superadmin_products')
            ->Join('superadmin_product_attributes', 'superadmin_products.id', '=', 'superadmin_product_attributes.superadmin_product_id')
            ->Join('superadmin_product_attributes_attributes', 'superadmin_product_attributes.id', '=', 'superadmin_product_attributes_attributes.product_attribute')
            ->Join('superadmin_attributes', 'superadmin_product_attributes_attributes.superadmin_attribute', '=', 'superadmin_attributes.id')
            ->Join('superadmin_attribute_values', 'superadmin_product_attributes_attributes.attribute_value', '=', 'superadmin_attribute_values.id')
            ->Join('superadmin_products_printable', 'superadmin_products.id', '=', 'superadmin_products_printable.superadmin_product_id')
            ->Join('superadmin_product_attributes_printable', 'superadmin_products_printable.printable_area', '=', 'superadmin_product_attributes_printable.printable_area')
            ->select(
                'superadmin_products.id',
                'superadmin_products.title',
                'superadmin_products.status',
                'superadmin_products.sku_prefix',
                'superadmin_products.category_id',
                'superadmin_products.sub_category_id',
                'superadmin_products.printable_id',
                DB::raw('CONCAT("'.$baseUrl.'", superadmin_products.image_normal) as image_url'),
                DB::raw('COUNT(DISTINCT CASE WHEN superadmin_attributes.is_color = 1 THEN superadmin_attribute_values.value END) as color_count'),
                DB::raw('COUNT(DISTINCT CASE WHEN superadmin_attributes.is_color = 0 THEN superadmin_attribute_values.value END) as size_count'),
                DB::raw('MAX(superadmin_product_attributes_printable.base_price) as base_price'),
            )
            ->where('superadmin_products.status', 'enabled')
            ->groupBy(
                'superadmin_products.id',
                'superadmin_products.title',
                'superadmin_products.status',
                'superadmin_products.sku_prefix',
                'superadmin_products.category_id',
                'superadmin_products.sub_category_id',
                'superadmin_products.printable_id',
                'image_url'
            )
            ->get();
            
        // dd($products);
        return view('frontend.pages.catalog', compact('products'));
    }

    public function show($id)
    {
        // dd("here");
        $baseUrl = 'https://merchants.theprintnation.com/uploads/tpn/admin/product_images/';
        
        $product = DB::connection('other')->table('superadmin_products')
            ->Join('superadmin_product_attributes', 'superadmin_products.id', '=', 'superadmin_product_attributes.superadmin_product_id')
            ->Join('superadmin_product_attributes_attributes', 'superadmin_product_attributes.id', '=', 'superadmin_product_attributes_attributes.product_attribute')
            ->Join('superadmin_attributes', 'superadmin_product_attributes_attributes.superadmin_attribute', '=', 'superadmin_attributes.id')
            ->Join('superadmin_attribute_values', 'superadmin_product_attributes_attributes.attribute_value', '=', 'superadmin_attribute_values.id')
            ->Join('superadmin_products_printable', 'superadmin_products.id', '=', 'superadmin_products_printable.superadmin_product_id')
            ->Join('superadmin_product_attributes_printable', 'superadmin_products_printable.printable_area', '=', 'superadmin_product_attributes_printable.printable_area')
            ->select(
                'superadmin_products.id',
                'superadmin_products.title',
                'superadmin_products.status',
                'superadmin_products.sku_prefix',
                'superadmin_products.printable_id',
                DB::raw('CONCAT("'.$baseUrl.'", superadmin_products.image_normal) as image_normal_url'),
                DB::raw('CONCAT("'.$baseUrl.'", superadmin_products.image_hover) as image_hover_url'),
                DB::raw('CONCAT("'.$baseUrl.'", superadmin_products.image_front) as image_front_url'),
                DB::raw('CONCAT("'.$baseUrl.'", superadmin_products.image_back) as image_back_url'),
                DB::raw('CONCAT("'.$baseUrl.'", superadmin_products.image_center) as image_center_url'),
                DB::raw('COUNT(DISTINCT CASE WHEN superadmin_attributes.is_color = 1 THEN superadmin_attribute_values.value END) as color_count'),
                DB::raw('GROUP_CONCAT(DISTINCT CASE WHEN superadmin_attributes.is_color = 1 THEN superadmin_attribute_values.value END) as color_values'),
                DB::raw('COUNT(DISTINCT CASE WHEN superadmin_attributes.is_color = 0 THEN superadmin_attribute_values.value END) as size_count'),
                DB::raw('GROUP_CONCAT(DISTINCT CASE WHEN superadmin_attributes.is_color = 0 THEN superadmin_attribute_values.value END) as size_values'),
                DB::raw('MAX(superadmin_product_attributes_printable.base_price) as base_price')
            )
            ->where('superadmin_products.status', 'enabled')
            ->where('superadmin_products.id', $id)
            ->groupBy(
                'superadmin_products.id',
                'superadmin_products.title',
                'superadmin_products.status',
                'superadmin_products.sku_prefix',
                'superadmin_products.printable_id',
                'image_normal_url',
                'image_hover_url',
                'image_front_url',
                'image_back_url',
                'image_center_url'
            )
            ->first();
            
        if (!$product) {
            abort(404);
        }

        $images = collect([
            $product->image_normal_url,
            $product->image_hover_url,
            $product->image_front_url,
            $product->image_back_url,
            $product->image_center_url
        ])->filter()->all();
        return view('frontend.pages.single_product', compact('product', 'images'));
    }
}
