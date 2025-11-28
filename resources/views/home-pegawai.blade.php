<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <h1>Profil Pegawai</h1>

    <p><strong>Nama:</strong> {{ $pegawai['nama'] }}</p>
    <p><strong>Tanggal Lahir:</strong> {{ $pegawai['tanggal_lahir'] }}</p>
    <p><strong>Umur:</strong> {{ $pegawai['umur'] }} tahun</p>

    <p><strong>Hobi:</strong></p>
    <ul>
        @foreach ($pegawai['hobi'] as $hobi)
            <li>{{ $hobi }}</li>
        @endforeach
    </ul>

    <p><strong>Tanggal Masuk:</strong> {{ $pegawai['tanggal_masuk'] }}</p>
    <p><strong>Sejak Berapa Hari:</strong> {{ $pegawai['sejak_berapa_hari'] }} hari</p>
    <p><strong>Semester:</strong> {{ $pegawai['semester'] }}</p>
    <p><strong>Status:</strong> {{ $pegawai['status'] }}</p>
    <p><strong>pesan:</strong> {{ $pegawai['pesan'] }}</p>
    <p><strong>cita-cita:</strong> {{ $pegawai['cita-cita'] }}</p>
</body>
</html>
