<div class="background-container">
<div class="background-combobox">
    <select name="background" id="backgroundid" class="background-combobox" onchange="selectionBackground()">
        <?php
        $all_files = glob("images/backgrounds/*.*");
        for ($i=0; $i<count($all_files); $i++)
        {
            $image_name = $all_files[$i];
            $supported_format = array('gif','jpg','jpeg','png');
            $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
            $name = str_replace('images/backgrounds/', '', $image_name);
            if (in_array($ext, $supported_format))
                {
                    echo '<option value="'.$image_name .'" id="imgbackground"'.$i.'">'.str_replace('.png', '', $name) .'</option>';
                } 
        } 
        ?>
</select>
</div>
</div>
