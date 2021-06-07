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
           echo '<img src="'.$image_name .'" alt="'.$image_name.'" id="img'.$i.'" onclick="moveImage(this)" />';
         } else {
             continue;
         }
   }
    ?>  
</div>

<script>

   let i = 1

    const moveImage = (line) => {        
        var container = document.getElementById("board-container");
        var childElemnent = document.createElement("img");
        childElemnent.src = line.src
        childElemnent.id = line.id + i
        childElemnent.tabIndex = "1"
        childElemnent.onkeyup = function(e) { removeAddedElement(this.id, e) }
        container.appendChild(childElemnent)
        i = i + 1
    }
</script>