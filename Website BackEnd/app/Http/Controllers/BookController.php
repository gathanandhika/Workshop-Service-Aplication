<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Book;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        // Mengambil tanggal hari ini jika tidak ada tanggal yang dipilih
        $tanggal = $request->tanggal ? $request->tanggal : Carbon::now()->format('Y-m-d');

        // Mengambil data booking sesuai dengan tanggal yang dipilih
        $books = Book::whereDate('tanggal', $tanggal)->get();

        return view('dashboard.book.index', compact('books', 'tanggal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $opsiuser = User::all();
        return view ('dashboard.book.create', compact('opsiuser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('dashboard.book.show', [
            'books' => $book
        ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barangs = Barang::all();

        $book = Book::find($id);
        return view('dashboard.book.edit', compact(['book', 'barangs']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $book = Book::find($id);
        $sparepart = $request->input('sparepart');
        $harga = $request->input('harga');
        $kuantitas = $request->input('jumlahbarang');
        $total = $harga * $kuantitas;

        $validatedData = $request->validate([
            'sparepart' => '',
            'jumlahbarang' => 'required|numeric',
            'harga' => 'required|numeric',
        ]);

        $validatedData['sparepart'] = $sparepart;
        $validatedData['jumlahbarang'] = $kuantitas;
        $validatedData['harga'] = $harga;
        $validatedData['total_harga'] = $total;

        Book::where('id', $book->id)
            ->update($validatedData);

        return redirect ('/dashboard/book')->with('success', 'Data Booking has been Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::destroy($id);

        return redirect ('/dashboard/book')->with('success', 'Data has been deleted!');
    }

    public function booking(Request $request){

         // Mengambil jumlah booking pada hari yang sama
        $sameDayBooking = Book::whereDate('tanggal', $request->tanggal)->count();

        // Jika jumlah booking pada hari yang sama sudah mencapai batas maksimum
        if ($sameDayBooking >= 10) {
            return response()->json(['Message' => 'Maaf, jumlah booking pada hari ini sudah mencapai batas maksimum']);
        }
        
        // Melakukan proses booking jika belum mencapai batas maksimum
        Book::insert([
            // 'id_user'=>$userid,
            'nama' => $request->nama,
            'jenis_kendaraan' => $request->jenis_kendaraan,
            'nomor_kendaraan' => $request->nomor_kendaraan,
            'tanggal' => $request->tanggal,
        ]);

        return response()->json(['Message' => 'Berhasil membuat booking']);
    }

}
