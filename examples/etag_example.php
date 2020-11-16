<?php
session_start();
// If we have the key, and therefore an etag, and
// it is less the the stored expiration time
$expires = $_SESSION['expires'] ?? 0;
if (isset($_SERVER['HTTP_IF_NONE_MATCH'])
    && $_SERVER['HTTP_IF_NONE_MATCH'] < $expires) {
    // We don't need to do anything except send a 'Not modified' header and exit
    header('Not Modified', true, 304);
    exit();
}
 
// No etag header, create one for this page
$current = time(); // Current time
$oneWeek  = $current - 6.048e+2; // 1 week earlier in seconds
$duration = 2.628e+6; // 1 month in seconds
$etag = $current - $oneWeek;
$_SESSION['etag']= $etag;
$expires = $current + $duration;
$_SESSION['expires']= $expires;
 
header('Expires: ' . gmdate ("D, d M Y H:i:s", $expires) . " GMT");
header('Last-Modified: ' . gmdate ("D, d M Y H:i:s", $current) . " GMT");
header("ETag: $etag");
header("Pragma: cache");
header("Cache-Control: public, must-revalidate, max-age=0");

echo <<<EOT
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Enim neque volutpat ac tincidunt vitae semper quis. Tortor condimentum lacinia quis vel eros donec ac odio tempor. Enim praesent elementum facilisis leo vel fringilla est ullamcorper. Sit amet aliquam id diam maecenas ultricies mi. Nisl purus in mollis nunc sed id semper risus. Scelerisque purus semper eget duis at tellus at urna condimentum. Quis ipsum suspendisse ultrices gravida dictum. Amet volutpat consequat mauris nunc. At ultrices mi tempus imperdiet. Enim facilisis gravida neque convallis a. Nec nam aliquam sem et tortor consequat id.

Sit amet est placerat in egestas. Habitasse platea dictumst quisque sagittis purus. Bibendum at varius vel pharetra vel turpis nunc. Dui nunc mattis enim ut tellus elementum sagittis vitae. Nisi vitae suscipit tellus mauris a diam maecenas. Porttitor eget dolor morbi non. Magna eget est lorem ipsum dolor sit amet consectetur adipiscing. Nunc sed id semper risus. Venenatis urna cursus eget nunc scelerisque. Arcu non odio euismod lacinia. Enim nunc faucibus a pellentesque. Quis enim lobortis scelerisque fermentum dui faucibus in ornare quam. Ut ornare lectus sit amet est placerat in. Proin libero nunc consequat interdum varius. Feugiat vivamus at augue eget arcu. Et ultrices neque ornare aenean euismod elementum nisi quis. Hendrerit dolor magna eget est. Adipiscing elit ut aliquam purus. Placerat orci nulla pellentesque dignissim enim sit amet. Sollicitudin ac orci phasellus egestas.

Ut morbi tincidunt augue interdum velit euismod in. Scelerisque fermentum dui faucibus in ornare. Orci dapibus ultrices in iaculis. Amet massa vitae tortor condimentum lacinia quis vel eros. Pharetra magna ac placerat vestibulum lectus mauris ultrices eros in. In vitae turpis massa sed elementum tempus egestas. Faucibus nisl tincidunt eget nullam non nisi est. Sit amet risus nullam eget felis eget nunc. Ullamcorper eget nulla facilisi etiam dignissim. Nec feugiat nisl pretium fusce id velit ut tortor. Nunc sed augue lacus viverra vitae congue. Enim diam vulputate ut pharetra sit amet aliquam. Nisi porta lorem mollis aliquam ut porttitor leo a. Tellus id interdum velit laoreet id donec ultrices tincidunt. Eget mauris pharetra et ultrices neque ornare aenean euismod elementum.

Purus faucibus ornare suspendisse sed nisi lacus sed. A pellentesque sit amet porttitor eget dolor morbi non. Id faucibus nisl tincidunt eget nullam non nisi. Sit amet risus nullam eget felis. Id semper risus in hendrerit gravida rutrum quisque. Sit amet consectetur adipiscing elit. Turpis nunc eget lorem dolor sed viverra. Id porta nibh venenatis cras sed felis eget. Pellentesque adipiscing commodo elit at imperdiet dui accumsan sit amet. Arcu non odio euismod lacinia. Aliquam malesuada bibendum arcu vitae elementum curabitur vitae nunc. Tristique senectus et netus et malesuada fames ac turpis. Ut placerat orci nulla pellentesque dignissim enim sit amet. Id donec ultrices tincidunt arcu non sodales neque sodales. Enim sit amet venenatis urna cursus eget nunc scelerisque. Facilisis sed odio morbi quis.

Arcu dictum varius duis at consectetur. Aliquam eleifend mi in nulla posuere sollicitudin aliquam ultrices. Nec sagittis aliquam malesuada bibendum. Nisi vitae suscipit tellus mauris a diam maecenas sed enim. Nunc faucibus a pellentesque sit amet porttitor. Et malesuada fames ac turpis egestas maecenas pharetra convallis. Viverra justo nec ultrices dui sapien. Sodales neque sodales ut etiam sit amet nisl purus in. Diam maecenas sed enim ut sem viverra aliquet. Molestie at elementum eu facilisis sed odio morbi. Mauris pharetra et ultrices neque ornare aenean. Arcu cursus euismod quis viverra nibh cras pulvinar.
EOT;
