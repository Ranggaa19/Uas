<!-- Info panel -->
  <div class="row">
    <div class="col-12">
      <div class="row d-flex justify-content-center ashiapp">
        <?php if(isset($_SESSION['role'])): ?>
        <?php if ($_SESSION['role']=='user'): ?>
        <a href="index.php?p=select_chat" class="page-scroll">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon22.png" alt="ChatDokter">
            <h4>CHAT PSIKIATER</h4>
            <p>Tanyakan kepada psikiater ahli.</p>
          </div>
        </a>
        <?php endif ; ?>
        <?php else: ?>
        <a href="#" data-signin="login" class="page-scroll">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon22.png" alt="ChatDokter">
            <h4>CHAT PSIKIATER</h4>
            <p>Tanyakan kepada psikiater ahli.</p>
          </div>
        </a>
      <?php endif ;?>

      <?php if(isset($_SESSION['role'])): ?>
      <?php if ($_SESSION['role']=='user'): ?>
        <a href="pages/select_chat_blank.php" target="_blank">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon11.png" alt="High Res">
            <h4>Pesan</h4>
            <p>Lihat semua pesan anda disini.</p>
          </div>
        </a>
      <?php endif ;?>
      <?php else: ?>
        <a href="#">
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/icon11.png" alt="High Res">
            <h4>Pesan</h4>
            <p>Lihat semua pesan anda disini.</p>
          </div>
        </a>

      <?php endif; ?>
      
        <a href="#ourdoctor"  >
          <div class="col-lg info-panel mr-3 mb-3">
            <img src="img/ic_doc.png" alt="Security">
            <h4>Our Psikiater</h4>
            <p>Psikiater berpengalaman.</p>
          </div>
        </a>

      </div>
    </div>
  </div>
 