<div class="boardsettings-container">
</div>

<script>
    const removeAddedElement  = (id, e) => {
        console.log(e.keyCode)
        if (e.keyCode != 46) return;
        var element = document.getElementById(id);
        element.parentNode.removeChild(document.getElementById(id));
    }
</script>