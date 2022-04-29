<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #container {
            width: 90%;
            margin: 0 auto;
        }

        .p-2 {
            padding: 5px;
        }

        .py {
            padding: 5px 0;
        }

    </style>
</head>

<body>
    <div id="container">
        <p>Dear <b>{{ $user->name }}</b>,</p>
        <p>Thanks for Your registration. We will inform you to take the vaccine as soon as possible till then be
            patient. Your given infomation is
        </p>
        <table border="1">
            <tr>
                <th class="p-2">Name</th>
                <td class="p-2">{{ $user->name }}</td>
            </tr>
            <tr>
                <th class="p-2">Email</th>
                <td class="p-2">{{ $user->email }}</td>
            </tr>
            <tr>
                <th class="p-2">Phone</th>
                <td class="p-2">{{ $user->phone }}</td>
            </tr>
            <tr>
                <th class="p-2">NID</th>
                <td class="p-2">{{ $user->nid }}</td>
            </tr>
            <tr>
                <th class="p-2">Date Of Birth</th>
                <td class="p-2">{{ $user->date_of_birth }}</td>
            </tr>
            <tr>
                <th class="p-2">Division</th>
                <td class="p-2">{{ $user->hospital->district->division->name }}</td>
            </tr>
            <tr>
                <th class="p-2">District</th>
                <td class="p-2">{{ $user->hospital->district->name }}</td>
            </tr>
            <tr>
                <th class="p-2">Hospital</th>
                <td class="p-2">{{ $user->hospital->name }}</td>
            </tr>
            <tr>
                <th class="p-2">Vaccine</th>
                <td class="p-2">{{ $user->vaccine->name }}</td>
            </tr>
            <tr>
                <th class="p-2">Registraion Date</th>
                <td class="p-2">{{ $user->created_at->format('Y-M-d') }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
