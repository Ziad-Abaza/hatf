<?php
namespace App\Http\Controllers\Dashboard;


use App\Models\Service;
use App\Models\features;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorefeaturesRequest;
use App\Http\Requests\UpdatefeaturesRequest;

class FeaturesController extends Controller
{
    /**
     * عرض قائمة الموارد.
     */
    public function index(Service $service)
    {
        return view('dashboard.features.index', [
            'features' => features::all(),
        ]);
    }

    /**
     * عرض نموذج إنشاء مورد جديد.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.features.create', compact('services'));
    }

    /**
     * تخزين مورد جديد.
     */
    public function store(StorefeaturesRequest $request)
    {
        $features = features::create($request->validated());

        if ($request->hasFile('image')) {
            $features->addMedia($request->file('image'))->toMediaCollection('features');
        }

        return redirect()->route('dashboard.service.index')
            ->with('success', 'تم إنشاء السمة بنجاح.');
    }

    /**
     * عرض نموذج تعديل المورد المحدد.
     */
    public function edit(features $feature)
    {
        $services = Service::all();
        return view('dashboard.features.edit', compact('feature', 'services'));
    }

    /**
     * تحديث المورد المحدد.
     */
    public function update(UpdatefeaturesRequest $request, features $feature)
    {
        $feature->update($request->validated());

        // التعامل مع تحديث الصورة
        if ($request->hasFile('image')) {
            $feature->clearMediaCollection('features');
            $feature->addMedia($request->file('image'))->toMediaCollection('features');
        }

        return redirect()->route('dashboard.service.index')
            ->with('success', 'تم تحديث السمة بنجاح.');
    }

    /**
     * حذف المورد المحدد.
     */
    public function destroy(features $feature)
    {
        $feature->clearMediaCollection('features'); // حذف الصور
        $feature->delete();

        return redirect()->route('dashboard.service.index')
            ->with('success', 'تم حذف السمة بنجاح.');
    }
}
