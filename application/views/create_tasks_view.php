<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/">Главная</a></li>
    <li class="breadcrumb-item"><a href="/tasks/">Задачи</a></li>
    <li class="breadcrumb-item active" aria-current="page">Создание задачи</li>
  </ol>
</nav>

<form method="POST" action="/tasks/store/">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" href="#">Основные данные</a>
              </li>
            </ul>
            <br>
            <div class="tab-content">
             <div id="home" class="container tab-pane active"><br>
                <div class="form-group">
                  <label for="name">Имя</label>
                  <input name='name' value=""
                     id='name'
                     type="text"
                     class="form-control"
                     minlength="3"
                     required>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input name='email' value=""
                   id='email'
                   type="email"
                   class="form-control"
                   minlength="3">
                </div>

                <div class="form-group">
                  <label for="description">Описание</label>
                  <textarea name='description'
                   id='description'
                   class="form-control"
                   rows="3"></textarea>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body">
            <button type="submit" class="btn btn-block btn-primary">Сохранить</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>