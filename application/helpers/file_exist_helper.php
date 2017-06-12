<?php

function file_exist($page)
{
	if (!file_exists(PAGE_PATH . $page . '.tpl')) {
		show_404();
	}
}
