<?php

namespace App\Http\Controllers;

use Alert;
use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function addCategory(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $category = new Category;
            $category->name = $data['category_name'];
            $category->parent_id = $data['parent_id'];
            $category->url = $data['category_url'];
            $category->description = $data['category_description'];
            $category->save();
            Alert::success('Added Successfully', 'Thank you');
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category  Added Successfully!!');

        }
        $levels = Category::where(['parent_id' => 0])->get();
        return view('admin.category.add_category')->with(compact('levels'));
    }

    public function viewCategories()
    {
        $categories = Category::get();
        return view('admin.category.view_categories')->with(compact('categories'));
    }

    public function editCategory(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            Category::where(['id' => $id])->update([
                'name' => $data['category_name'],
                'parent_id' => $data['parent_id'],
                'url' => $data['category_url'],
                'description' => $data['category_description'],
            ]);
            return redirect('/admin/view-categories')->with('flash_message_success', 'Category  updated!!');
        }
        $levels = Category::where(['parent_id' => 0])->get();
        $categoryDetails = Category::where(['id' => $id])->first();
        return view('admin.category.edit_category')->with(compact('levels', 'categoryDetails'));
    }

    public function deleteCategory($id = null)
    {
        Category::where(['id' => $id])->delete();
        Alert::success('Deleted Successfully', 'Thank you');
        return redirect()->back();
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Category::where('id', $data['id'])->update(['status' => $data['status']]);
    }
}
