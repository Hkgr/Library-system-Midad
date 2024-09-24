<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\book;

use App\Models\Borrow;

use Illuminate\Support\Facades\Auth;

use App\Models\user;

class HomeController extends Controller
{
    public function index(){
        $data = book::all();
        return view('home.index',compact('data'));
    }

    public function book_details($id){
        $data = book::all();
        return view('home.book_details',compact('data'));
    }

    public function borrow_books($id){
        $data = book::find($id);
        $qr = $data->quantity;

        $book_id = $id;

        if($qr >= '1'){ 

            if(Auth::id()){
                $user_id = Auth::user()->id;
                $borrow = new Borrow;
                $borrow -> book_id = $book_id;
                $borrow -> user_id = $user_id;
                $borrow->save();
                return redirect()->back()->with('message','request send to Library Manager');

            }
         
        }
        else{
            return redirect()->back()->with('message','the book not avalible right now');
        }


    }
}
