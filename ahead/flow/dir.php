var files = <?php $out = array();
foreach (glob('samples/*') as $filename) {
    $p = pathinfo($filename);
    $out[] = $p['filename'];
}
echo json_encode($out); ?>;