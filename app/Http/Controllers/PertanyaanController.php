<?php

namespace App\Http\Controllers;


use App\Pertanyaan;
use App\Jawaban;
use Illuminate\Http\Request;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/pertanyaans/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pertanyaan::create($request->all());
        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Pertanyaan $pertanyaan, Jawaban $jawaban)
    {
        $jawaban = Jawaban::where('pertanyaan_id','=', $pertanyaan->id)->get();
        return view('pertanyaans.show', compact('pertanyaan','jawaban'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        return view('pertanyaans.edit', compact('pertanyaan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        {
            Pertanyaan::where('id', $pertanyaan->id)
                ->update([
                    'pertanyaan'=> $request->pertanyaan
                ]);
            return redirect('/pertanyaans/'.$pertanyaan->id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pertanyaan::destroy($id);
        return redirect('/home');
    }

        public function indexx()
    {
    	// mengambil data pertanyaan
       $pertanyaan = Pertanyaan::all();
      // $pertanyaan = Pertanyaan::with('get_users')->get();
 
    	// mengirim data pertanyaan ke view pertanyaan
        //return view('pertanyaan', ['pertanyaan' => $pertanyaan]);
        return view('pertanyaan')->with([
    		'pertanyaan' => $pertanyaan
    	]);
    }
}
