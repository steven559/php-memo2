<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Notre premier Hello World

    $text = "Du texte est stocké<BR>";
    echo"$text";

    $y=30;
    echo"y vaux&nbsp;$y<br>";

    $m=5;
    $n=7;
    echo $m+$n."<br>";
   echo strlen($text)."<br>";
   echo str_word_count($text)."<br>";
   echo strrev($text).'<br>';
   echo strpos("hello world","world");
   echo"<br>";
   echo str_replace("world","tes nul",
       "hello world");