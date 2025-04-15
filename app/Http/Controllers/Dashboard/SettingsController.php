<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;

class SettingsController extends Controller
{
    // Show the 'descraption' value from the config file
    public function index()
    {
        // Retrieve the value from the config file
        $description = config('app-meta.descraption'); 
        $keyWords    = config('app-meta.key_words'); 

        // Return the value as JSON (or use a view if needed)
        return view('dashboard.settings.meta',['description'=>$description,'keyWords'=>$keyWords]);
    }

    // Update the 'descraption' value in the config file
    public function update(Request $request)
    {
        // Validate the input
        $request->validate([
            'descraption' => 'required|string', // Adjust validation rules as needed
            'keyWords' => 'required|string', // Adjust validation rules as needed
        ]);

        $newDescription = $request->input('descraption');
        $keyWords       = $request->input('keyWords');

        $configPath = config_path('app-meta.php'); // Replace `your_config_file.php` with the actual file name

        if (File::exists($configPath)) {
            // Load the current config as an array
            $configArray = include $configPath;

            // Update the 'descraption' key
            $configArray['descraption'] = $newDescription;
            $configArray['key_words'] = $keyWords;


            // Save the updated array back to the config file
            $configContent = "<?php return \n" . var_export($configArray, true) . ";\n?>";
            File::put($configPath, $configContent);

            // Clear the configuration cache
            Artisan::call('config:clear');

            return redirect()->back()->with('success', value: 'Description updated successfully!');
        }

        return response()->json(['message' => 'Config file not found.'], 404);
    }
}
