<!DOCTYPE html>
<html>

<head>
    <title>Surat SKCK</title>
    <style>
        body {
            font-family: sans-serif;
        }
    </style>
</head>

<body>
    <h2>Surat Pengantar SKCK</h2>
    <p>Nama: {{ $nama_lengkap }}</p>
    <p>Tempat/Tanggal Lahir: {{ $tempat_lahir }}, {{ \Carbon\Carbon::parse($tanggal_lahir)->translatedFormat('d F Y') }}
    </p>
    <p>Agama: {{ $agama }}</p>
    <p>NIK: {{ $nik }}</p>
    <p>Status Perkawinan: {{ $status_perkawinan }}</p>
    <p>Pekerjaan: {{ $pekerjaan }}</p>
    <p>Pendidikan: {{ $pendidikan }}</p>
    <p>Alamat: {{ $alamat_lengkap }}</p>
</body>

</html>
