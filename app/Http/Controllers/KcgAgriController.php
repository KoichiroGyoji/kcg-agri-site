<?php

namespace App\Http\Controllers;

use App\Models\Kcgagri;
use Illuminate\Http\Request;

class KcgAgriController extends Controller
{
    
    public function home()
    {
        // メッセージ一覧を取得
        $agris = Kcgagri::all();

        // メッセージ一覧ビューでそれを表示
        return view('agris.home', [
            'agris' => $agris,
        ]);
    }
    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
