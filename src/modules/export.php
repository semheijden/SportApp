<div class="export-button-container">
    <button class="ExportButton" id="ExportButton" onclick="saveCanvas()">Export</button>
    <i class="fas fa-undo" onclick="resetBoard()"></i>

</div>

<script>
    const resetBoard = () => {
        let board = document.getElementById("board-container")
        while (board.hasChildNodes()) {
            board.removeChild(board.lastChild);
        }
    }
</script>
