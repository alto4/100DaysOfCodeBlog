<?php

function formatDate($date)
{
  return date('F j, Y, g:i a', strtotime($date));
}

function shortenText($text, $numOfChars = 450)
{
  $text = $text . " ";
  $text = substr($text, 0, $numOfChars);
  $text .= "...";

  return $text;
}
