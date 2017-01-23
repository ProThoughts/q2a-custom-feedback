<?php

if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

function qa_page_routing()
{
    $routing = qa_page_routing_base();
    if (qa_opt('site_theme') === CFB_TARGET_THEME_NAME) {
        $routing['feedback'] = CFB_RELATIVE_PATH . 'feedback.php';
    }
    return $routing;
}
