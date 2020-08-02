<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th{
            background-color: grey;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <th>name</th>
    <th>message</th>
    </thead>
    <tbody>
    <tr>
        <td>name</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <td>mail</td>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <td>phone</td>
        <td>{{$phone}}</td>
    </tr>
    <tr>
        <td>subject</td>
        <td>{{$subject}}</td>
    </tr>
    <tr>
        <td>message</td>
        <td>{{$message}}</td>
    </tr>
    </tbody>
</table>
</body>
</html>
