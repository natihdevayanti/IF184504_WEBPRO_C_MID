<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use App\Jawaban;
use Illuminate\Http\Request;

class JawabanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
    	// mengambil data jwv
		$jawaban = Jawaban::all();
		//$jawaban = Jawaban::with('get_users')->get();
 
    	// mengirim data jwb ke view
    	return view('jawaban', ['jawaban' => $jawaban]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jawaban::create($request->all());
        return redirect('/pertanyaans/'.$request->pertanyaan_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Jawaban $jawaban)
    {
        return view('jawabans.edit', compact('jawaban'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Jawaban $jawaban, Pertanyaan $pertanyaan)
    {
        {
            Jawaban::where('id', $jawaban->id)
                ->update([
                    'jawaban'=> $request->jawaban
                ]);
            return redirect('/pertanyaans/'.$jawaban->pertanyaan_id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jawaban $jawaban )
    {
        Jawaban::destroy($jawaban->id);
        return redirect('/pertanyaans/'.$jawaban->pertanyaan_id);
    }

}
