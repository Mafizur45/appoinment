<form action="{{ route('appointments.store') }}" method="POST">
    @csrf

    <input type="text"
           name="patient_name"
           placeholder="Patient Name">

    <input type="text"
           name="doctor_name"
           placeholder="Doctor Name">

    <input type="date"
           name="appointment_date">

    <input type="text"
           name="phone"
           placeholder="Phone">

    <button type="submit">
        Save Appointment
    </button>
</form>