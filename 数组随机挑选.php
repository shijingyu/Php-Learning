//从数组中随机挑选三个
<?php  

$pictures = array('tire.jpg', 'oil.jpg', 'spark_plug.jpg', 'door.jgp', 'gasker.jpg', 'tree.jpg');

shuffle($pictures);

for ($i = 0; $i < 3; $i++){

	echo $pictures[$i];

}






?>