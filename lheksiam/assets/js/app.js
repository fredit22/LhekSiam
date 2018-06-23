//เรียกฟังก์ชั้น dataTable , Popover
$(document).ready(function() {
    $('.dataTable').dataTable();
    $('[data-toggle="popover"]').popover();
} );

//เรียกฟังก์ชั้น append การบันทึกค่าแล้วกลับมาหน้าหลัก (customer)
$(function () {
  $('form').bind('submit', function () {
    $.ajax({
      type: 'post',
      url: 'customer_accept.php',
      data: $('form').serialize(),
      success: function(data) {

          var CUSTOMER_ID = $("#ID").val();
          var CUSTOMER_NAME = $("#name").val();
      $('#customer').append('<option value="'+CUSTOMER_ID+'" selected="selected">'+CUSTOMER_NAME+'</option>');

      //alert('<option value="'+CUSTOMER_ID+'" selected="selected">'+CUSTOMER_NAME+'</option>');
      //alert(CUSTOMER_NAME);
      }

    });
    return false;

  });

});
