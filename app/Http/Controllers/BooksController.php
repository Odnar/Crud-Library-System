<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\books; //add books Models
use App\Models\borrowed; //add borrowed Models
use RealRashid\SweetAlert\Facades\Alert; //add sweetalert

class BooksController extends Controller
{
    public function welcome(){
        return view('welcome');
    }
    public function index(){
        return view('show');
    }
    public function getbooks(){
        $books= books::paginate(10);
        return view('show')->with('books', $books);
    }
 
    public function savebooks(Request $request){
        $addbooks = new books;
        $addbooks->ISBN = $request->input('ISBN');
        $addbooks->BookName = $request->input('Bookname');
        $addbooks->Author = $request->input('Author');
        $addbooks->Quantity = $request->input('Quantity');
        $addbooks->save();

        if($addbooks){
            Alert::success('Successfully Add the Book','Thank You');
            return redirect('/');
        }
        else
        {
            Alert::failed('Something went wrong','Please refresh the page, Thank you');
            return redirect('/');
        }
 
        
    }
 
    public function update(Request $request, $id){
        $updatebooks = books::find($id);
        $input = $request->all();
        $updatebooks->fill($input)->save();
        
        if($updatebooks)
        {
            Alert::success('Successfully Edit the Book','Thank You');
            return redirect('/');
        }
        else
        {
            Alert::failed('Something went wrong','Please refresh the page, Thank you');
            return redirect('/');
        }
     
    }
 
    public function delete($id)
    {
        $deletebooks = books::find($id);
        $deletebooks->delete();
  
        if($deletebooks){
            Alert::success('Successfully Delete the Book','Thank You');
            return redirect('/');
        }
        else
        {
            Alert::failed('Something went wrong','Please refresh the page, Thank you');
            return redirect('/');
        }
        
    }
    public function searchbooks()
    {
            $search_text = $_GET['search'];
            $booksearch = books::where('Bookname','LIKE','%'.$search_text.'%')->get();
            return view('search',compact('booksearch'));
    }
}
