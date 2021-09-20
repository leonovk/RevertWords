<?php
		require_once 'Revert.php';

		$str = new Revert('Hello I am Nickolay');
		echo $str->revert_characters();
