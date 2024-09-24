<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\book;

use App\Models\Borrow;

use App\Models\Category;

use Illuminate\Support\Facades\Auth;

use App\Models\user;

class HomeController extends Controller
{
    public function index()
    {
        $data = book::all();
        return view('home.index', compact('data'));
    }

    public function book_details($id)
    {
        $data = book::all();
        return view('home.book_details', compact('data'));
    }
    public function borrow_books(Request $request, $id)
    {
        $data = book::find($id);
        $qr = $data->quantity;

        if ($qr >= '1') {
            if (Auth::id()) {
                $user_id = Auth::user()->id;

                $borrow = new Borrow;
                $borrow->book_id = $id;
                $borrow->user_id = $user_id;
                $borrow->start_date = $request->start_date;
                $borrow->end_date = $request->end_date;
                $borrow->save();

                return redirect()->back()->with('message', 'Request sent to Library Manager');
            }
        } else {
            return redirect()->back()->with('message', 'The book is not available right now');
        }
    }
    public function explore()
    {
        $data = book::all();
        $category = Category::all();
        return view('home.explore', compact('data', 'category'));
    }
    public function search(Request $re)
    {
        $category = Category::all();
        $se = $re->search;
        $data = book::where('title', 'like', '%' . $se . '%')->orWhere('auther_name', 'like', '%' . $se . '%')->get();
        return view('home.explore', compact('data', 'category'));
    }

    public function cat_search($id){
        $category = Category::all();

        $data = book::where('category_id',$id)->get();
        return view('home.explore', compact('data', 'category'));

    }

}
