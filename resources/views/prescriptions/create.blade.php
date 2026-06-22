<h2>Create Prescription</h2>

<form action="{{ route('prescriptions.store') }}" method="POST">
@csrf

<label>Patient</label>
<select name="patient_id">
    @foreach($patients as $patient)
        <option value="{{ $patient->id }}">{{ $patient->name }}</option>
    @endforeach
</select><br><br>

<label>Doctor</label>
<select name="doctor_id">
    @foreach($doctors as $doctor)
        <option value="{{ $doctor->id }}">{{ $doctor->name }}</option>
    @endforeach
</select><br><br>

<input type="date" name="date"><br><br>

<textarea name="symptoms" placeholder="Symptoms"></textarea><br><br>

<textarea name="diagnosis" placeholder="Diagnosis"></textarea><br><br>

<textarea name="medicines" placeholder="Medicines"></textarea><br><br>

<textarea name="advice" placeholder="Advice"></textarea><br><br>

<button type="submit">Save</button>
</form>