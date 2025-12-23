<!DOCTYPE html>
<html>
<head>
    <title>Pesan Baru</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333;">
    <h2>Pesan Baru dari Website Portofolio</h2>
    <p><strong>Nama:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <hr>
    <p><strong>Pesan:</strong></p>
    <p style="white-space: pre-line;">{{ $data['message'] }}</p>
</body>
</html>
