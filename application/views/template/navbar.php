<nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        
                        
                        
                        <li class="nav-small-cap">--- PERSONAL</li>

                        <?php
                        
                        $main_menu = $this->db->get_where('tabel_menu', array('menu_is_main'=> 0 ))->result();

                        foreach ($main_menu as $menu_utama){
                                $sub = $this->db->get_where('tabel_menu', array('menu_is_main'=> $menu_utama->menu_id ));

                                $tampil_menu_utama = anchor($menu_utama->menu_link,'<i       class='.$menu_utama->menu_icon.'></i>'."<span class='hide-menu'>".$menu_utama->menu_judul."</span>",array('class' => 'waves-effect waves-dark',
                                'aria-expanded'=>'false',
                                )); 
                                
                                
                                if ($sub->num_rows()>0){
                                    
                                    echo '<li>';
                                          echo $tampil_menu_utama;
                                          echo "<ul aria-expanded='false' class='collapse'>";
                                    
                                          foreach ($sub->result() as $sub_menu){
                                              echo '<li>'.anchor($sub_menu->menu_link,'<i class='.$sub_menu->menu_icon.'></i>'.$sub_menu->menu_judul,array('class' => 'waves-effect waves-dark')).'</li>';
                                             }

                                         echo '</ul>';
                                     echo '</li>';

                                }else {
                                    echo '<li>'.$tampil_menu_utama.'</li>';
                                }
                                
                        }
                        
                        ?>
                    </ul>
                </nav>