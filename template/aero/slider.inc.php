<div class="container">
    <div id="content-slider">
    	<div id="slider">
		<div class="titleNews"><?php echo __('Selected Items'); ?></div>
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
		<?php
		//gambar 1
		if ($sysconf['promoted']) {
			$query_string = "SELECT biblio_id, image, title FROM biblio WHERE promoted = 1 ORDER BY biblio.input_date DESC LIMIT 0, 1";
		} else {
			$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 0, 1";
		}
		$query = $dbs->query($query_string);
		$data = $query->fetch_assoc();
		echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="./images/docs/'.$data['image'].'"/></a>';
		echo '<div class="titlebook">'.substr($data['title'],0,50).'...</div>'
		?>
            </li>

            <li id="second" class="secondanimation">
		<?php
		//gambar 2
		if ($sysconf['promoted']) {
			$query_string = "SELECT biblio_id, image, title FROM biblio WHERE promoted = 1 ORDER BY biblio.input_date DESC LIMIT 1, 1";
		} else {
			$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 1, 1";
		}
		$query = $dbs->query($query_string);
		$data = $query->fetch_assoc();
		echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="./images/docs/'.$data['image'].'"/></a>';
		echo '<div class="titlebook">'.substr($data['title'],0,50).'...</div>'
		?>
            </li>

            <li id="third" class="thirdanimation">
		<?php
		//gambar 3
		if ($sysconf['promoted']) {
			$query_string = "SELECT biblio_id, image, title FROM biblio WHERE promoted = 1 ORDER BY biblio.input_date DESC LIMIT 2, 1";
		} else {
			$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 2, 1";
		}
		$query = $dbs->query($query_string);
		$data = $query->fetch_assoc();
		echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="./images/docs/'.$data['image'].'"/></a>';
		echo '<div class="titlebook">'.substr($data['title'],0,50).'...</div>'
		?>
            </li>

            <li id="fourth" class="fourthanimation">
		<?php
		//gambar 4
		if ($sysconf['promoted']) {
			$query_string = "SELECT biblio_id, image, title FROM biblio WHERE promoted = 1 ORDER BY biblio.input_date DESC LIMIT 3, 1";
		} else {
			$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 3, 1";
		}
		$query = $dbs->query($query_string);
		$data = $query->fetch_assoc();
		echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="./images/docs/'.$data['image'].'"/></a>';
		echo '<div class="titlebook">'.substr($data['title'],0,50).'...</div>'
		?>
            </li>

            <li id="fifth" class="fifthanimation">
		<?php
		//gambar 5
		if ($sysconf['promoted']) {
			$query_string = "SELECT biblio_id, image, title FROM biblio WHERE promoted = 1 ORDER BY biblio.input_date DESC LIMIT 4, 1";
		} else {
			$query_string = "SELECT biblio_id, image, title FROM biblio ORDER BY biblio.input_date DESC LIMIT 4, 1";
		}
		$query = $dbs->query($query_string);
		$data = $query->fetch_assoc();
		echo '<a href="index.php?p=show_detail&id='.$data['biblio_id'].'"><img class="visible" alt="'.$data['title'].'" src="./images/docs/'.$data['image'].'"/></a>';
		echo '<div class="titlebook">'.substr($data['title'],0,50).'...</div>'
		?>
            </li>
	    </ul>
            </div>
	    <div id="admbook">
	    <div id="progres">
		<div class="progress-bar"></div>
	    </div>
	    </div>
	    <!-- OTHER LINK -->
	    <div id="otherlink">
		<ul>
		    <a href="index.php?p=visitor" target="_self"><li><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/book.png"><span class="titleLink Link1"><?php echo __('Visitor Counter'); ?></span></li></a>
		    <a href="index.php?p=peta" target="blank"><li><img src="<?php echo $sysconf['template']['dir'].'/'.$sysconf['template']['theme']; ?>/images/globe.png"><span class="titleLink Link2">Maps</span></li></a>
		</ul>
	    </div>
	    <!-- OTHER LINK -->
        </div>
    </div>
</div>
