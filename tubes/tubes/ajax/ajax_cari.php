<?php 
	require '../php/functions.php';
	$buku = cari($_GET["keyword"]);
 ?>

 <?php foreach ($buku as $bk) : ?>
		 <div class="col s12 m7">
	    
	    <div class="card horizontal small" style="width: 600px; margin: auto; margin-bottom: 30px; margin-top: 20px;">
	      <div class="card-image" style="width: 200px; height: 300px;">
	        <img src="../assets/image/<?= $bk["foto"]; ?>" alt="">
	        
	      </div>
	      <div class="card-stacked">
	        <div class="card-content">
	          <p>I am a very simple card. I am good at containing small bits of information.</p>
	        </div>
	        <div class="card-action">
	          <a href="detail.php?id=<?= $bk['ID'] ?>"><?= $bk["judulbuku"] ?></a>
	          <?php if (empty($buku)) : ?>
			<tr>
				<td colspan="7">
					<h1>Data tidak ditemukan</h1>
				</td>
			</tr>
		<?php endif; ?>
	        </div>
	      </div>
	    </div>
	  </div>
	  <?php endforeach; ?>