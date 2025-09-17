<!DOCTYPE html>
<html>
<head>
    <title>Danh sách nhân viên</title>
    <style>
        table {
            border-collapse: collapse;
            width: 70%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 8px;
            text-align: center;
        }
        th {
            background: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Danh sách nhân viên</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên</th>
                <th>Email</th>
                <th>Chức vụ</th>
            </tr>
        </thead>
        <tbody>
            @foreach($table as $)
            <tr>
                <td>{{ $emp->id }}</td>
                <td>{{ $emp->name }}</td>
                <td>{{ $emp->email }}</td>
                <td>{{ $emp->position }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
