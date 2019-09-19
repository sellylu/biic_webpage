<?php
require_once 'db_config.php';
require_once 'db_class.php';

$db = new DB();
$db->connect_db($_DB['host'], $_DB['username'], $_DB['password'], $_DB['dbname']);
$data = $db->query("SELECT id, full_name, short, year, date_format(`date`, \"%Y.%m\") as `date`, album FROM news where display=true order by id desc;");

while($r = $db->fetch_array()) {
	$id=$r['id']; $year=$r['year']; $date=$r['date'];
	$short=$year.$r['short']; $name=$year." ".$r['full_name'];
	$img=$r['album'];
	echo "<!-- ".$short." -->\n";
?>
<article id=<?php echo '"post-'.$id.'"'; ?> class="box post card <?php echo $year; ?>">
	<div class="row">
		<header class="post-meta col-12-medium col-2">
			<h3 class="entry-time" itemprop="datePublished"><?php echo $date; ?></h3>
		</header>
		<section class="post-content col-12-medium col-10">
			<header>
				<h2>
					<?php
					if (empty($r['album'])) {
						$link='<a href="#post-'.$id.'">';
						echo $link.$name.'</a>';
						echo '</h2></header>';
						echo '<div>';
						echo '<h3>Coming soon...</h3>';
					} else {
						$link='<a href="./blog.php?id='.$id.'&name='.$short.'&full='.$name.'">';
						echo $link.$name.'</a>';
						echo '</h2></header>';
						echo '<div>';
						echo $link.'<img src="'.$img.'"></a>';
						echo substr($link,0,-1).'class="button">Read More →</a>';
					}
					?>
			</div>	
		</section>
	</div>
</article>
<?php
}
?>
