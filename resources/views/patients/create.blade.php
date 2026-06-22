<h2>Add Patient</h2>

<form action="{{ route('patients.store') }}" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name"><br><br>

    <input type="number" name="age" placeholder="Age"><br><br>

    <select name="gender">
        <option>Male</option>
        <option>Female</option>
        <option>Other</option>
    </select><br><br>

    <input type="text" name="phone" placeholder="Phone"><br><br>

    <input type="email" name="email" placeholder="Email"><br><br>

    <textarea name="address" placeholder="Address"></textarea><br><br>

    <textarea name="medical_history"
        placeholder="Medical History"></textarea><br><br>

    <button type="submit">Save</button>
</form>