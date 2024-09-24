<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\book;

use App\Models\Category;

use App\Models\Borrow;

use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
         
        if (Auth::id()){
            $user_type = Auth()->User()->usertype;
        }

        if($user_type == 'manager'){
            $user = User::all()->count();
            $book = book::all()->count();
            $borrow = Borrow::all()->count();
            $approve = Borrow::where('status','approved')->count();
            return view('manager.index',compact('user','book','approve','borrow'));
        }
        else if($user_type == 'user'){
            $data = book::all();

            return view ('home.index',compact('data'));
        }

        else {
            return redirect()->back();
        }

    }

    public function category_page(){
        $data = Category::all();
        return view('manager.category',compact('data'));
    }
    public function add_category(Request $request){
      $data = new Category;
      $data -> cat_title = $request -> category;
      $data -> save();
      return redirect()->back()->with('message','تم إضافة الفئة بنجاح');
    }

    public function cat_delete($id){
        $data = Category::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function edit_category($id){
       $data = Category::find($id);
        return view('manager.edit_category',compact('data'));
    }

    public function update_category(Request $request,$id){
        $data = Category::find($id);
        $data -> cat_title = $request->cat_name;
        $data->save();
        return redirect('/category_page');
         }

    public function add_book(){
            $data = Category::all(); 
            return view('manager.add_book',compact('data'));
    }
    public function store_book(Request $request){
        $data =new book;
        $data -> title = $request -> book_name;
        $data -> auther_name = $request -> auther_name;
        $data -> quantity = $request -> quantity;
        $data -> desc = $request -> description;
        $data -> category_id = $request -> category;

        $book_image = $request -> book_img;

        if($book_image){
            $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
            $request ->book_img ->move('book', $book_image_name);
            $data->book_img=$book_image_name;
        }

        $auther_image = $request -> auther_img;

        if($auther_image){
            $auther_image_name = time().'.'.$auther_image->getClientOriginalExtension();
            $request ->auther_img ->move('auther', $auther_image_name);
            $data->auther_img=$auther_image_name;
        }


        $data -> save();
        return redirect()->back();

         }

public function show_books(){
    $book = book::all();
    return view('manager.show_books',compact('book'));
}
public function book_delete($id){
 $data = book::find($id);
 $data->delete();
 return redirect()->back()->with('message','Book Deleted');
}
public function edit_book($id){

    $data =book::find($id);
    $category = category::all();
    return view('manager.edit_book',compact('data','category'));
   }

   public function update_book(Request $request,$id){
    $data = book::find($id);

    $data -> title = $request -> book_name;
    $data -> auther_name = $request -> auther_name;
    $data -> quantity = $request -> quantity;
    $data -> desc = $request -> description;
    $data -> category_id = $request -> category;
    $book_image = $request -> book_img;

    if($book_image){
        $book_image_name = time().'.'.$book_image->getClientOriginalExtension();
        $request ->book_img ->move('book', $book_image_name);
        $data->book_img=$book_image_name;
    }

    $auther_image = $request -> auther_img;

    if($auther_image){
        $auther_image_name = time().'.'.$auther_image->getClientOriginalExtension();
        $request ->auther_img ->move('auther', $auther_image_name);
        $data->auther_img=$auther_image_name;
    }


    $data -> save();
    return redirect()->back();


   }

   public function borrow_request(){
    $data = Borrow::all();
    return view('manager.borrow_request',compact('data'));
}
public function accept_borrow($id){
    $data = borrow::find($id);
    $status = $data->status;
    if($status == 'approved'){
        return redirect()->back();
    }
    else{
        $data->status = 'approved';
        $bookid = $data->book_id;
        $book = book::find($bookid);
        $book_q = $book->quantity - '1';
        $book->quantity = $book_q;
        $data->save();
        $book->save();
        return redirect()->back();
    }

}
public function deny_borrow($id){
    $data = borrow::find($id);
    $data->status = "reject";
    $data->save();
    return redirect()->back();
}
}
