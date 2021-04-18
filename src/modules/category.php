<div class="category-list">
    <?php 
 $all_files = glob("images/*.*");
 for ($i=0; $i<count($all_files); $i++)
   {
     $image_name = $all_files[$i];
     $supported_format = array('gif','jpg','jpeg','png');
     $ext = strtolower(pathinfo($image_name, PATHINFO_EXTENSION));
     if (in_array($ext, $supported_format))
         {
           echo '<img src="'.$image_name .'" alt="'.$image_name.'" onclick="moveImage(this)" />';
         } else {
             continue;
         }
   }
    ?>  
</div>

<script>

    const moveImage = (line) => {        
        var container = document.getElementById("board-container");
        var childElemnent = document.createElement("img");
        childElemnent.src = line.src
        container.appendChild(childElemnent);
    }
</script>