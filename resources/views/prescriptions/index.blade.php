<h2>Prescription List</h2>

<a href="{{ route('prescriptions.create') }}">Add Prescription</a>

<table border="1" cellpadding="10">
<tr>
    <th>ID</th>
    <th>Patient</th>
    <th>Doctor</th>
    <th>Date</th>
    <th>Action</th>
</tr>

@foreach($prescriptions as $p)
<tr>
    <td>{{ $p->id }}</td>
    <td>{{ $p->patient->name }}</td>
    <td>{{ $p->doctor->name }}</td>
    <td>{{ $p->date }}</td>

    <td>
        <a href="{{ route('prescriptions.show',$p->id) }}">View</a>
        <a href="{{ route('prescriptions.edit',$p->id) }}">Edit</a>

        <form action="{{ route('prescriptions.destroy',$p->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button>Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>