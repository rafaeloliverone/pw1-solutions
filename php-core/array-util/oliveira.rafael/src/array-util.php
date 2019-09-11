<?php

function minimum($array) {
  $min = $array[0];
  foreach($array as $number){
    if ( $number < $min ) {
      $min = $number;
    } 
  }
  return $min;
}

function maximum($array) {
  $max = $array[0];
  foreach($array as $number){
    if ( $number > $max ) {
      $max = $number;
    } 
  }
  return $max;
}

function rangeValues($length, $last=0, $step=0)
{
  // TODO
}

function zip(...$arrays) 
{
  // TODO
}

function uniq($array) 
{
  // TODO
}

function sortNum($array) 
{
  // TODO
} 