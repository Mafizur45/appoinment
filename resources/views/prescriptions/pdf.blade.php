<!DOCTYPE html>
<html>
<head>
    <title>Prescription PDF</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .header {
            text-align: center;
            border-bottom: 2px solid #000;
            padding-bottom: 10px;
        }

        .info {
            margin-top: 20px;
        }

        .section {
            margin-bottom: 15px;
        }

        .label {
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="header">
    <h2>Doctor Prescription</h2>
    <p>Hospital Management System</p>
</div>

<div class="info">

    <div class="section">
        <span class="label">Patient Name:</span>
        {{ $prescription->patient->name }}
    </div>

    <div class="section">
        <span class="label">Doctor Name:</span>
        {{ $prescription->doctor->name }}
    </div>

    <div class="section">
        <span class="label">Date:</span>
        {{ $prescription->date }}
    </div>

    <div class="section">
        <span class="label">Symptoms:</span>
        {{ $prescription->symptoms }}
    </div>

    <div class="section">
        <span class="label">Diagnosis:</span>
        {{ $prescription->diagnosis }}
    </div>

    <div class="section">
        <span class="label">Medicines:</span>
        {{ $prescription->medicines }}
    </div>

    <div class="section">
        <span class="label">Advice:</span>
        {{ $prescription->advice }}
    </div>

</div>

</body>
</html>