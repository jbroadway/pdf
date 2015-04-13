<?php

/**
 * Load the PDF viewer via the Dynamic Objects menu,
 * or dynamically via:
 *
 *     echo $this->run ('pdf/viewer', array ('file' => '/files/path/to/file.pdf'));
 */

if (! isset ($data['file'])) {
	return;
}

$page->add_style ('/apps/pdf/css/viewer.css');
$page->add_script ('/apps/pdf/js/build/pdf.js');

echo $tpl->render (
	'pdf/viewer',
	array (
		'file' => $data['file']
	)
);
