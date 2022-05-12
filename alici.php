<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link
      rel="stylesheet"
      href="css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="css/stilim.css" />
  </head>
  <body>
    <div class="bosluk"></div>
    <div class="container-fluid">
      <div class="ustbaslik">
        <div class="d-grid d-md-flex">
          <div class="ustisim">
            <h1>Mehmet Çetinkaya</h1>
          </div>
          <div
            class="d-grid gap-2 d-md-flex justify-content-md-end"
            style="width: 70%"
          >
            <button type="button" class="btn btn-light">
              <a
                href="hakkimda.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>Hakkımda</h3></a
              >
            </button>
            <button type="button" class="btn btn-light">
              <a
                href="ozgecmis.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>Özgeçmiş</h3></a
              >
            </button>
            <button type="button" class="btn btn-light">
              <a
                href="sehrim.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>Şehrim</h3></a
              >
            </button>
            <button type="button" class="btn btn-light">
              <a
                href="mirasimiz.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>Mirasımız</h3></a
              >
            </button>
            <button type="button" class="btn btn-light">
              <a
                href="ilgialanlarim.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>İlgi Alanlarım</h3></a
              >
            </button>
            <button type="button" class="btn btn-light">
              <a
                href="login.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>Login</h3></a
              >
            </button>
            <button type="button" class="btn btn-light">
              <a
                href="iletisim.html"
                style="text-decoration-line: none; color: rgb(7, 7, 91)"
                ><h3>İletişim</h3></a
              >
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="bosluk"></div>
    <div class="container-fluid">
      <div class="ortakisim">
        <div class="bosluk"></div>
        <div class="ortada">
          <div class="login" style="padding-bottom:210px; padding-top:210px; text-align:center">
          <label>
          <?php
                if ($_POST['mail'] == 'g211210400@sakarya.edu.tr' && $_POST['sifre'] == 'g211210400') {
                    echo "<p>Kullanıcı adınız ve şifreniz doğru. Hoşgeldiniz 'g211210400'</p>";
                    
                } else {
                    echo "<p>Giriş bilgileriniz yanlış. Login ekranına yönlendiriliyorsunuz.</p>";
                    header("refresh:3;url=login.html");
                }
              ?>  
          </label>
          </div>
        </div>
        <div class="bosluk"></div>
      </div>
    </div>
    <div class="bosluk"></div>
    <div class="container-fluid">
      <div class="altkisim">
        <div class="d-grid d-md-flex">
          <div class="altkisim1 d-grid d-md-flex justify-content-md-start">
            Adres: Tepekum Mahahallesi 1167 numaralı sokak Adapazarı/Sakarya
          </div>
          <div class="altkisim2 d-grid d-md-flex justify-content-md-center">
            Mail: mehmet.cetinkaya.sau@gmail.com
          </div>
          <div class="altkisim3 d-grid d-md-flex justify-content-md-center">
            Telefon: 0531 387 21 49
          </div>
          <div class="altkisim4 d-grid d-md-flex justify-content-md-end">
            <a
              href="https://www.linkedin.com/in/mehmet-%C3%A7etinkaya-177683231"
            >
              <img src="resim/linkd.png" width="100%" height="100%" />
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="bosluk"></div>

    <script src="bootstrap-5.1.3/bootstrap-5.1.3/dist/js/bootstrap.min.js"></script>
  </body>
</html>
