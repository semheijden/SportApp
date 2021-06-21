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
           echo '<img  src="'.$image_name .'" alt="'.$image_name.'" id="img'.$i.'" onclick="moveImage(this)" />';
         } else {
             continue;
         }
   }
    ?>  
</div>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>

   let i = 1

    const moveImage = (line) => {        
        var amount = document.getElementById("amount")

        for(a = 1; a <= parseInt(amount.value); a++) {
          implement(line)
        }
       
    }

    const implement = (line) => {
      var container = document.getElementById("board-container");
        var childElemnent = document.createElement("img");
      childElemnent.src = line.src
      childElemnent.id = line.id + i
      childElemnent.tabIndex = "1"
      childElemnent.className  = "materiaal"
      childElemnent.style.transform = "rotate(0deg)"
      childElemnent.onkeyup = function(e) { removeAddedElement(this.id, e) }
      childElemnent.onkeydown = function(e) { triggerElement(this.id, e) }
      container.appendChild(childElemnent)
      $( ".materiaal" ).draggable()

      i = i + 1
    }

  
</script>