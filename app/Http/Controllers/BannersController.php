<?php

namespace App\Http\Controllers;

use Alert;
use App\Banners;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Image;

class BannersController extends Controller
{
    public function banners()
    {
        $bannerDetails = Banners::get();
        return view('admin.banner.banners')->with(compact('bannerDetails'));
    }
    public function addBanner(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            $banner = new Banners;
            $banner->name = $data['banner_name'];
            $banner->text_style = $data['text_style'];
            $banner->sort_order = $data['sort_order'];
            $banner->content = $data['banner_content'];
            $banner->link = $data['link'];
            //Upload image
            if ($request->hasfile('image')) {
                $img_tmp = Input::file('image');
                if ($img_tmp->isValid()) {
                    //image path code
                    $extension = $img_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $banner_path = 'uploads/banners/' . $fileName;
                    //image resize
                    Image::make($img_tmp)->resize(500, 500)->save($banner_path);
                    $banner->image = $fileName;
                }
            }
            $banner->save();
            return redirect('/admin/banners')->with('flash_message_success', 'banner is successfullt added!!');
        }
        return view('admin.banner.add_banner');
    }
    public function editBanner(Request $request, $id = null)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            //Upload image
            if ($request->hasFile('image')) {
                $img_tmp = Input::file('image');
                if ($img_tmp->isValid()) {
                    //Upload Image after Resize
                    $extension = $img_tmp->getClientOriginalExtension();
                    $fileName = rand(111, 99999) . '.' . $extension;
                    $banner_path = 'uploads/banners/' . $fileName;
                    Image::make($img_tmp)->save($banner_path);
                }
            } else if (!empty($data['current_image'])) {
                $fileName = $data['current_image'];
            } else {
                $fileName = '';
            }
            Banners::where(['id' => $id])->update([
                'name' => $data['banner_name'],
                'text_style' => $data['text_style'],
                'content' => $data['banner_content'],
                'link' => $data['link'],
                'sort_order' => $data['sort_order'],
                'image' => $fileName]);

            return redirect('/admin/banners')->with('flash_message_success', 'Banner has been updated!!');

        }
        $bannerDetails = Banners::where(['id' => $id])->first();
        return view('admin.banner.edit_banner')->with(compact('bannerDetails'));
    }

    public function deleteBanner($id = null)
    {
        Banners::where(['id' => $id])->delete();
        Alert::success('Deleted Successfully', 'Thank you');
        return redirect()->back();
    }

    public function updateStatus(Request $request, $id = null)
    {
        $data = $request->all();
        Banners::where('id', $data['id'])->update(['status' => $data['status']]);
    }
}
