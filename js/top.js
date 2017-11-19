$(document).ready(function() {
    $('#topTwentyTwo').DataTable( {
        "language": {
            "paginate": {
                "previous": "Précédent",
                "next": "Suivant"
            },
            "lengthMenu": "Montrer _MENU_ post par page",
            "search": "Chercher",
            "zeroRecords": "Rien n'a été trouvé - Désolé",
            "info": "Page _PAGE_ sur _PAGES_",
            "infoEmpty": "Aucun post disponible",
            "infoFiltered": "(Filtré sur un total de  _MAX_ posts)"
        },
        columnDefs: [
            { orderable: false, targets: [1,2,3,4,5] }
        ]
    })
} );

function upVote(tr_element) {
    console.log("up vote" + tr_element);
}

function downVote(tr_element) {
    console.log("down vote" + tr_element);
}