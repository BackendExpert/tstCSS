window.onload = function(){
  document.getElementById('openModalJK').addEventListener('click', function() {
    document.getElementById('modalJK').style.display = 'block';
  });
  
  document.getElementsByClassName('close')[0].addEventListener('click', function() {
    document.getElementById('modalJK').style.display = 'none';
  });
  
  window.addEventListener('click', function(event) {
    var modal = document.getElementById('modalJK');
    if (event.target == modal) {
      modal.style.display = 'none';
    }
});
}
  