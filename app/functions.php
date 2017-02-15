<?php


//escape from possibility of sql injection
function escape($text) {
	return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
};



