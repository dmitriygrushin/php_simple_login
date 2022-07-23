<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <title>HTML 5 Boilerplate</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="login-box">
                    <div class="col-md-6">
                        <h2>Login Here</h2>
                        <form action="validation.php" method="POST">
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                    <div class="col-md-6">

                    <div class="col-md-6">
                        <h2>Register Here</h2>
                        <form action="registration.php" method="POST">
                            <div class="form-group">
                                <label for="user">Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>