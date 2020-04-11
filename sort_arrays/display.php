<?php
  //create players array w/ 3 keys for each entry
  $players = array (
    array('position' => 'CF', 'name' => 'Tsunadi', 'bat' => 1),
    array('position' => '1B', 'name' => 'Naruto', 'bat' => 2),
    array('position' => '2B', 'name' => 'Saskue', 'bat' => 3),
    array('position' => '3B', 'name' => 'Rock-Lee', 'bat' => 4),
    array('position' => 'IF', 'name' => 'Gara', 'bat' => 5),
    array('position' => 'LF', 'name' => 'Kakashi', 'bat' => 6),
    array('position' => 'RF', 'name' => 'Guy', 'bat' => 7),
    array('position' => 'OF', 'name' => 'Obito', 'bat' => 8),
    array('position' => 'SS', 'name' => 'Madara', 'bat' => 9),
  );

  //comparison function
  function array_compare_factory($sort_key) {
    return function ($left, $right) use ($sort_key) {
      return $left[$sort_key] <=> $right[$sort_key];
    };
  }

  //take action based on variable in POST array
  $sort = filter_input(INPUT_POST, 'sort');
  switch ($sort) {
      case 'position':
        $sort_by_postion = array_compare_factory('position');
        usort( $players, $sort_by_postion );
        break;
      case 'name':
      $sort_by_name = array_compare_factory('name');
      usort( $players, $sort_by_name );
        break;
      case 'bat':
      $sort_by_bat = array_compare_factory('bat');
      usort( $players, $sort_by_bat );
        break;
  }
?>
<!DOCTYPE html>
<html>
  <head>
      <meta charset="UTF-8">
      <title>Lineup</title>
      <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <main>
    <table>
        <tr>
          <th>Name</th>
          <th>Postion</th>
          <th>Batting Position</th>
        </tr>
        <?php foreach ($players as $player) : ?>
        <tr>
          <td><?php echo $player['name']; ?></td>
          <td><?php echo $player['position']; ?></td>
          <td><?php echo $player['bat']; ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
  </main>
</html>
