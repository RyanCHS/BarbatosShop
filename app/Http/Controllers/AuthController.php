<?php

namespace App\Http\Controllers;

use App\Models\cart;
use App\Models\history;
use App\Models\product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class AuthController extends Controller
{
    public function login(){
        return view('loginPage');
    }

    public function loginAction(Request $request){
       
        $credentials = [
            'email'=> $request->emailInput,
            'password' => $request->passwordInput
        ];

        if(!Auth::attempt($credentials, true)){
            return redirect()->back()->withErrors([
                'email' => 'invalid Credentials'
            ]);
        }

        if($request->rememberInput !== null){
            Cookie::queue('CookieEmail', $request->emailInput, 120);   
            Cookie::queue('CookiePassword', $request->passwordInput, 120);  
        }

        return redirect('/')->with('success', 'Login Success');
    }

    public function register(){
        return view('regisPage');
    }

    public function regisAction(Request $request){
        $request->validate([
            'nameInput' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'passwordInput' => 'required|min:8|alpha_num',
            'password_confirmation' => 'same:passwordInput',
            'genderInput' => 'required',
            'dateInput' => 'required|before:today|after:1900-01-01',
            'countryInput' => 'required'
        ], [
            'nameInput.required' => 'Name is required',
            'nameInput.min' => 'Name must contain 5 or more character',
            'email.required' => 'Email is required',
            'email.unique' => 'Email has already been taken',
            'passwordInput.required' => 'Password is required',
            'passwordInput.min' => 'Password must contain 8 or more character',
            'password_confirmation.same' => 'The password confirmation does not match',
            'genderInput.required' => 'Gender is required',
            'dateInput.required' => 'Date of Birth is required',
            'dateInput.before' => 'The date must before today',
            'dateInput.after' => 'The date must after 1900-01-01',
            'countryInput.required' => 'Country is required',
            
        ]);
        //|date_format:Y-m-d
        $user = new User();
        $user->name = $request->nameInput;
        $user->email = $request->email;
        $user->password = bcrypt($request->passwordInput);
        $user->gender = $request->genderInput;
        $user->date_of_birth = Carbon::createFromFormat('m/d/Y', $request->dateInput)->format('Y-m-d');
        $user->country = $request->countryInput;
        $user->save();

        return redirect('/')->with('success', 'Registration Success');
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function profile(){
        return view('userProfile');
    }

    public function manage_product(){
        $products = DB::table('products')->paginate(10);

        $data = [
            'products' => $products,
        ];

        return view('manageProduct', $data);
    }

    public function search_manage(Request $request){
        $name = $request->search;
        $products = product::where('name', 'LIKE', "%$name%")->paginate(10)->withQueryString();
        $data =[
            'products' => $products
        ];
        return view('searchManageProduct', $data)->with('name', $name);
    }

    public function delete_product(Request $request){
        $product = product::find($request->product_id);
        $product->delete();

        return redirect('/manageProduct');
    }

    public function add_page(){

        return view('addProductPage');
    }

    public function store(Request $request){
        $request->validate([
            'nameInput' => 'required',
            'categoryInput' => 'required',
            'detailInput' => 'required',
            'priceInput' => 'required|integer',
            'inputImage' => 'required|mimes:jpeg,jpg,png'
        ]);

        $file = $request->file('inputImage');
        $imageName = $file->getClientOriginalName();

        Storage::putFileAs('/public/assets', $file, $imageName);

        DB::table('products')->insert([
            'name' => $request->nameInput,
            'category_id' => $request->categoryInput,
            'detail' => $request->detailInput,
            'price' => $request->priceInput,
            'image' => $imageName
        ]);

        return redirect('/manageProduct')->with('success', 'New Product Successfully Added');
    }

    public function update_page(int $product_id = 0){
        $products = product::where('id', $product_id)->get();

        return view('updateProduct', compact('products')); 
    }

    public function update_product_logic(Request $request){
        $product = product::find($request->product_id);

        $request->validate([
            'nameInput' => 'required',
            'categoryInput' => 'required',
            'detailInput' => 'required',
            'priceInput' => 'required|integer',
            'inputImage' => 'required|mimes:jpeg,jpg,png'
        ]);

        $file = $request->file('inputImage');
        $imageName = $file->getClientOriginalName();

        Storage::putFileAs('/public/assets', $file, $imageName);

        $product->name = $request->nameInput;
        $product->category_id = $request->categoryInput;
        $product->detail = $request->detailInput;
        $product->price = $request->priceInput;
        $product->image = $imageName;
        $product->save();

        return redirect('/manageProduct')->with('success', 'Product Successfully Updated');

    }

    public function pruchase(Request $request){
        $request->validate([
            'quantityInput' => 'required|integer|not_in:0'
        ]);

        $product = product::find($request->product_id);
        // $isProductExist = cart::select('*')
        // ->where('product_id', '=', $request->product_id)
        // ->where('user_id', '=', Auth::user()->id)
        // ->where('status', '=', 0)->get();

        // if($isProductExist !== null){
        //     $cart_id = cart::where('product_id', '=', $request->product_id, 'AND', 'user_id', '=', Auth::user()->id)->pluck('id');
        //     $cart = cart::find($cart_id);
        //     $total = $isProductExist->quantity + $request->quantityInput;
        //     $isProductExist->quantity = $total;
        //     $isProductExist->price = $product->price*$total;
        //     $$isProductExist->save();
        //     return redirect()->back()->with('success', 'Product already Exist in Cart');
        // }
        // else{
        // }
        
        $cart = new cart();
        $cart->user_id = Auth::user()->id;
        $cart->product_id = $request->product_id;
        $cart->quantity = $request->quantityInput;
        $cart->subtotal = $product->price*$request->quantityInput;
        $cart->save();
            
        return redirect()->back()->with('success', 'Product Successfully Added to your Cart');
    }

    public function purchaseCart(Request $request){

        $history = new history();
        $history->user_id_history = Auth::user()->id;
        $history->save();

        cart::select('*')
        ->where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 0)
        ->update(['history_id' => $history->id, 'status' => 1]);
            
        return redirect()->back()->with('success', 'Your purchase Complete');
    }

    public function cart_page(){
        $carts = cart::select('*')
        ->where('user_id', '=', Auth::user()->id)
        ->where('status', '=', 0)
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->get();

        return view('cartPage', compact('carts'));
    }
    
    public function delete_cart(Request $request){
        $cart = cart::where('cartId', $request->cart_id);
        $cart->delete();

        return redirect()->back()->with('success', 'Product Successfully Removed');
    }

    public function history_page(){
        $histories = history::where('user_id_history', '=', Auth::user()->id)->get();

        $historieDetails = history::where('user_id_history', '=', Auth::user()->id)
        ->select('carts.history_id', 'products.name', 'carts.quantity', 'carts.subtotal')
        ->join('carts', 'carts.history_id', '=', 'histories.id')
        ->join('products', 'products.id', '=', 'carts.product_id')
        ->get();

        $data =[
            'histories' => $histories,
            'historieDetails' => $historieDetails
        ];

        return view('historyPage', $data);
    }
}
