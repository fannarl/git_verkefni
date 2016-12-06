
<meta charset="utf-8"/>
<?php
include "dbcon.php";
try {
$sql = "SELECT ID, Name, `Email` FROM `users` ORDER BY Date";
$result = $con->query($sql);
} catch (PDOException $ex) {
echo 'Error fetching scores: '.$e->getMassage();
}
while ($row = $result->fetch()) {
	$image[] = array('ID' => $row['ID'],
						'Name' => $row['Name'],
						'Email' => $row['Email']
						);

$Gemail = $row['Email'];
$default = "http://www.somewhere.com/homestar.jpg";
$size = 40;

$grav_url = "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $Gemail ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;


/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boole $img True to return a complete IMG tag False for just the URL
 * @param array $atts Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source http://gravatar.com/site/implement/images/php/
 */
function get_gravatar( $Gemail, $s = 80, $d = 'mm', $r = 'g', $img = false, $atts = array() ) {
    $url = 'http://www.gravatar.com/avatar/';
    $url .= md5( strtolower( trim( $Gemail ) ) );
    $url .= "?s=$s&d=$d&r=$r";
    if ( $img ) {
        $url = '<img src="' . $url . '"';
        foreach ( $atts as $key => $val )
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

?>