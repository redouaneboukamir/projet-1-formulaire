document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('select');
    var instances = M.FormSelect.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('select').formSelect();
  });

  
//   $('#button').click(function(){
      
//     if($('#first_name').val()){
//       alert('completer first');
//   }}