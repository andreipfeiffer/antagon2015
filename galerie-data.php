<?php
$path = 'img/galerie/';
$albums = glob($path . '*');
$result = [];

foreach($albums as $album) {

    $yearParts = explode('/', $album);
    $year = $yearParts[count($yearParts) - 1];
    $result[$year] = [];

    $images = glob($album . '/*');

    foreach($images as $image) {
        $size = getImageSize( $image );
        $result[$year][] = [
            'src' => $image,
            'w'   => $size[0],
            'h'   => $size[1]
        ];
    }
}

echo json_encode( $result );