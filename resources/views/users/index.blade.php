<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách user & profile</title>
    <style>
        body{font-family:Arial;margin:30px}
        table{border-collapse:collapse;width:90%}
        th,td{border:1px solid #ccc;padding:8px}
        th{background:#f5f5f5}
    </style>
</head>
<body>
<h2>Danh sách user và thông tin profile</h2>
<table>
  <tr>
    <th>STT</th>
    <th>Name</th>
    <th>Email</th>
    <th>Địa chỉ</th>
    <th>Điện thoại</th>
  </tr>

  @foreach($users as $u)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $u->name }}</td>
    <td>{{ $u->email }}</td>
    <td>{{ $u->profile->address ?? '-' }}</td>
    <td>{{ $u->profile->phone ?? '-' }}</td>
  </tr>
  @endforeach
</table>
</body>
</html>
