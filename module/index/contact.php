<?php
	
	$dev = 6;
	$id = intval($_g_id);

	if ($id == 0) {
		include($template->getfile('default/index/contact/message.html'));
	}else{
		$info = $db->select("select * from `".dbpre."contact` where id='$id'" );
		include($template->getfile('default/index/contact/show.html'));
	}
	

?>