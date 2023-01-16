<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\borrowed;  //add borrowed Models
use App\Models\books; //add books Models
use RealRashid\SweetAlert\Facades\Alert; //add sweetalert
use Illuminate\Support\Facades\DB;



class BorrowedController extends Controller
{
    public function index(){
        $books= books::paginate(10);
        return view('show')->with('books', $books);
    }
    public function indexshow(){
        return view('borrowed');
    }
    public function getborrowed(){
        $books= books::paginate(10);
        return view('borrowed')->with('books', $books);
    }

    public function saveborrowed(Request $request,$id){
        $query = DB::table('borroweds')->insert([
            'Fullname'=>$request->input('Fullname'),
            'Address'=>$request->input('Address'),
            'Contactnumber'=>$request->input('Contactnumber'),
            'Bookname'=>$request->input('Bookname'),
            'DateBorrowed'=>$request->input('DateBorrowed'),
            'ISBN'=>$request->input('ISBN'),

    ]);
 
    if($query)
    {
        books::find($id)->decrement('Quantity');
        Alert::success('Borrowed Successfully','Thank You');
      
            return redirect()->back();
    }
    else{

    }
        
    }
    public function updateborrowed(Request $request, $id){
        $borrowed = borrowed::find($id);
        $input = $request->all();
        $borrowed->fill($input)->save();

        if($borrowed)
            {
  
            Alert::success('Successfully Edit the Information','Thank You');
            return redirect('/');
        }
       
    }
    public function deleteborrowed($id)
    {
        $borrowed = borrowed::find($id);
        $borrowed->delete();
  
        return redirect('/');
    }
}
