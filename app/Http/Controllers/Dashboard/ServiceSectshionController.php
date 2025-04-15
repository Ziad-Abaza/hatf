<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Service;
use App\Models\ServiceSectshion;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreServiceSectshionRequest;
use App\Http\Requests\UpdateServiceSectshionRequest;

class ServiceSectshionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Service $service)
    {
        return view('dashboard.services_sectshions.index', [
            'subServices' => ServiceSectshion::where('service_id', $service->id)->paginate(10),
            'service' => $service,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Service $service)
    {
        return view('dashboard.services_sectshions.create', compact('service'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceSectshionRequest $request, Service $service)
    {
        // إضافة الـ service_id إلى البيانات القادمة من الطلب
        $data = $request->validated();
        $data['service_id'] = $service->id;
    
        // إنشاء الـ ServiceSectshion باستخدام البيانات الصحيحة
        $subService = ServiceSectshion::create($data);
    
        // التعامل مع تحميل الصورة باستخدام مكتبة Spatie Media Library
        if ($request->hasFile('image')) {
            $subService->addMedia($request->file('image'))->toMediaCollection('services_sectshions');
        }
    
        return redirect()->route('dashboard.service.sectshion.index', $service->id)
            ->with('success', 'تم الإنشاء بنجاح.');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(ServiceSectshion $serviceSectshion)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ServiceSectshion $serviceSectshion)
    {
        return view('dashboard.services_sectshions.edit', compact( 'serviceSectshion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceSectshionRequest $request, ServiceSectshion $serviceSectshion)
    {
        $serviceSectshion->update($request->validated());

        // التعامل مع تحديث الصورة
        if ($request->hasFile('image')) {
            $serviceSectshion->clearMediaCollection('service_sectshion');
            $serviceSectshion->addMedia($request->file('image'))->toMediaCollection('service_sectshion');
        }

        return redirect()->route('dashboard.service.sectshion.index', $serviceSectshion->service_id)
            ->with('success', 'تم تحديث  بنجاح.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceSectshion $serviceSectshion)
    {
        $serviceSectshion->clearMediaCollection('services_sectshions'); // حذف الصور
        $serviceSectshion->delete();
        
        return redirect()->route('dashboard.service.sectshion.index', $serviceSectshion->service_id)
            ->with('success', 'تم حذف  بنجاح.');
    }
}
