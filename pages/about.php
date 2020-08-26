
<!-- About -->

<style>
.about-content {
  background-color: #fefefe;
  margin: 10% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  width: 30%; /* Could be more or less, depending on screen size */
  border-radius: 25px;
  border-color: white;
}
</style>



<div id="about" class="modal">
  
  <form class="about-content animate">
    <h3 class="text-center"></br>About</br></br></h3>
   
    <div class="form col-12">
      <p class="text-center"> OpenRO ERP is developed by <a href="https://arcanepowertech.com"> ArcanePowerTech</a> as a free open source web application.</p> <br>
      <p class="text-center"> The current deployed version is:</p>
      <p class="text-center"> 0.0.1 ALPHA</p>
      <br><br>

    </div>
    
    <p></p>
      
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('about');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>