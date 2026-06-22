<h2>Appointments</h2>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Patient</th>
        <th>Doctor</th>
        <th>Date</th>
        <th>Phone</th>
    </tr>

    @foreach($appointments as $appointment)
    <tr>
        <td>{{ $appointment->id }}</td>
        <td>{{ $appointment->patient_name }}</td>
        <td>{{ $appointment->doctor_name }}</td>
        <td>{{ $appointment->appointment_date }}</td>
        <td>{{ $appointment->phone }}</td>
    </tr>
    @endforeach
</table>