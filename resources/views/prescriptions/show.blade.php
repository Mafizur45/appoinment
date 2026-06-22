<h2>Prescription Details</h2>

<p>Patient: {{ $prescription->patient->name }}</p>
<p>Doctor: {{ $prescription->doctor->name }}</p>
<p>Date: {{ $prescription->date }}</p>
<p>Symptoms: {{ $prescription->symptoms }}</p>
<p>Diagnosis: {{ $prescription->diagnosis }}</p>
<p>Medicines: {{ $prescription->medicines }}</p>
<p>Advice: {{ $prescription->advice }}</p>