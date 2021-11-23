var DeleteElement = document.getElementById('delete-music')

DeleteElement.onclick = () => {
   if (confirm('Você realmente deseja apagar essa faixa?')) {

        id = document.getElementById("faixa").getAttribute('data-id');

        $.post('../server/delete.php', { id }, res => {
            data = res.JSON
            location.reload() 
        })
   } 
}