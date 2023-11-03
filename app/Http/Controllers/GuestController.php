<?php

namespace App\Http\Controllers;
use App\Models\Blog; 
use App\Models\Contact; 
use App\Models\Gallery; 
use App\Models\Product; 
use App\Models\Treatment; 
use Illuminate\Http\Request;
use Ramsey\Uuid\Uuid; 

class GuestController extends Controller
{
    public function blog() {
        $blogs = Blog::orderBy('created_at', 'desc')->get();
        return view('guest.blog', ['blog' => $blogs]);
    }
    public function index() {
        $blogs = Blog::orderBy('created_at', 'desc')->take(2)->get();
        return view('guest.index', ['blog' => $blogs]);
    }
    public function blog_detail($blog)
    {
        $blog = Blog::where('name', $blog)->firstOrFail(); 
        $recentBlogs = Blog::where('id', '!=', $blog->id)
        ->latest()
        ->take(3)
        ->get();
        $previousBlog = Blog::where('id', '<', $blog->id)
        ->orderBy('id', 'desc')
        ->first();

    $nextBlog = Blog::where('id', '>', $blog->id)
        ->orderBy('id', 'asc')
        ->first();

        return view('guest.blog-inner', compact('blog', 'recentBlogs', 'previousBlog', 'nextBlog'));
    }
    public function treatment_detail($treatment)
    {
        $treatment = Treatment::where('name', $treatment)->firstOrFail(); 

        return view('guest.treatment-inner', compact('treatment'));
    }
    public function contact_page() {
        return view('guest.contact');
    }
    public function about_page() {
        return view('guest.about');
    }
    public function product_page() {
        $product = Product::all()->sortByDesc('created_at');
        return view('guest.product', ['product' => $product]);
    }
    public function gallery_page() {
        $galleries = Gallery::all()->sortByDesc('created_at');
        return view('guest.gallery', ['galleries' => $galleries]);
    }
    public function treatment_page() {
        $treatment = Treatment::all()->sortByDesc('created_at');
        return view('guest.treatment', ['treatments' => $treatment]);
    }
    public function storecontact(Request $request)
    {
        $this->validate($request, [
            'firstname' => 'required',
            'lastname' => 'required',
            'phone' => 'required',
            'emailaddress' => 'required|email',
            'msg' => 'required',
        ]);

        $contact = new Contact;
        $uuid = Uuid::uuid4()->toString();
        $contact->id = $uuid;
        $contact->firstname = $request->input('firstname');
        $contact->lastname = $request->input('lastname');
        $contact->phone = $request->input('phone');
        $contact->emailaddress = $request->input('emailaddress');
        $contact->message = $request->input('msg');
        $contact->save();

        return redirect()->route('guest.contact')->with('success', 'Contact saved successfully');
    }

    public function delete($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
        }
        return redirect()->route('success');
    }
}