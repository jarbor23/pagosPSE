<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Transaccion;
use Illuminate\Http\Request;

class TransaccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 15;

        if (!empty($keyword)) {
            $transaccion = Transaccion::where('transactionID', 'LIKE', "%$keyword%")
                ->paginate($perPage);
        } else {
            $transaccion = Transaccion::paginate($perPage);
        }

        return view('transaccionLista', compact('transaccion'));
    }
}