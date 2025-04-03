<?php

namespace App\Http\Controllers;

use App\Models\ExportPdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ExportPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = ExportPdf::all();

        return view('index', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string',
            'surname' => 'required|string',
            'age' => 'required|integer',
            'city' => 'required|string'
        ]);

        $data = ExportPdf::create($validatedData);

        return back()->with('success', 'Successfuly created data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = ExportPdf::findOrFail($id);
        $data->delete();

        return back()->with('success', 'Succesfully delete data!');
    }

    /*
    * Export PDF
    */
    public function exportPdf()
    {
        $data = ExportPdf::all();

        $pdf = Pdf::loadView('pdf.data', compact('data'))->setPaper('a4')
            ->setOption([
                'tempDir' => public_path(),
                'chroot' => public_path(),
            ]);
        return $pdf->download('data.pdf');
    }
}
