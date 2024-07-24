<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    .container{
        max-width: 80%;
        background-color: chartreuse;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets learn about PHP</h1>
        <p> Your party status is here</p>
        <?php
        $age = 5;
        if($age>18){
            echo " You can go to party";
        }else if($age == 7){
            echo "Your are 7 year old";
        }else{
            echo "You can not go to party";
        }

        
        $languages = array("python", "c++", "PHP", "node.js");
        echo "<br>";
        echo count($languages);
        echo "<br>";
        echo $languages[0];

        $a = 0;
        do{
            echo "<br> The value of a is ";
              echo $a;
             $a++;
            //echo $a;
        }while($a<20);


        $a = 0;
        while($a < count($languages)){
            echo "<br> The value of language is:" ;
            echo $languages[$a];
            $a++;
        }

        $a = 200;
        for ($a=0; $a < 10; $a++) { 
            echo "<br> The value of language is:" ;
            echo $a;
        }

        foreach($languages as $value){
            echo "<br> The value from foreach loop is";
            echo $value;
        }

        function print5(){
            echo "<br>Five";

        }
        print5();
        ?>
    </div>

</body>
</html>