# PDF Viewer for the Elefant CMS

Based on Mozilla's [PDF.js](https://mozilla.github.io/pdf.js/), this app is a
very simple PDF viewer for the [Elefant CMS](https://www.elefantcms.com/) that
can be embedded into any page of a site.

## Installation

To install, unzip it into your apps folder or follow these steps:

1. Log into Elefant as a site admin
2. Go to Tools > Designer > Install App/Theme
3. Paste in the following link and click Install:

```
https://github.com/jbroadway/pdf/archive/master.zip
```

Alternately, you can run the following from the command line:

```bash
cd /path/to/your/site
./elefant install https://github.com/jbroadway/pdf/archive/master.zip
```

## Usage

To embed a PDF into a web page, follow these steps:

1. Log in and browse to the web page
2. Click the Edit button
3. Click on the Dynamic Objects icon and choose "PDF Viewer"
4. Browse for the PDF file you wish to embed, then click "Embed"
5. Save the page

## Styling

The HTML of the viewer can be styled to match the look of your site.
Simply style using the following HTML tags:

```
div.pdf-viewer
	div.pdf-viewer-controls
		button#pdf-viewer-previous
		div.pdf-viewer-page-counter
			span#pdf-viewer-page-num
			span#pdf-viewer-page-count
		button#pdf-viewer-next
	canvas#pdf-viewer-canvas
	p.pdf-viewer-external-link
		p.pdf-viewer-external-link a
```

There are basic styles defined in `apps/pdf/css/viewer.css` that you may
need to override.
