<?php
// include composer autoload


require '/var/www/eway.local/vendor/autoload.php';

// import the Intervention Image Manager Class
use Intervention\Image\ImageManager;

// create an image manager instance with favored driver
$manager = new ImageManager(array('driver' => 'imagick'));

// to finally create image instances
$image = $manager->make('public/foo.jpg')->resize(300, 200);