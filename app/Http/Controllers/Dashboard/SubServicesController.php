<?php
namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\SubServices;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSubServicesRequest;
use App\Http\Requests\UpdateSubServicesRequest;

class SubServicesController extends Controller
{
    /**
     * عرض قائمة الموارد.
     */
    public function index(Service $service)
    {
        return view('dashboard.sub_services.index', [
            'subServices' => SubServices::where('service_id', $service->id)->paginate(10),
        ]);
    }

    /**
     * عرض نموذج إنشاء مورد جديد.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.sub_services.create', compact('services'));
    }

    /**
     * تخزين مورد جديد.
     */
    public function store(StoreSubServicesRequest $request)
    {
        $subService = SubServices::create($request->validated());

        // التعامل مع تحميل الصورة باستخدام مكتبة Spatie Media Library
        if ($request->hasFile('image')) {
            $subService->addMedia($request->file('image'))->toMediaCollection('sub_services');
        }

        return redirect()->route('dashboard.sub_services.index', $subService->service_id)
            ->with('success', 'تم إنشاء الخدمة الفرعية بنجاح.');
    }

    /**
     * عرض نموذج تعديل المورد المحدد.
     */
    public function edit(SubServices $subService)
    {
        $services = Service::all();
        return view('dashboard.sub_services.edit', compact('subService', 'services'));
    }

    /**
     * تحديث المورد المحدد.
     */
    public function update(UpdateSubServicesRequest $request, SubServices $subService)
    {
        $subService->update($request->validated());

        // التعامل مع تحديث الصورة
        if ($request->hasFile('image')) {
            $subService->clearMediaCollection('sub_services');
            $subService->addMedia($request->file('image'))->toMediaCollection('sub_services');
        }

        return redirect()->route('dashboard.sub_services.index', $subService->service_id)
            ->with('success', 'تم تحديث الخدمة الفرعية بنجاح.');
    }

    /**
     * حذف المورد المحدد.
     */
    public function destroy(SubServices $subService)
    {
        $subService->clearMediaCollection('sub_services'); // حذف الصور
        $subService->delete();
        
        return redirect()->route('dashboard.sub_services.index', $subService->service_id)
            ->with('success', 'تم حذف الخدمة الفرعية بنجاح.');
    }
}
