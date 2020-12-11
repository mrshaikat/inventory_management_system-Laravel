(function($){
    $(document).ready(function() {
        //Post Datatable
      $('table#data-table-data').dataTable();

        //Logout Button

        $('a#logout-button').click(function(e){
            e.preventDefault();

            $('form#logout-form').submit();
        });


    });
})(jQuery)
