<div class="boardsettings-container">
    <div class="boardsettings-container-inner">
        <div class="amount-container">
        <p class="text-amount">Aantal toe voegen</p>
        <input id="amount" type="number" value="1"/>
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
        if (e.keyCode != 46) return;
        let element = document.getElementById(id);
        element.parentNode.removeChild(document.getElementById(id));    
    }

    const triggerElement  = (id, e) => {
        if (e.keyCode == 38) {
            let element = document.getElementById(id);
            let z = element.style.zIndex
            let o = element.style.opacity  
            if (10 <= z) z = 9
            if (0.6 >= o) o = 0.7
            element.style.zIndex = parseInt(z)  + 1
            element.style.opacity = o  - 0.1
        }

        if (e.keyCode == 40) {
            let element = document.getElementById(id);
            let z = element.style.zIndex
            let o = element.style.opacity 
            if (1 >= z) z = 2
            if (1 >= o) o = 0.9
            element.style.zIndex = parseInt(z)  - 1
            element.style.opacity = o  + 0.1
        }

        if (e.keyCode == 82) {
            let element = document.getElementById(id);
            let rotation = element.style.transform
            let degree = element.style.transform.replace("rotate(","")
            degree = degree.replace("deg)","")
            console.log("d" + degree) 
            rotation = parseInt(degree) + 2  
            console.log("r" + rotation) 
            element.style.transform = "rotate("+rotation+"deg)"   
        }
    }
</script>
