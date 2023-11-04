<?php

namespace App\Http\Controllers;
use App\Models\Gallery; 
use App\Models\Blog; 
use App\Models\Product; 
use App\Models\Contact; 
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid; 
use Intervention\Image\Facades\Image;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {
        $contact = Contact::orderBy('created_at', 'desc')->get();

        return view('home', ['contact' => $contact]);
    }
    public function product()
    {
        $product = Product::orderBy('created_at', 'desc')->get();

        return view('product', ['product' => $product]);
    }
    public function addtreatment()
    {
        return view('addtreatment');
    }
    public function treatment()
    {
        return view('treatment');
    }
    public function addproduct()
    {
        return view('addproduct');
    }
    public function createproduct(Request $request)
    {
        $validatedData = $request->validate([
            'product_name' => 'required|string',
            'product_thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);
        $croppedImageData = $request->input('croppedImage');
        if ($croppedImageData) {
            $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
            $storagePath = 'uploads/product/';
            $fileName = $request->input('product_name'). '_'.time()  . '.jpg';
            
            $croppedImageInstance = Image::make($croppedImage);
            $newSize = 300;
            $croppedImageInstance->resize($newSize, $newSize, function ($constraint) {
                $constraint->aspectRatio();
            });
            $imageQuality = 80;
            $croppedImageInstance->encode('jpg', $imageQuality);
            $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
            $product = new Product();
            $uuid = Uuid::uuid4()->toString();
            $product->id = $uuid;
            $product->product_name = $validatedData['product_name'];
            $product->product_thumbnail = 'uploads/product/'. $fileName ;
            $product->save();
        }else{
            return redirect()->back()->withInput()->withErrors(['error' => 'Please select and crop image.']);
        }

        return redirect()->route('adminproduct')->with('success', 'Product added successfully.');
    }
    public function productdestroy($id)
    {
    $p = Product::find($id);
    if ($p) {
        $p->delete();
        return redirect()->route('adminproduct')->with('success', 'Product deleted successfully.');
    }
    return redirect()->route('adminproduct')->with('error', 'Product not found.');
    }
    public function gallery()
    {
    $galleries = Gallery::all()->sortByDesc('created_at');
    return view('gallery', ['galleries' => $galleries]);
    }
    public function gallerydestroy($id)
    {
    $gallery = Gallery::find($id);
    if ($gallery) {
        $gallery->delete();
        return redirect()->route('admingallery')->with('success', 'Gallery deleted successfully.');
    }
    return redirect()->route('admin.gallery')->with('error', 'Gallery not found.');
    }
    public function addgallery()
    {
        return view('addgallery');
    }
    public function uploadgallery(Request $request)
    {
        {
            $request->validate([
                'title' => 'required|string|max:255',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480', 
                'category' => 'required|string|max:255',
            ]);
            $croppedImageData = $request->input('croppedImage');
            if ($croppedImageData) {
                $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
                $storagePath = 'uploads/gallery/';
                $fileName = $request->input('title'). '_'.time()  . '.jpg';
                
                $croppedImageInstance = Image::make($croppedImage);
                $newSize = 300;
                $croppedImageInstance->resize($newSize, $newSize, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $imageQuality = 80;
                $croppedImageInstance->encode('jpg', $imageQuality);
                $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
                
            $uuid = Uuid::uuid4()->toString();
            $gallery = new Gallery();
            $gallery->id = $uuid;
            $gallery->title = $request->input('title');
            $gallery->thumbnail = 'uploads/gallery/'. $fileName; 
            $gallery->category = $request->input('category');
            $gallery->save();
                
            }else{
                return redirect()->back()->withInput()->withErrors(['error' => 'Please select and crop image.']);
    
            }
    
            return redirect()->route('admingallery')->with('success', 'Gallery added successfully.');
        }
    }
    public function create()
    {
        return view('addblog');
    }
    public function view()
    {
        $blog = Blog::orderBy('created_at', 'desc')->get();
        return view('blog', ['blog' => $blog]);
    }

    public function store(Request $request)
    {
        $croppedImageData = $request->input('croppedImage');
        if ($croppedImageData) {
            $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
            $storagePath = 'uploads/blog/';
            $fileName = $request->input('name'). '_'.time()  . '.jpg';
            
            $croppedImageInstance = Image::make($croppedImage);
            $croppedImageInstance->resize(1920, 1200, function ($constraint) {
                $constraint->aspectRatio();
            });
            $croppedImageInstance->encode('jpg');
            $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
            $uuid = Uuid::uuid4()->toString();
            $blog = new Blog();
            $blog->id = $uuid;
            $blog->name = $request->input('name');
            $blog->des = $request->input('des');
            $blog->thumbnail =  'uploads/blog/'. $fileName; 
            $blog->content = $request->input('content');
            $blog->save();
        }else{
            return redirect()->back()->withInput()->withErrors(['error' => 'Please select and crop image.']);
        }
        return redirect()->route('blog.view')->with('success', 'Blog created successfully.');
    }
    public function destroy($id)
    {
    $blog = Blog::find($id);
    if ($blog) {
        $blog->delete();
        return redirect()->route('blog.view')->with('success', 'Blog deleted successfully.');
    }
    return redirect()->route('blog.view')->with('error', 'Blog not found.');
    }
    public function edit($id)
    {
        $blog = Blog::find($id);
        return view('editblog', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'des' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:200048',
            'content' => 'required',
        ]);

        $blog = Blog::find($id);

        $blog->name = $request->input('name');
        $blog->des = $request->input('des');
        $blog->content = $request->input('content');
        
        $croppedImageData = $request->input('croppedImage');
        if ($croppedImageData) {
            $croppedImage = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $croppedImageData));
            $storagePath = 'uploads/blog/';
            $fileName = $request->input('name'). '_'.time()  . '.jpg';
            
            $croppedImageInstance = Image::make($croppedImage);
            $croppedImageInstance->resize(1920, 1200, function ($constraint) {
                $constraint->aspectRatio();
            });
            $croppedImageInstance->encode('jpg');
            $croppedImageInstance->save(storage_path("app/public/{$storagePath}/{$fileName}"));
            $blog->thumbnail = 'uploads/blog/'. $fileName;
            
        }else if(!empty($request->input('thumbnail'))){
            return redirect()->back()->withErrors(['error' => 'Please select and crop image.']);
        }
        $blog->save();

        return redirect()->route('blog.view')->with('success', 'Blog updated successfully.');
    }

}