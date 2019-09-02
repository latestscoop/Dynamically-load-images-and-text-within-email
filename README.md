# Dynamically-load-images-and-text-within-email

After an email has been sent, dynamically load images and text.

Images:

The image source loads from a PHP file that recognises parameters to determine which image to return.

The "img" url parameter within dynamic_img_load.php, is picked up by dynamic_img.php and the appropriate image is sent to header.

Text:

Using external css (not supported by all email clients) show ::before{ content: "x";}

dynamic_content.php?content=a | dynamic_content.php?content=b | dynamic_content.php?content=no-external-css
