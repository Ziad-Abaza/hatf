<?php
namespace App\Http\Controllers\Dashboard;


use App\Models\Service;
use App\Models\ServiceBaner;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceBanerRequest;
use App\Http\Requests\UpdateServiceBanerRequest;

class ServiceBanerController extends Controller
{
    /**
     * عرض قائمة الموارد.
     */
    public function index(Service $service)
    {
        return view('dashboard.service_baner.index', [
            'serviceBaners' => ServiceBaner::where('service_id', $service->id)->paginate(10),
        ]);
    }

    /**
     * عرض نموذج إنشاء مورد جديد.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.service_baner.create', compact('services'));
    }

    /**
     * تخزين مورد جديد.
     */
    public function store(StoreServiceBanerRequest $request)
    {
        $serviceBaner = ServiceBaner::create($request->validated());

                // التعامل مع تحميل الصورة باستخدام مكتبة Spatie Media Library
                if ($request->hasFile('image')) {
                    $serviceBaner->addMedia($request->file('image'))->toMediaCollection('services_baner');
                }

        return redirect()->route('dashboard.service_banners.index', $serviceBaner->service_id)
            ->with('success', 'تم إنشاء السؤال  بنجاح.');
    }

    /**
     * عرض نموذج تعديل المورد المحدد.
     */
    public function edit($serviceBaner)
    {
        $serviceBaner=ServiceBaner::find($serviceBaner);
        $services = Service::all();
        return view('dashboard.service_baner.edit', compact('serviceBaner', 'services'));
    }
    

    /**
     * تحديث المورد المحدد.
     */
    public function update(UpdateServiceBanerRequest $request,  $serviceBaner)
    {
        $serviceBaner=ServiceBaner::find($serviceBaner);

                // التعامل مع تحديث الصورة
                if ($request->hasFile('image')) {
                    $serviceBaner->clearMediaCollection('services_baner');
                    $serviceBaner->addMedia($request->file('image'))->toMediaCollection('services_baner');
                }
        
        $serviceBaner->update($request->validated());


        

        return redirect()->route('dashboard.service_banners.index', $serviceBaner->service_id)
            ->with('success', 'تم تحديث السؤال  بنجاح.');
    }

    /**
     * حذف المورد المحدد.
     */
    public function destroy($serviceBaner)
    {
        $serviceBaner->clearMediaCollection('services_baner'); // حذف الصور
        $serviceBaner=ServiceBaner::find($serviceBaner);
        $serviceBaner->delete();
        
        return redirect()->route('dashboard.service_banners.index', $serviceBaner->service_id)
            ->with('success', 'تم حذف السؤال  بنجاح.');
    }
}

