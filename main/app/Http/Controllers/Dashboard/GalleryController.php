<?php
namespace App\Http\Controllers\Dashboard;


use App\Models\Gallery;
use App\Services\HndelImage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreGalleryRequest;

class GalleryController extends Controller
{

    public function index()
    {
       
        $images=Gallery::paginate(16);

        return view("dashboard.gallery.index",compact('images'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGalleryRequest $request)
    {
        $path = HndelImage::store($request->image);
        Gallery::create([
            'path'=>$path
        ]);
        return redirect()->back()->with('success','تم رفع الصورة بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gallery $gallery)
    {
       
        HndelImage::delete( $gallery->path);
        $gallery->delete();

        return redirect()->back()->with('success','تم حذف الصورة بنجاح');

    }
}
