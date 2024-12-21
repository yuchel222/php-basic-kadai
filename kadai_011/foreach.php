<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
 <body>
     <p>
         <?php
          $veges_data = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];
 
        
         foreach ($veges_data as $vege_date) {
         }
        
         foreach ($veges_data as $index => $value) {
          echo "{$index}：{$value}<br>";
         }
         ?>
     </p>

 </body>
 
 </html>