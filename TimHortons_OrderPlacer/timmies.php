<!DOCTYPE HTML>
<!--Vaishnav Akavaram; Assignment #5; PHP file-->
<html>
    <html>
    <head>
        <meta charset='UTF-8'>
        <style>
            body{background-color: rgb(223,59,60);}
            div{text-align: center}
            h1{text-align: center;}
            #a{border: 1px solid black; background-color: white; text-align: left; padding: 3px;}
            #b{text-align: center;  background-color: white; border: 1px solid black;}
        </style>
    </head>
    <body>
        <div>
            <img src="images/ty.jpg"/>   
        </div>
        <h1>Your order has been placed!</h1><hr>
            <h3>Your order details:</h3> 
        <div id="a"> &nbsp;
    <?php
        $drinks = $_POST["tDrinks"];
        $cup = $_POST["nDrinks"];
        $size = $_POST["cSize"];
        $sugar = $_POST["aSugar"];
        $sweetener = $_POST["aSweetener"];
        $cream = $_POST["aCream"];
        $milk = $_POST["aMilk"];
        $price = 0;

        function  beverage(){   
          global $drinks, $cup, $size; 
          for($i=0; $i<$cup; $i++){
            ////////////////Coffee//////////////////////////
            if(($drinks) == "Coffee" && ($size) == "Small"){
                echo "<img src='images/s.png'/>";
            }
            else if(($drinks) == "Coffee" && ($size) == "Medium"){
                echo "<img src='images/m.png'/>";
            }
            else if(($drinks) == "Coffee" && ($size) == "Large"){
                echo "<img src='images/l.png'/>";
            }
            else if(($drinks) == "Coffee" && ($size) == "X-Large"){
                echo "<img src='images/xl.png'/>";
            }
            //////////////////Tea//////////////////////////////
            else if(($drinks) == "Tea" && ($size) == "Small"){
                echo "<img src='images/s_t.png'/>";
            }
            else if(($drinks) == "Tea" && ($size) == "Medium"){
                echo "<img src='images/m_t.png'/>";
            }
            else if(($drinks) == "Tea" && ($size) == "Large"){
                echo "<img src='images/l_t.png'/>";
            }
            else if(($drinks) == "Tea" && ($size) == "X-Large"){
                echo "<img src='images/xl_t.png'/>";
            }
            else{
                echo "";
            }
            echo "<img src='images/plus.jpg'/>";        
          }
        }   
        beverage();
        
        for($i=0; $i<$sugar; $i++){
                echo "<img src='images/sugar.jpg'/>";
                echo "<img src='images/plus.jpg'/>";
        }

        for($i=0; $i<$sweetener; $i++){
                echo "<img src='images/sweetener.png'/>";
                echo "<img src='images/plus.jpg'/>";
        } 

        for($i=0; $i<$cream; $i++){
                echo "<img src='images/cream.jpg'/>";
                echo "<img src='images/plus.jpg'/>";
        }

        for($i=0; $i<$milk; $i++){
                echo "<img src='images/milk.jpg'/>";
                echo "<img src='images/plus.jpg'/>";   
        }

        echo "<img src='images/tray.jpg'>";
        
        function userSelection(){
            global $drinks, $size, $price;
            if($drinks == 'Coffee'){
                if($size == 'Small'){
                   return $price = 1.50;
                }
                else if($size == 'Medium'){
                  return $price = 2.00;
                }
                else if($size == 'Large'){
                  return $price = 2.50;
                }
                else{
                  return $price = 3.00;
                }
            }
            else{
                if($size == 'Small'){
                  return $price = 1.00;
                }
                else if($size == 'Medium'){
                  return $price = 1.50;
                }
                else if($size == 'Large'){
                  return $price = 2.00;
                }
                else{
                  return $price = 2.50;
                }
            }
        }
        
        function total(){
            global $drinks, $size, $cup, $sugar, $sweetener, $cream, $milk;
            echo "<br><br><div style='padding: 15px; text-align: left; background-color: black; color: white;'>";
                echo "The total cost of ". $cup. " ". $size. " ". $drinks. " with ". $sugar. " sugar, ".
                    $sweetener. " sweetener, ". $cream. " cream, ".  $milk.
                    " milk ". " plus tax = ";
            $before_Tax = (userSelection()*$cup) + ($sugar*0.05) + ($sweetener*0.1) + ($cream*0.5) + ($milk*0.6);
            $after_Tax = $before_Tax * 0.13 + $before_Tax;
            echo "<span style='color:red; font-size: xx-large;'>$". number_format((float)$after_Tax, 2, '.', ''). "</span>";
                        
            echo "<br><hr>Note: Cardboard tray is free.";
            "</div>";
        }
        total();
    ?>
    </div>
    </body>
</html>


