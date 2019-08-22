<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Medicinecategory;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index()
  {
    $medicines = Medicine::orderBy('created_at', 'desc')->take(7)->get();
    $fmedicines = Medicine::where('featured', '1')->get();

    return view('home', compact('medicines'), compact('fmedicines'));
  }


  public function contactus()
  {
    return view('contactus');
  }

  public function cart($id)
  {
    $product = Medicine::find($id);
    return view('cart', compact('product'));
  }

  public function checkout(Request $request)
  {
    // dd($request->product_id);
    // $product = Medicine::find($id);
    
    // $data = $request->all();
    // $data = $data['quantity'];
    // $data['product_id'] = $request->product_id;
    // $data['quantity'] = $request->quantity;
    // dd($data);
    return redirect()->route('get.checkout',[$request->product_id,$request->quantity]);
    // return view('checkout', $data);
  }

  public function sproduct($id)
  {
    $product = Medicine::find($id);
    $cats = $product->category_id;
    $medicines = Medicine::where('category_id', $cats)->inRandomOrder()->take(4)->get();
    return view('singleproduct', compact('product'), compact('medicines'));
  }

  public function customerlogin()
  {
    return view('customerlogin');
  }

  public function customerregister()
  {
    return view('customerregister');
  }

  public function category()
  {
    return view('category');
  }


  public function uploadprescription()
  {
    return view('uploadprescription');
  }

  public function prescription()
  {
    $cats = Medicinecategory::where('name', 'Prescription')->first();
    // dd($cats);
    $medicines = Medicine::where('category_id', $cats['id'])->get();

    $lmedicines = Medicine::where('category_id', $cats['id'])->orderBy('created_at', 'desc')->take(7)->get();

    return view('prescription', compact('medicines'), compact('lmedicines'));
  }

  public function nonprescription()
  {
    $cats = Medicinecategory::where('name', 'Non-Prescription')->first();
    // dd($cats);
    $medicines = Medicine::where('category_id', $cats['id'])->get();

    $lmedicines = Medicine::where('category_id', $cats['id'])->orderBy('created_at', 'desc')->take(7)->get();

    return view('nonprescription', compact('medicines'), compact('lmedicines'));
  }

  public function searchMedicine()
  {
    return view('search');
  }

  public function search(Request $request)
  {
    $search = $request->get('search');

    $data = Medicine::where('name', 'Like', '%' . $search . '%')->paginate(2);

    return view('search')->with('data', $data);
  }
}
