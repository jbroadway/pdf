<?php

/**
 * Load the PDF viewer via the URL format:
 *
 *     /pdf/path/to/file.pdf
 */

$path = join ('/', $this->params);

if (! FileManager::verify_file ($path)) {
	echo 'Invalid file';
	return;
}

$page->title = basename ($path, '.pdf');

echo $this->run ('pdf/viewer', array ('file' => '/files/' . $path));
