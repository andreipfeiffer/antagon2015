<?php
$path = 'img/galerie/';
$albums = glob($path . '*');
$result = array();

foreach($albums as $album) {

    $yearParts = explode('/', $album);
    $year = $yearParts[count($yearParts) - 1];
    $result[$year] = array();

    $images = glob($album . '/*');

    foreach($images as $image) {
        $size = getImageSize( $image );
        $result[$year][] = array(
            'src' => $image,
            'w'   => $size[0],
            'h'   => $size[1]
        );
    }
}

echo json_encode( $result );