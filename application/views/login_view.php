<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page">Авторизация</li>
  </ol>
</nav>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form action="/login/index" method="post">
				<div class="form-group">
					<label for="login">Логин</label>
					<input type="login" class="form-control" id="login" name="login">
				</div>
				<div class="form-group">
					<label for="InputPassword">Пароль</label>
					<input type="password" name="password" class="form-control" id="InputPassword">
				</div>
				<button type="submit" class="btn btn-success">Авторизоваться</button>
			</form>
		</div>
	</div>
</div>

