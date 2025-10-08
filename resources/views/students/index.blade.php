<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Danh sách sinh viên</title>
    <style>
        body{font-family:Arial;margin:30px}
        table{border-collapse:collapse;width:90%}
        th,td{border:1px solid #ccc;padding:8px}
        th{background:#f5f5f5}
    </style>
</head>
<body>
<h2>Danh sách sinh viên và các môn đã đăng ký</h2>
<table>
  <tr>
    <th>STT</th>
    <th>Họ tên</th>
    <th>Email</th>
    <th>Môn học</th>
  </tr>
  @foreach($students as $s)
  <tr>
    <td>{{ $loop->iteration }}</td>
    <td>{{ $s->name }}</td>
    <td>{{ $s->email }}</td>
    <td>
      @foreach($s->courses as $c)
        {{ $c->title }}@if(!$loop->last), @endif
      @endforeach
    </td>
  </tr>
  @endforeach
</table>
</body>
</html>
