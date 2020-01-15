<?php

namespace App\Http\Controllers;

use Alert;
use App\Category;
use App\Products;
use App\ProductsAttributes;
use App\ProductsImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;


class ProductsController extends Controller
{
    public function addProduct(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>";
            // print_r($data);die;
            // echo "</pre>";
            $product = new Products;
            $product->category_id = $data['category_id'];
            $product->name = $data['product_name'];
            $product->code = $data['product_code'];
            $product->color = $data['product_color'];
            if (!empty($data['product_description'])) {
                $product->description = $data['product_description'];
            } else {
                $product->description = '';
            }

            $product->price = $data['product_price'];

            //Upload image
            if ($request->hasfile('image')) {
                echo $img_tmp = Input::file('image');
                if ($img_tmp->isValid()) {

                    //image path code
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $img_path = 'uploads/products/' . $filename;

                    //image resize
                    Image::make($img_tmp)->resize(500, 500)->save($img_path);

                    $product->image = $filename;
                }
            }
            $product->save();
            return redirect('/admin/view-products')->with('flash_message_success', 'Product has been added successfully');
        }
        //Categories Dropdown menu Code
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = '<option value="" selected disabled>Select</option>';
        foreach ($categories as $cat) {
            $categories_dropdown .= '<option value="' . $cat->id . '">' . $cat->name . '</option>';
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach ($sub_categories as $sub_cat) {
                $categories_dropdown .= '<option value="' . $sub_cat->id . '">&nbsp;--&nbsp' . $sub_cat->name . '</option>';
            }
        }

