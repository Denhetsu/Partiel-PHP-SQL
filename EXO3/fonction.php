<?php

require_once('classe.php');

function LevelUpNiveau($niveau = 1, $force = 100)
{
  $niveau=$niveau + 1;
  return $niveau;

  
}

echo LevelUpNiveau();

function LevelUpForce($force = 100)
{
    $force=$force + 50;
    return $force;
}


echo LevelUpForce()


?>