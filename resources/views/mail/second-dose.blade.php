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
        <p>Please go to this hospital(<b>{{ $user->hospital->name }}</b>) to take your second dose.Your vaccine name
            is
            <b>{{ $user->vaccine->name }}</b>
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
            <tr>
                <td colspan="6" class="text-center">
                    <h4>Vaccine Informations</h4>
                </td>
            </tr>
            <tr>
                <th class="p-2">First Dose</th>
                <td>
                    {{ $user->vaccine->name }}
                </td>
                <th class="p-2">Date</th>
                <td>{{ $user->first_dose->date }}</td>
                <th class="p-2">Doctor</th>
                <td>{{ $user->first_dose->doctor->name }}</td>
            </tr>
        </table>
    </div>
</body>

</html>
