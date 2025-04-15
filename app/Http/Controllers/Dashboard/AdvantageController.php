<?php
namespace App\Http\Controllers\Dashboard;


use App\Models\Service;
use App\Models\Advantage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdvantageRequest;
use App\Http\Requests\UpdateAdvantageRequest;

class AdvantageController extends Controller
{
    /**
     * عرض قائمة الموارد.
     */
    public function index(Service $service)
    {
        return view('dashboard.advantages.index', [
            'advantages' => Advantage::where('service_id', $service->id)->paginate(10),
        ]);
    }

    /**
     * عرض نموذج إنشاء مورد جديد.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.advantages.create', compact('services'));
    }

    /**
     * تخزين مورد جديد.
     */
    public function store(StoreAdvantageRequest $request)
    {
        $advantage = Advantage::create($request->validated());


        return redirect()->route('dashboard.advantages.index', $advantage->service_id)
            ->with('success', 'تم إنشاء الميزة  بنجاح.');
    }

    /**
     * عرض نموذج تعديل المورد المحدد.
     */
    public function edit(Advantage $advantage)
    {
        $services = Service::all();
        return view('dashboard.advantages.edit', compact('advantage', 'services'));
    }
    

    /**
     * تحديث المورد المحدد.
     */
    public function update(UpdateAdvantageRequest $request, Advantage $advantage)
    {
        
        $advantage->update($request->validated());



        return redirect()->route('dashboard.advantages.index', $advantage->service_id)
            ->with('success', 'تم تحديث الميزة  بنجاح.');
    }

    /**
     * حذف المورد المحدد.
     */
    public function destroy(Advantage $advantage)
    {
        $advantage->delete();
        
        return redirect()->route('dashboard.advantages.index', $advantage->service_id)
            ->with('success', 'تم حذف الميزة  بنجاح.');
    }
}