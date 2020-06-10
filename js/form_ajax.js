
  function funcSuccess( response){
    result = $.parseJSON(response);
        $('#result_form').html(result);

  }
    $(document).ready(function (){
      $("#register").bind("click", function(){
        $.ajax ({
          url: "../Auth/form_register.php",
          type: "POST",
          data: $("#ajax_form").serialize(),
          dataType:"html",
          success: funcSuccess
        });
      });
    });

    $(document).ready(function (){
      $("#log_in").bind("click", function(){
        $.ajax ({
          url: "../Auth/form_log_in.php",
          type: "POST",
          data: $("#ajax_log_in").serialize(),
          dataType:"html",
          success: funcSuccess
        });
      });
    });
