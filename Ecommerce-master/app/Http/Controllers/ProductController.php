<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Session;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();
        return view('product',['products'=>$data]);
    }

    function detail($id){
        $data = Product::find($id);
        return view('detail', ['product'=>$data]);
    }

    function search(Request $req){
        $data = Product::where('category','like', '%'.$req->input('query').'%')->get();
        return view('search', ['products'=>$data]);
    }

    function addToCart(Request $req){
        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        }else{
            return redirect('login');
        }
    }

    static function cartItem(){
        $user_id = Session::get('user')['id'];
        return Cart::where('user_id', $user_id)->count();
    }

    function cartList(){
        $user_id = Session::get('user')['id'];
        $result = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->select('products.*', 'carts.id as cart_id')
        ->where('carts.user_id', $user_id)
        ->get();
        return view('cartlist', ['products'=>$result]);
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('/cart_list');
    }

    function orderNow(){
        $user_id = Session::get('user')['id'];
        $result = DB::table('carts')
        ->join('products', 'carts.product_id', 'products.id')
        ->where('carts.user_id', $user_id)
        ->sum('products.price');
        return view('ordernow', ['total'=>$result]);
        // return $result;
    }

    function orderPlace(Request $req){
        $user_id = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $user_id)->get();
        foreach($allCart as $cart){
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->address = $req->address;
//            $order->status = "Pending";
            $order->payment_method = $req->payment;
            $order->payment_status = "Pending";
            $order->save();
        }
        Cart::where('user_id', $user_id)->delete();
        return redirect('/');
    }

    function myOrder(){
        $user_id = Session::get('user')['id'];
        $result = DB::table('orders')
        ->join('products', 'orders.product_id', 'products.id')
        ->where('orders.user_id', $user_id)
        ->get();
        return view('myorder', ['orders'=>$result]);
        // return $result;
    }

    function storeProduct(Request $req){
       return $this->store($req, Product::class,'products');
    }

    function deleteProduct($id){
        return $this->delete($id, Product::class,'products');
    }
}
