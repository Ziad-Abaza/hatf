<?php
namespace App\Http\Controllers\Dashboard;


use App\Models\Service;
use App\Models\Question;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;

class QuestionController extends Controller
{
    /**
     * عرض قائمة الموارد.
     */
    public function index(Service $service)
    {
        return view('dashboard.questions.index', [
            'questions' => Question::where('service_id', $service->id)->paginate(10),
        ]);
    }

    /**
     * عرض نموذج إنشاء مورد جديد.
     */
    public function create()
    {
        $services = Service::all();
        return view('dashboard.questions.create', compact('services'));
    }

    /**
     * تخزين مورد جديد.
     */
    public function store(StoreQuestionRequest $request)
    {
        $advantage = Question::create($request->validated());


        return redirect()->route('dashboard.questions.index', $advantage->service_id)
            ->with('success', 'تم إنشاء السؤال  بنجاح.');
    }

    /**
     * عرض نموذج تعديل المورد المحدد.
     */
    public function edit(Question $question)
    {
        $services = Service::all();
        return view('dashboard.questions.edit', compact('question', 'services'));
    }
    

    /**
     * تحديث المورد المحدد.
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        
        $question->update($request->validated());



        return redirect()->route('dashboard.questions.index', $question->service_id)
            ->with('success', 'تم تحديث السؤال  بنجاح.');
    }

    /**
     * حذف المورد المحدد.
     */
    public function destroy(Question $question)
    {
        $question->delete();
        
        return redirect()->route('dashboard.questions.index', $question->service_id)
            ->with('success', 'تم حذف السؤال  بنجاح.');
    }
}

