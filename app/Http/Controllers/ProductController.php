<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Support\Facades\Stroage;
use File;




use App\Models\product;
use App\Models\catergory;



class ProductController extends Controller
{
    // ========================================================================================================
    // Admin Section
    public function productViewByAdmin()
    {

        $catergory = catergory::all();
        $products= product::all();
        return view('users.admin.products.viewProduct' ,compact(['products','catergory']));
    }

    // Product add
    public function addNewProduct(Request $request)
    {
        $products = new product();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('productImage',$filename);
            $products->image =$filename; 
        }  

        $products->catid = $request->input('catid');
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->buyingPrice = $request->input('buyingPrice');
        $products->sellingPrice	 = $request->input('sellingPrice')	;
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE? '1': '0' ;
        $products->trending = $request->input('trending') == TRUE? '1': '0' ;
        $products->meta_title = $request->input('meta_title');
        $products->meta_keyWord = $request->input('meta_keyWord');
        $products->meta_description = $request->input('meta_description');
        $products->save();
        return redirect()->back()->with('success','You Are successfully Registered !'); 
    }


    // edit Product
    public function editProduct($id)
    {
        $products = product::find($id);
        return view('users.admin.products.editProduct',compact(['products']));
    }


    //Update Product
    public function updateProduct(Request $request,$id)
    {
        $products = product::find($id);

        if($request->hasFile('image'))
        {
            $path = 'productImage/'.$products->image;
            if(File::exists($path))
            {
                file::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('productImage',$filename);
            $products->image =$filename; 
        }  

        
        $products->name = $request->input('name');
        $products->description = $request->input('description');
        $products->buyingPrice = $request->input('buyingPrice');
        $products->sellingPrice	 = $request->input('sellingPrice')	;
        $products->qty = $request->input('qty');
        $products->status = $request->input('status') == TRUE? '1': '0' ;
        $products->trending = $request->input('trending') == TRUE? '1': '0' ;
        $products->meta_title = $request->input('meta_title');
        $products->meta_keyWord = $request->input('meta_keyWord');
        $products->meta_description = $request->input('meta_description');
        $products->update();

        return redirect('/productViewByAdmin')->with('status','Successfuly updated product');
    }


    // view Stocks
    public function viewStock()
    {
        return view('users.admin.stock.viewStock');
    }


    // View CART
    public function viewCart()
    {
        return view('users.admin.cart.cart');
    }

    // view POS
    public function viewPOS()
    {
        return view('users.admin.pos.viewPOS');
    }


}
