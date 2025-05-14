<?php
namespace App\Http\Controllers\Dashboard;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class LanguageController extends Controller
{

    public $langPath ;

    public function index($slug='home')
    {
        $this->langPath = "frontend/{$slug}.php";


        $translations = [
            'en' => include base_path('lang/en/' . $this->langPath),
            'ar' => include base_path('lang/ar/' . $this->langPath),
        ];

        return view('dashboard.Language.index', compact('translations','slug'));
    }

    public function edit($locale,$language,$key,$slug)
    {

        $this->langPath = "frontend/{$slug}.php";

        // Load the specific language file
        $translations = include base_path("lang/{$locale}/" . $this->langPath);


        // Navigate to the requested key (dot notation to array)
        $value = data_get($translations, $key);


        return view('dashboard.Language.edit', compact('locale', 'key', 'value','language','slug'));
    }

    public function update($locale,$language,$key,Request $request,$slug)
    {
        $this->langPath = "frontend/{$slug}.php";

        // Load the language file
        $filePath = base_path("lang/{$locale}/" . $this->langPath);
        $translations = include $filePath;

        // Update the key
        data_set($translations, $key, $request->input('value'));

        // Save back to the file
        $this->saveTranslations($filePath, $translations);

        return redirect()->back()->with('message', __('share.message.update'));
    }

    private function saveTranslations($filePath, $translations)
    {
        // Convert array back to PHP code
        $content = "<?php\n\nreturn " . var_export($translations, true) . ";\n";

        file_put_contents($filePath, $content);
    }
}
