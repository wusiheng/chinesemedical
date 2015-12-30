  <nav class="menu">
              <ul>
<?php

  $rs = $db->query("SELECT* FROM menu where parent_id = 0");
    $menu = $rs->fetchAll();
                 
                   foreach ($menu as $item){
                      
                   echo "<li class='down-menu'>";

                       if($item['type']=="page")
                        echo "<a href='".$item['url']."'>".$item['title']."</a>";
                        else if($item['type']=="sub"){
                             echo "<a href='#'>".$item['title']."</a>";
                         $srs = $db->query("SELECT* FROM menu where parent_id =".$item['id']);
                       if($srs){
                       $submenu = $srs->fetchAll();
                      
                          echo "<ul>";
                              foreach ($submenu as $subitem){
                          
                                         echo "<li ><a href='".$subitem['url']."'>".$subitem['title']."</a>";

                                }
                            echo "</ul>";
                           
                       }  
                       }
                        else{
                        echo "<a href='#'>".$item['title']."</a>";     
                          $rs = $db->query("SELECT* FROM ".$item['type']);   
                           if($rs){
                                   $subMenu = $rs->fetchAll();
                                    echo "<ul>";
                                    foreach ($subMenu as $subItem){
                          
                                         echo "<li ><a href='".$item['url']."?id=".$subItem['id']."'>"
                                             
                                             .$subItem[$item['type']]."</a>";

                                    }
                                    echo "</ul>";
                           } 
                            
                            
                        }
                       
                      
                       
                       echo "</li>";
                    
                  }
 
?>

    </ul>
            
          </nav>
                 