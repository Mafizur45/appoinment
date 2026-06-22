<?php

namespace App\Http\Controllers;

use App\Models\Prescription;
use App\Models\Patient;
use App\Models\Doctor;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $prescriptions = Prescription::with(['patient','doctor'])->latest()->get();
        return view('prescriptions.index', compact('prescriptions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         $patients = Patient::all();
        $doctors = Doctor::all();

        return view('prescriptions.create', compact('patients','doctors'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'date' => 'required',
            'symptoms' => 'required',
            'diagnosis' => 'required',
            'medicines' => 'required'
        ]);

        Prescription::create($request->all());

        return redirect()->route('prescriptions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Prescription $prescription)
    {
         return view('prescriptions.show', compact('prescription'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Prescription $prescription)
    {
        $patients = Patient::all();
        $doctors = Doctor::all();

        return view('prescriptions.edit', compact('prescription','patients','doctors'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Prescription $prescription)
    {
        $prescription->update($request->all());

        return redirect()->route('prescriptions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Prescription $prescription)
    {
         $prescription->delete();

        return redirect()->route('prescriptions.index');
    }

    public function downloadPDF($id)
{
    $prescription = Prescription::with(['patient','doctor'])->findOrFail($id);

    $pdf = Pdf::loadView('prescriptions.pdf', compact('prescription'));

    return $pdf->download('prescription_'.$prescription->id.'.pdf');
}
}