        return view('admin.products.add_product')->with(compact('categories_dropdown'));
    }
    public function viewProducts()
    {
        $products = Products::get();
        return view('admin.products.view_products')->with(compact('products'));
    }
    public function editProduct(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //Upload image
            if ($request->hasfile('image')) {
                echo $img_tmp = Input::file('image');
                if ($img_tmp->isValid()) {

                    //image path code
                    $extension = $img_tmp->getClientOriginalExtension();
                    $filename = rand(111, 99999) . '.' . $extension;
                    $img_path = 'uploads/products/' . $filename;

                    //image resize
                    Image::make($img_tmp)->resize(500, 500)->save($img_path);
                }
            } else {
                $filename = $data['current_image'];
            }
            if (empty($data['product_description'])) {
                $data['product_description'] = '';
            }
            Products::where(['id' => $id])->update([
                'name' => $data['product_name'],
                'category_id' => $data['category_id'],
                'code' => $data['product_code'],
                'color' => $data['product_color'],
                'description' => $data['product_description'],
                'price' => $data['product_price'],
                'image' => $filename,
            ]);
            return redirect('/admin/view-products')->with('flash_message_success', 'Product has been updated!!');
        }
        $productDetails = Products::where(['id' => $id])->first();

        //Category dropdown code
        $categories = Category::where(['parent_id' => 0])->get();
        $categories_dropdown = '<option value="" selected disabled>Select</option>';
        foreach ($categories as $cat) {
            if ($cat->id == $productDetails->category_id) {
                $selected = 'selected';
            } else {
                $selected = '';
            }
            $categories_dropdown .= '<option value="' . $cat->id . '"' . $selected . '>' . $cat->name . '</option>';
        }
        //Code for shwing subcategories in main category
        $sub_categories = Category::where(['parent_id' => $cat->id])->get();
        foreach ($sub_categories as $sub_cat) {
            if ($sub_cat->id == $productDetails->category_id) {
                $selected = 'selected';
            } else {
                $selected = '';
            }
            $categories_dropdown .= "<option value='" . $sub_cat->id . "' " . $selected . ">&nbsp;--&nbsp" . $sub_cat->name . "</option>";
        }

        return view('admin.products.edit_product')->with(compact('productDetails', 'categories_dropdown'));
    }
    public function deleteProduct($id = null)
    {
        Products::where(['id' => $id])->delete();
        Alert::success('Deleted Successfully', 'Thank you');

        return redirect()->back()->with('flash_message_error', 'Product Deleted!!');
    }
    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Products::where('id', $data['id'])->update(['status' => $data['status']]);
    }

    public function products($id = null)
    {
        $productDetails = Products::with('attributes')->where('id', $id)->first();
        $productsAltImages = ProductsImages::where('product_id', $id)->get();
        $featuredProducts = Products::where(['featured_products' => 1])->get();
        //  echo $productDetails;die;
        return view('trucksmarkt.product_details')->with(compact('productDetails', 'productsAltImages', 'featuredProducts'));
    }

    public function addAttributes(Request $request, $id = null)
    {
        $productDetails = Products::with('attributes')->where('id', $id)->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo '<pre>'; print_r($data);die;
            foreach ($data['sku'] as $key => $val) {
                if (!empty($val)) {
                    // Prevent Duplicate SKU Record
                    $attrCountSKU = ProductsAttributes::where('sku', $val)->count();
                    if ($attrCountSKU > 0) {
                        return redirect('/admin/add-attributes/' . $id)->with('flash_message_error', 'SKU is already exist please selet another sku');
                    }
                    // Prevent Duplicate Size Record
                    $attrCountSizes = ProductsAttributes::where(['product_id' => $id, 'size' => $data['size'][$key]])->count();
                    if ($attrCountSizes > 0) {
                        return redirect('/admin/add-attributes/' . $id)->with('flash_message_error', '' . $data['size'][$key] . 'Size is already exist please selet another Size');
                    }
                    $attribute = new ProductsAttributes;
                    $attribute->product_id = $id;
                    $attribute->sku = $val;
                    $attribute->size = $data['size'][$key];
                    $attribute->price = $data['price'][$key];
                    $attribute->stock = $data['stock'][$key];
                    $attribute->save();
                }
            }
            return redirect('/admin/add-attributes/' . $id)->with('flash_message_success', 'Products attributes added successfully');
        }
        return view('admin.products.add_attributes')->with(compact('productDetails'));
    }
    public function deleteAttribute($id = null)
    {
        ProductsAttributes::where(['id' => $id])->delete();
        return redirect()->back()->with('flash_message_error', 'Product Attribute is deleted!!');
    }
    public function editAttributes(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            foreach ($data['attr'] as $key => $attr) {
                ProductsAttributes::where(['id' => $data['attr'][$key]])->update([
                    'sku' => $data['sku'][$key],
                    'size' => $data['size'][$key],
                    'price' => $data['price'][$key],
                    'stock' => $data['stock'][$key],
                ]);
            }
            return redirect()->back()->with('flash_message_success', 'Product Attributes updated!!');
        }
    }
    public function addImages(Request $request, $id = null)
    {
        $productDetails = Products::where(['id' => $id])->first();
        if ($request->isMethod('post')) {
            $data = $request->all();
            if ($request->hasfile('image')) {
                $files  = $request->file('image');
                foreach ($files as $file) {
                    $image = new ProductsImages;
                    $extension = $file->getClientOriginalExtension();
                    $filename = rand(111, 9999) . '.' . $extension;
                    $image_path = 'uploads/products/' . $filename;
                    Image::make($file)->save($image_path);
                    $image->image = $filename;
                    $image->product_id = $data['product_id'];
                    $image->save();
                }
            }
            return redirect('/admin/add-images/' . $id)->with('flash_message_success', 'Image has been updated');
        }
        $productImages = ProductsImages::where(['product_id' => $id])->get();
        return view('admin.products.add_images')->with(compact('productDetails', 'productImages'));
    }
    public function deleteAltImage($id = null)
    {
        $productImage = ProductsImages::where(['id' => $id])->first();
        $image_path = 'uploads/products';
        if (file_exists($image_path . $productImage->image)) {
            unlink($image_path . $productImage->image);
        }
        ProductsImages::where(['id' => $id])->delete();
        Alert::success('Deleted', 'Successfully');
        return redirect()->back();
    }
    public function updateFeatured(Request $request, $id = null)
    {
        $data = $request->all();
        Products::where('id', $data['id'])->update(['featured_products' => $data['status']]);
    }
    public function getPrice(Request $request)
    {
        $data = $request->all();
        // echo "<pre>";print_r($data);die;
        $proArr = explode("-", $data['idSize']);
        $proAttr = ProductsAttributes::where([
            'product_id' => $proArr[0],
            'size' => $proArr[1],
        ])->first();
        echo $proAttr->price;
    }
}
