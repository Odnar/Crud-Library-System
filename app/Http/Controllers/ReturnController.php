<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\borrowed;  //add borrowed Models
use App\Models\books; //add books 
use App\Models\returnbook; //add return books Models
use RealRashid\SweetAlert\Facades\Alert; //add sweetalert
use Illuminate\Support\Facades\DB;


class ReturnController extends Controller
{
    public function index(){
        $books= books::paginate(10);
        return view('show')->with('books', $books);
    }

    public function getbooksborrowed(){
        $borroweds = borrowed::paginate(10);
        return view('borrowedbooks')->with('borroweds', $borroweds);
    }

    public function getbooksreturn(){
        $returnbooks = returnbook::paginate(10);
        return view('returnbooks')->with('returnbooks', $returnbooks);
    }
    public function updatereturn(Request $request, $id){
        $query1 = DB::table('returnbooks')
            ->insert([
            'Fullname'=>$request->input('Fullname'),
            'Address'=>$request->input('Address'),
            'Contactnumber'=>$request->input('Contactnumber'),
            'Bookname'=>$request->input('Bookname'),
            'ISBN'=>$request->input('ISBN'),
            'DateBorrowed'=>$request->input('DateBorrowed'),
            'DateReturn'=>$request->input('DateReturn'),

    ]);
          
        if($query1)
        {
            books::where('ISBN','=', $request->ISBN)->increment('Quantity');
            $query= DB::delete('delete from borroweds where id = ?',[$id]);
            Alert::success('Successfully Return the Book','Thank You');
            return redirect('/borrowedbooks');
        }
        
        else
        {
            Alert::failed(' Error','Please Refresh the page');
        }
       
    }

    public function updateborrowed(Request $request, $id){
        $updatebooks = borrowed::find($id);
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

    public function deletereturn(Request $request,$id)
    {
       $query= DB::delete('delete from borroweds where id = ?',[$id]);
       
        if($query)
        {   
            
            Alert::success(' Successfully Deleted','Thank You');
            return redirect('/borrowedbooks');
        }
        else
        {
            Alert::success(' Error','Please Refresh the page');
        }
    } 
    public function deletereturned(Request $request,$id)
    {
       $query= DB::delete('delete from returnbooks where id = ?',[$id]);
       
        if($query)
        {   
            
            Alert::success(' Successfully Deleted','Thank You');
            return redirect('/returnbooks');
        }
        else
        {
            Alert::success(' Error','Please Refresh the page');
        }
    }    

    public function searchreturn()
    {
            $search_return = $_GET['searchreturn'];
            $bookreturn = returnbook::where('Fullname','LIKE','%'.$search_return.'%')->get();
            return view('searchreturn',compact('bookreturn'));
    }
}
