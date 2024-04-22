<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Change Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid">
    <div class="col-md-6 offset-3 pt-4">
        <h3 class="text-center">Восстановить пароль</h3>
        <form class="form" action="{{ route('changePassword') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="new_password" class="form-label">Новый пароль</label>
                <input required type="password" class="form-control" id="new_password" name="new_password">
            </div>
            <div class="mb-3">
                <label for="new_password_confirmation" class="form-label">Повторите новый пароль</label>
                <input required type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
            </div>
            <div class="mb-3">
                <label for="code" class="form-label">Введите код для смены пароля</label>
                <input required type="text" class="form-control" id="code" name="code">
            </div>
            <button type="submit" class="btn btn-primary text-center">Отправить</button>
        </form>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>
