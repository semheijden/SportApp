<div class="boardsettings-container">
    <div class="boardsettings-container-inner">
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
</div>

<script>
    const selectionBackground = () => {
        let selection = document.getElementById("backgroundid").value;
        let backgroundDiv = document.getElementById("board-container")
        console.log(selection)
        backgroundDiv.style.backgroundImage = "url('" + selection +"')"
    }

    const removeAddedElement  = (id, e) => {
        console.log(e.keyCode)
        if (e.keyCode != 46) return;
        let element = document.getElementById(id);
        element.parentNode.removeChild(document.getElementById(id));
    }
</script>