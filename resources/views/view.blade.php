<html>
<head>
    <title>View</title>
</head>
<body>
<table>
    <tr>
        <th></th>
        <th></th>
    </tr>
    <tr>
        <td>{{ $data->agreement }}</td>
        <td><iframe height="600px" width="500" src="{{ asset('uploads/'.$data->agreement ) }} "></iframe></td>
    </tr>
</table>
</body>
</html>
