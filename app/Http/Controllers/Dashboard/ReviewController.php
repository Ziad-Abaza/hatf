<?php
namespace App\Http\Controllers\Dashboard;


use App\Models\Review;
use App\Models\Service;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReviewRequest;
use App\Http\Requests\UpdateReviewRequest;

class ReviewController extends Controller
{
    /**
     * عرض قائمة الموارد.
     */
    public function index()
    {
        return view('dashboard.reviews.index', [
            'reviews' => Review::paginate(10),
        ]);
    }

    /**
     * عرض نموذج إنشاء مورد جديد.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.reviews.create', compact('services'));
    }

    /**
     * تخزين مورد جديد.
     */
    public function store(StoreReviewRequest $request)
    {
        $subService = Review::create($request->validated());

        // التعامل مع تحميل الصورة باستخدام مكتبة Spatie Media Library
        if ($request->hasFile('image')) {
            $subService->addMedia($request->file('image'))->toMediaCollection('reviews');
        }

        return redirect()->route('dashboard.service.index')
            ->with('success', 'تم إنشاء المراجعة بنجاح.');
    }

    /**
     * عرض نموذج تعديل المورد المحدد.
     */
    public function edit(Review $review)
    {
        $services = Service::all();
        return view('dashboard.reviews.edit', compact('review', 'services'));
    }

    /**
     * تحديث المورد المحدد.
     */
    public function update(UpdateReviewRequest $request, Review $review)
    {
        $review->update($request->validated());

        // التعامل مع تحديث الصورة
        if ($request->hasFile('image')) {
            $review->clearMediaCollection('reviews');
            $review->addMedia($request->file('image'))->toMediaCollection('reviews');
        }

        return redirect()->route('dashboard.service.index')
            ->with('success', 'تم تحديث المراجعة بنجاح.');
    }

    /**
     * حذف المورد المحدد.
     */
    public function destroy(Review $review)
    {
        $review->clearMediaCollection('reviews'); // حذف الصور
        $review->delete();
        
        return redirect()->route('dashboard.service.index')
            ->with('success', 'تم حذف المراجعة بنجاح.');
    }
}

