<?php
if (isset($_POST['message'])) {
  if (!empty($_POST['namestr']) || !empty($_POST['emailstr']) || !empty($_POST['pesan'])) {
    $namestr = $_POST['namestr'];
    $emailstr = $_POST['emailstr'];
    $messagestr = $_POST['pesan'];

    $to = "sofyanzuhad2@gmail.com";
    $subject = "Message From " . $emailstr;
    $message = "Name : " . $namestr . "\n" . "Email : " . $emailstr . "\n" . "Message :" . "\n" . $messagestr . "\n" . "From : bit.ly/contact-syofyan";
    $headers = "From: " . $emailstr . "\r\n";

    if (mail($to, $subject, $message)) {
      echo "" ?>
      <div class="alert alert-success fixed-top text-center" role="alert">EMAIL SENDED ! Thank You !
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> <?php
    } else {
      echo "" ?>
      <div class="alert alert-danger  text-center" role="alert">FAILED ! (correct your email !)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div> <?php
      }  

  } else {
      echo "" ?>
    <div class="alert alert-danger  text-center" role="alert">FAILED ! (every element must be writed !)
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> <?php
    }
}
    
        

if (isset($_POST['message2'])) {

  if (!empty($_POST['namestr2']) || !empty($_POST['emailstr2']) || !empty($_POST['pesanstr2'])) {
  $namewa = $_POST['namestr2'];
  $emailwa = $_POST['emailstr2'];
  $telp = $_POST['telp'];
  $pesanwa = $_POST['pesan2'];

  header('location: https://api.whatsapp.com/send?phone=6281326743694&text=Assalamualaikum%0ANama: '.$namewa.'%0AEmail: '.$emailwa.'%0APhone: '.$telp.'%0APesan:'.$pesanwa);

  } else {
      echo "" ?>
    <div class="alert alert-danger  text-center" role="alert">FAILED ! (every element must be writed !)
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div> <?php
      }
}

?>

<html>

<head>

  <!-- Titel Browser -->
  <title>Syofyan Contact</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/bootstrap-grid.css">
  <link rel="stylesheet" href="css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.css">
  <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

  <!-- Manual CSS -->
  <style>
    .login {
      position: sticky;
      margin-top: 3%;
      margin-bottom: 50px;
    }

    .header {
      margin-bottom: 50px;
    }

    body {
      background: url("img/connect.jpg");
      background-repeat: no-repeat;
      background-size: cover;
      background-position-x: 35%;
    }

    .card .card-body {
      position: relative;
    }

    .card::before {
      content: '';
      display: block;
      width: 100%;
      height: 100%;
      background: rgba(0, 0, 0, 1);
      position: absolute;
      border-radius: 2%;
      opacity: 0.6;
    }

    textarea {
      min-height: 150px;
    }

    small {
      -webkit-text-fill-color: royalblue;
    }
  </style>

</head>

<body>

  <section class="login " id="main-page">
    <!-- Container -->
    <div class="container text-center text-light">
      <h1 class="header ">Selamat Datang !</h1>
      <!-- ROW -->
      <div class="row justify-content-center ">
        <div class="col-md-10 ">
          <!-- Card -->
          <div class="card text-center bg-transparent">
            <div class="card-header">
              <div class="card-body text-left ">
                <!-- Navbar -->
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                  <li class="nav-item">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#gmail" role="tab" aria-controls="pills-home" aria-selected="true">Gmail</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#whatsapp" role="tab" aria-controls="pills-profile" aria-selected="false">WhatsApp</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link " id="pills-contact-tab" data-toggle="pill" href="#contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                  </li>
                </ul>

                <div class="tab-content" id="pills-tabContent">

                  <!-- GMAIL -->
                  <div class="tab-pane fade show active" id="gmail" role="tabpanel" aria-labelledby="pills-home-tab" required>
                    <form method="post" action="index.php">
                      <div class="form-group ">
                        <label for="name">Nama</label>
                        <input type="name" class="form-control" name="namestr" id="name" placeholder="Enter your name">
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="emailstr" id="email" aria-describedby="emailHelp" placeholder="Enter your email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group ">
                        <label for="pesan">Pesan</label>
                        <textarea name="pesan" id="pesan" class="form-control" placeholder="Write Massage" required></textarea>
                      </div>
                      <button type="submit" name="message" class="btn btn-primary">SEND</button>
                    </form>
                  </div>
                  <!-- Akhir Gmail -->

                  <!-- Whatsapp -->
                  <div class="tab-pane fade" id="whatsapp" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <form method="post" action="index.php">
                      <div class="form-group ">
                        <label for="name2">Nama</label>
                        <input type="name" class="form-control" name="namestr2" id="name2" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group">
                        <label for="email2">Email</label>
                        <input type="email" class="form-control" name="emailstr2" id="email2" aria-describedby="emailHelp" placeholder="Enter your email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group ">
                        <label for="telp">No. Telp</label>
                        <input type="name" class="form-control" name="telp" id="telp" placeholder="+62...">
                        <small id="telpHelp" class="form-text text-muted">Number phone needed for message end-to-end.</small>
                      </div>
                      <div class="form-group ">
                        <label for="pesan2">Pesan</label>
                        <textarea name="pesan2" id="pesan2" class="form-control" placeholder="Write Massage" required></textarea>
                      </div>
                      <button type="submit" name="message2" class="btn btn-primary">SEND</button>
                    </form>
                  </div>
                  <!-- Akhir Whatsapp -->

                  <!-- CONTACT -->
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <form method="post" action="index.php">
                      <div class="form-group ">
                        <label for="name3">Nama</label>
                        <input type="name" class="form-control" name="namestr3" id="name3" placeholder="Enter your name" required>
                      </div>
                      <div class="form-group">
                        <label for="email3">Email</label>
                        <input type="email" class="form-control" name="emailstr3" id="email3" aria-describedby="emailHelp" placeholder="Enter your email" required>
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                      </div>
                      <div class="form-group ">
                        <label for="pesan3">Pesan</label>
                        <textarea name="pesan3" id="pesan3" class="form-control" placeholder="Write Massage" required></textarea>
                      </div>
                      <button type="submit" name="message3" class="btn btn-primary">SEND</button>
                    </form>
                  </div>
                  <!-- Akhir CONTACT -->
                </div>
                <!-- Akhir Navbar -->
              </div>
            </div>
          </div>
          <!-- Akhir Card -->
        </div>
      </div>
      <!-- Akhir ROW -->
    </div>
    <!-- Akhir Container -->
  </section>


</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>
