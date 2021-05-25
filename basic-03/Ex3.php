<?php
    function countword($text,$word){
        $result=explode(" ",$text);
        $nb=0;
        $size=count($result);
        $i=0;
        while($size>0){
            if($word==$result[$i]){
                $nb++;
            }
            $i++;
            $size--;
        }
        return $nb;
    }
    $text="Hello I am so happy today beacuse I learnt new things about programming.";
    $word="I";
    echo "The word: " .$word. ".<br> Exists ".countword($text,$word)." times in the text below: <br> $text";
?>