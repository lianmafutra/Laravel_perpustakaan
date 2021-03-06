<?php

namespace App\Http\Controllers\Admin;

use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BorrowController extends Controller
{
    public function index(){
        return view('admin.borrow.index',[
            'title' => 'Buku dipinjam'
        ]);
    }

    public function returnBook(Request $request, BorrowHistory $borrowHistory){
        $borrowHistory->update([
            'returned_at' => Carbon::now(),
            'admin_id'  =>  auth()->id(),

        ]);

        $borrowHistory->book()->increment('qty'); // menambah qty ketika buku dikembalikan
        return redirect()->back()->withSucces('Buku Dikembalikan');
       
    }
}
