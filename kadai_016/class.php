<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
    <p>
            <?php
            class Food {
                // プロパティを定義する
                private $name;
                private $price;
        
             public function show_price() {
                    echo $this->price . '<br>';
                 }

             public function __construct($name,$price) {
                $this->name = $name;
                $this->price = $price; 
                 }   
         }

            class Animal {
             // プロパティを定義する
             private $name;
             private $height;
             private $weight;


             public function show_height() {
                echo $this->height . '<br>';
             }
           
             public function __construct($name,$height,$weight) {
                $this->name = $name;
                $this->height = $height; 
                $this->weight = $weight;
            
            }   
            
         }
    
        
         $potato = new Food('potato', 250);
         $dog = new Animal('dog', 60, 5000);

         print_r($potato);
         echo '<br>'; 
         print_r($dog); 
         echo '<br>';        

         $potato->show_price();
         $dog->show_height();
         ?>
         
    </p>

 </body>
 
 </html>