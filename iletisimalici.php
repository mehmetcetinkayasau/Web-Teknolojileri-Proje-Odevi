<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>İletişim</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
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
        <div class="ortada" style="width: 85%">
          <div class="loginiletisim">
          <div class="d-md-flex iletisimalicielemnt">
                <div style="width: 10%"><label>İsim</label></div>
                <div style="width: 5%"><label>:</label></div>
                <div style="width: 85%">
                  <label>
                    <?php
                        echo $_POST['isim'];
                    ?>  
                  </label>
                </div>
              </div>
              <div style="height: 30px"></div>
              <div class="d-md-flex iletisimalicielemnt">
              <div style="width: 10%"><label>Soyisim</label></div>
                <div style="width: 5%"><label>:</label></div>
                <div style="width: 85%">
                  <label>
                    <?php
                        echo $_POST['soyisim'];
                    ?>  
                  </label>
                </div>
              </div>
              <div style="height: 30px"></div>
              <div class="d-md-flex iletisimalicielemnt">
              <div style="width: 10%"><label>Mail</label></div>
                <div style="width: 5%"><label>:</label></div>
                <div style="width: 85%">
                  <label>
                    <?php
                        echo $_POST['imail'];
                    ?>  
                  </label>
                </div>
              </div>
              <div style="height: 30px"></div>
              <div class="d-md-flex iletisimalicielemnt">
              <div style="width: 10%"><label>Cinsiyet</label></div>
                <div style="width: 5%"><label>:</label></div>
                <div style="width: 85%">
                  <label>
                    <?php
                        if(!empty($_POST['cinsiyet']))
                            echo $_POST['cinsiyet'];
                        else
                            echo "Belirtilmemiş";
                    ?>  
                  </label>
                </div>
              </div>
              <div style="height: 30px"></div>
              <div class="d-md-flex iletisimalicielemnt">
              <div style="width: 10%"><label>Konu</label></div>
                <div style="width: 5%"><label>:</label></div>
                <div style="width: 85%">
                  <label>
                    <?php
                        echo $_POST['konular'];
                    ?>  
                  </label>
                </div>
              </div>
              <div style="height: 30px"></div>
              <div class="d-md-flex iletisimalicielemnt">
              <div style="width: 10%"><label >Mesaj</label></div>
                <div style="width: 5%"><label>:</label></div>
                <div style="width: 85%">
                  <label>
                    <?php
                        echo $_POST['mesaj'];
                    ?>  
                  </label>
                </div>
              </div>
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
            Adres: Tepekum Mahahallesi 1127 numaralı sokak Adapazarı/Sakarya
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

    <script src="js/bootstrap.min.js"></script>
    <script src="js/iletisim.js"></script>
  </body>
</html>
