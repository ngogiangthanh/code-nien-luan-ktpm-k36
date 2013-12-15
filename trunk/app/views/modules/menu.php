<!-- start: Main Menu -->
	
<div class="nav-collapse sidebar-nav collapse navbar-collapse bs-navbar-collapse">
    <ul class="nav nav-tabs nav-stacked main-menu">
        <?php
        $getroutename = Route::currentRouteName();
        if (trim($getroutename) == 'index') {
            $getroutename = 'news';
        }
        switch (Auth::user()->id_nhom_quyen_han) {
            case 1: $menus = unserialize(QUAN_LY); //check
                break;
            case 2: $menus = unserialize(THU_THU); //check
                break;
            case 3: $menus = unserialize(NGUOI_MUON_SV); //check
                break;
            case 4: $menus = unserialize(NGUOI_MUON_CB); //check
                break;
        }

        foreach ($menus as $menu) {
            if (is_array($menu["CHILD"])) {
                $count = count($menu["CHILD"]);
                ?>
                <li>
                    <a href='<?php echo URL . $menu['LINK']; ?>' class="dropmenu"><i class="<?= $menu['ICON'] ?>"></i><?php echo $menu['MENU_HE_THONG'] ?><span class="label"><?php echo $count; ?></span></a>
                    <ul>
                        <?php
                        $children = $menu["CHILD"];
                        foreach ($children as $child) {
                            ?>
                            <li>
                                <a class="submenu" href='<?php echo URL . $menu["LINK"] . "/" . $child['LINK']; ?>'><i class="<?= $menu['ICON'] ?>"></i><span class="hidden-tablet"><?php echo $child['MENU_HE_THONG'] ?></span></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php
            } else {
                ?>
                <li <?php
                if (strpos($getroutename, $menu['LINK']) !== false) {
                    echo 'class="active"';
                } else {
                    echo '';
                }
                ?>>
                    <a class="submenu" href='<?php echo URL . $menu['LINK']; ?>'><i class="<?= $menu['ICON'] ?>"></i><span class="hidden-tablet"><?php echo $menu['MENU_HE_THONG'] ?></span></a>
                </li>
                <?php
            }
        }
        ?>
    </ul>
</div>