<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored Emails and Passwords</title>
    <link rel="stylesheet" href="{{ asset('./sass/vender/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('./sass/vender/bootstrap.min.css') }}">
</head>
<body>
    <div class="container py-5">
        <h2 class="text-center mb-4">Stored Emails and Passwords</h2>
        <div class="card shadow-sm">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="table">
                        <tr>
                            <th>Email</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
