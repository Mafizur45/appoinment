<form action="{{ route('patients.update',$patient->id) }}"
      method="POST">

    @csrf
    @method('PUT')

    <input type="text"
           name="name"
           value="{{ $patient->name }}">

    <input type="number"
           name="age"
           value="{{ $patient->age }}">

    <button type="submit">
        Update
    </button>
</form>