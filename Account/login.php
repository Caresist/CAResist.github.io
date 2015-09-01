<?php
$database = new SQLiteDatabase('myDatabase.db');

/*$sql = 'CREATE TABLE guests (
    guestid INTERGER PRIMARY KEY,
    fname TEXT,
    lname TEXT,
    comments TEXT
)';

$database->queryExec($sql);
$sql = 'INSERT INTO guests (fname, lname, comments) VALUES("Anon", "ymus", "die"); ' ;

$database->queryExec($sql); */

$sql = "SELECT * FROM guests ORDER BY lname, fname";

$result = $database->query($sql);

while ($row = $result->fetch()){
    echo $row['fname'] . " " . $row['lname'];
    echo " Had this to say...<br/>" . substr($row['comments'],0,50);
    echo "<br/>"
}

?>