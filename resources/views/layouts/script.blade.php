<script src="https://cdn.jsdelivr.net/npm/preline/dist/preline.min.js"></script>

<!-- Apexcharts -->
<script src="https://cdn.jsdelivr.net/npm/lodash@4.17.21/lodash.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<script src="https://preline.co/assets/js/hs-apexcharts-helpers.js"></script>

 <!-- DataTables and extensions -->
 <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.7.2/js/dataTables.buttons.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.8/pdfmake.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.8/vfs_fonts.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.html5.min.js"></script>
 <script src="https://cdn.datatables.net/buttons/1.7.2/js/buttons.print.min.js"></script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        let deleteUrl;

        // Fonction pour gérer le clic sur le bouton de suppression
        function handleDeleteClick(event) {
            event.preventDefault();  // Empêcher le comportement par défaut du lien

            // Définir l'URL de suppression
            deleteUrl = this.href;

            // Modifier le message du modal si nécessaire
            document.getElementById('confirmationMessage').textContent = this.getAttribute('project');

            // Afficher le modal
            new bootstrap.Modal(document.getElementById('supprimer')).show();
        }

        // Fonction pour confirmer la suppression
        function confirmDelete() {
            if (deleteUrl) {
                // Rediriger vers l'URL de suppression
                window.location.href = deleteUrl;
            }
        }

        // Ajouter les gestionnaires d'événements
        document.querySelectorAll('a[onclick="supprimer(event)"]').forEach(element => {
            element.addEventListener('click', handleDeleteClick);
        });

        document.getElementById('confirmDelete').addEventListener('click', confirmDelete);
    });
    </script>

    <script>
  window.addEventListener('load', () => {
    (function () {
      const { dataTable } = new HSDataTable('#hs-datatable-with-export');
      const buttons = document.querySelectorAll('#hs-dropdown-datatable-with-export .hs-dropdown-menu button');

      buttons.forEach((btn) => {
        const type = btn.getAttribute('data-hs-datatable-action-type');

        btn.addEventListener('click', () => dataTable.button(`.buttons-${type}`).trigger());
      });
    })();
  });


</script>
<script>
    window.addEventListener('load', () => {
  ...

  const inputs = document.querySelectorAll('.dt-container thead input');

  inputs.forEach((input) => {
    input.addEventListener('keydown', function (evt) {
      if ((evt.metaKey || evt.ctrlKey) && evt.key === 'a') this.select();
    });
  });
});
</script>
