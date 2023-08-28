<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //array
        $fruits = array("mango", "apple", "banana", "pineapple");
        $fruitsLabel = array("mangga" => "mango", "mansanas" => "apple", "saging" => "banana", "pinya" => "pineapple");
        $total = count($fruits);

        for($x = 0; $x < $total; $x++){
            echo $fruits[$x]. "<br/>";
        }

        foreach($fruits as $values){
            echo $values . "<br/><br/>";
        }
         print_r($fruitsLabel). "<br/>";

         echo $fruitsLabel['mansanas']; 

         $numbers = array(1,3,2,4,5,6,10,8,9,7);
         //sort($numbers);//ascending
         //rsort($numbers); //descending
         print_r($numbers);

         if(in_array("mango", $fruits)){//search or filter sa array
            echo "may mango <br/>";
         }else {
            echo "walang tinda <br/>";
         }

         
    ?>
</body>
</html>