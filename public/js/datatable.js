if (window.innerWidth < 600) {
    document.getElementById('table').classList.add('table-responsive');
}
//console.log(window.innerWidth);
$(document).ready(function () {
    $('#table').DataTable({
        "language": {
            "sSearch": "Rechercher :",
            "sEmptyTable": "Aucune donnée disponible dans le tableau",
            "sInfo": "Affichage de l'élément _START_ à _END_ sur _TOTAL_ éléments",
            "sInfoEmpty": "Affichage de l'élément 0 à 0 sur 0 élément",
            "sLengthMenu": "Afficher _MENU_ éléments",
            "zeroRecords": "Ce que vous recherchez n'existe pas !",
            "oPaginate": {
                "sFirst": "Premier",
                "sLast": "Dernier",
                "sNext": "Suivant",
                "sPrevious": "Précédent"
            }
        }
    });
});