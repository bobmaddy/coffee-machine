<!doctype html>
<html lang="ru">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Кофе-машина</title>
  </head>
  <body>
    <div class="container">
      <div class="row coffee-machine">
        <div class="col-5">
          <div class="row coffee-list flex-column justify-content-around p-3">
            <div class="coffee-item" cost="60">
              <img src="img/americano.png" alt="Американо">
              <span>Американо - 60 руб.</span>
            </div>
            <div class="coffee-item" cost="120">
              <img src="img/cappuccino.png" alt="Капучино">
              <span>Капучино - 120 руб.</span>
            </div>
            <div class="coffee-item" cost="83">
              <img src="img/espresso.png" alt="Эспрессо">
              <span>Эспрессо - 83 руб.</span>
            </div>
            <div class="coffee-item" cost="94">
              <img src="img/latte.jpg" alt="Латте">
              <span>Латте - 94 руб.</span>
            </div>
          </div>
        </div>
        <div class="col-7">
          <div class="row coffee-operation p-3">
            <div class="col-6">
              <div class="display p-2">
                <p class="display-text mt-2">Выберите кофе</p>
                <div class="progress d-none">
                  <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 0%"></div>
                </div>
              </div>
              <div class="coffee-cup mt-2 p-3">
                <img class="d-none" src="img/americano.png" alt="">
              </div>
            </div>
            <div class="col-6">
              <div class="coffee-balance">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Баланс" aria-label="Имя получателя" aria-describedby="basic-addon2">
                  <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">руб.</span>
                  </div>
                </div>
              </div>
              <div class="coffee-atm mt-2">
                <img src="img/bill_acc.png" alt="">
              </div>
              <button class="btn btn-block btn-primary mt-2 change-btn">Получить сдачу</button>
              <div class="coffee-change mt-2"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row wallet mt-2">
        <img src="img/50rub.jpg" alt="" value="50">
        <img src="img/100rub.jpg" alt="" value="100">
        <img src="img/500rub.jpg" alt="" value="500">
      </div>
    </div>

    <!-- Optional JavaScript -->
    <script src="script.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>