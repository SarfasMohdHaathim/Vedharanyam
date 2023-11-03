<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Treatment;
use Ramsey\Uuid\Uuid; 
use Intervention\Image\Facades\Image;

class TreatmentController extends Controller
{
    public function create()
    {
        return view('treatments.create');
    }

    public function store(Request $request)
    {
        $croppedImageData = $request->input('croppedImage');
        if ($croppedImageData) {
            $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
            $storagePath = 'uploads/treatment/';
            $fileName = $request->input('name'). '_'.time()  . '.jpg';
            
            $croppedImageInstance = Image::make($croppedImage);
            $newSize = 300;
            $croppedImageInstance->resize($newSize, $newSize, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imageQuality = 80;
            $croppedImageInstance->encode('jpg', $imageQuality);
            $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
            
        }else{
            return redirect()->back()->withInput()->withErrors(['error' => 'Please select and crop image.']);
        }

        $uuid = Uuid::uuid4()->toString();
        $treatment = new Treatment();
        $treatment->id = $uuid;
        $treatment->name = $request->input('name');
        $treatment->thumbnail =  'uploads/treatment/'. $fileName; 
        $treatment->category = $request->input('category');
        $treatment->details = $request->input('content');
        $treatment->save();

        return redirect()->route('admintreatment')->with('success', 'Treatment created successfully');
    }

    public function show()
    {
        $treatments = Treatment::all();
        return view('treatment', ['treatments' => $treatments]);
    }

    public function edit($id)
    {
        $treatment = Treatment::findOrFail($id);
        return view('edittreatment', compact('treatment'));
    }

    public function update(Request $request, $id)
    {
        $treatment = Treatment::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2000000048', 
            'category' => 'required|string',
            'content' => 'required|string',
        ]);
        
        $treatment = Treatment::find($id);

        $treatment->name = $request->input('name');
        $treatment->category = $request->input('category');
        $treatment->details = $request->input('content');
        $croppedImageData = $request->input('croppedImage');
        if ($croppedImageData) {
            $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
            $storagePath = 'uploads/treatment/';
            $fileName = $request->input('name'). '_'.time()  . '.jpg';
            
            $croppedImageInstance = Image::make($croppedImage);
            $newSize = 300;
            $croppedImageInstance->resize($newSize, $newSize, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imageQuality = 80;
            $croppedImageInstance->encode('jpg', $imageQuality);
            $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
            $treatment->thumbnail = 'uploads/treatment/'. $fileName;
        }else if(!empty($request->input('thumbnail'))){
            return redirect()->back()->withInput()->withErrors(['error' => 'Please select and crop image.']);
        }
        $treatment->save();

        return redirect()->route('admintreatment')->with('success', 'Treatment updated successfully');
    }

    public function destroy($id)
    {
        $treatment = Treatment::findOrFail($id);
        $treatment->delete();

        return redirect()->route('admintreatment')->with('success', 'Treatment deleted successfully');
    }
}
