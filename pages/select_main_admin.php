<?php
  $usr = new User;
  $user = $usr->hitungUser();
  $datauser = $usr->tampilUser();

  $dktr = new Dokter;
  $dokter = $dktr->hitungDokter();
  $lihatDokter = $dktr->tampilDokterBySpesial();

  $spesial = new Spesialisasi;
  $spesialis = $spesial->tampilSpesialisasi();


 ?>
<br />

  
</div>

<!-- infopanel admin -->
		<div class="col-lg admin_panel ml-3 mr-3">
			<img src="img/ic_doc.png" class="float-left">
			<h1><?= $dokter ?></h1>
			<p>Psikiater</p>
		</div>
		<div class="col-lg admin_panel ml-3 mr-3">
			<img src="img/ic_user.png" class="float-left">
			<h1><?= $user ?></h1>
			<p>User</p>
		</div>
	</div>
</div>
<!-- akhir infopanel admin -->
