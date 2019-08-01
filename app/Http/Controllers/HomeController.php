<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product ;
use App\Feedback ;
use App\Prands ;
use TCG\Voyager\Models\Category ;
use App\contact ;
class HomeController extends Controller
{
    // this is function to show home page
    public function showHome()
    {
    	$products= Product::orderBy('id','desc')->take(3)->get();
    	$categories= Category::orderBy('id','desc')->take(6)->get();
    	$Feedbacks= feedback::orderBy('id','desc')->take(3)->get();
    	//dd($Feedbacks);
    	return view('home',['products'=>$products,
    						'categories'=>$categories,
    						'Feedbacks'=>$Feedbacks]);
    }

    //show all products (product page )
    public function showProducts_prand()
    {
    	$Prands = Prands::all();
    	$products = Product::all();//$Prands[0]['photo']
    	//dd($products[0]['category_id']);
    	return view ('products1',['Prands'=>$Prands,
    							 'products'=>$products]);
    }


 //show all products (product page )
    public function showProducts_cat()
    {
        $Category = Category::all();
        $products = Product::all();//$Prands[0]['photo']
        
        return view ('products_cat',['Category'=>$Category,
                                 'products'=>$products]);
    }

    public function post_details ($id)
    {
        $products1 = Product::find($id);
        //$Prands = Prands::all();
        //dd($de_product );
        return view ('products1',['products1'=>$products1]);

    }

    public function show_about ()
    {
        return view ('about');
    }

    public function show_contact ()
    {
        return view ('contact');
    }

    //for post contact  ['name','email', 'phone','subject','message' ]
    public function post_contact (request $request)
    {
        contact ::create ([

            'name' =>request('name'),
            'email' =>request('email'),
            'phone' =>request('phone'),
            'subject' =>request('subject'),
            'message'=>request('message'),
            
        ] ); 
        return redirect('/about');

    }
    public function findProduct(request $request)
    {
        if (request('Search') == null)
        {
        $Prands = Prands::all();
        $products = Product::all();//$Prands[0]['photo']
        //dd($products[0]['category_id']);
        return view ('products1',['Prands'=>$Prands,
                                 'products'=>$products]);
        }
        else{
        $id = request('Search');
        $products = Product::where('name','=',$id)->get();
        if (count($products)==0)
            $products = Product::where('SKU','=',$id)->get();
        $Prands= Prands::where( 'name' , '=', $products[0]->category_id)->get();
        return view ('products1',['products'=>$products,'Prands'=>$Prands]);
        }
        
    }

    public function showTermsForUs ()
    {
        return view ('terms');
    }

     public function showHowToBuy ()
    {
        return view ('buy');
    }

     public function showb2b ()
    {
        return view ('b2b');
    }

public function test ()
{
    $allColors=\App\colore_product::where('product_id','=','16')->get();
    //dd($allColors);
    //$x=0;
   // foreach($x=0;$x < count($allColors); $x++ )
    //{
        $color=\App\Color::where('id','=', $allColors[0]['color_id'])->first();
     //   $x++;
        dd($color->name);
   // }
    
}

 /*   //this function to select product about category
    public function selectProduct (Request $request)
    {
    	$Prands = Prands::all();
    	//dd($Prands[0]->name);
    	$prandName = request('button');
    	$selected = Product::where('prand_id','=',$prandName)->get();
    	return view ('products',['selected'=>$selected]);
    }*/
}
