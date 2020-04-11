<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lineup</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    <main>
      <form action="display.php" method="post">
        <div>
          <label>Sort Options:</label>
          <input type="radio" name="sort" value="position" >Position
          <input type="radio" name="sort" value="name">Name
          <input type="radio" name="sort" value="bat">Batting Order
        </div>
          <br><br>
        <div id="buttons">
          <label>Submit</label>
          <input type="submit" value="submit"><br>
        </div>
      </form>
    </main>
    </html>
