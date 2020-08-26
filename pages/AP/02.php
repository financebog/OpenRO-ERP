
<!-- AP_02 -->

<style>
.ap02-content {
  background-color: #fefefe;
  margin: 3% auto 5% auto; /* 5% from the top, 15% from the bottom and centered */
  width: 50%; /* Could be more or less, depending on screen size */
  border-radius: 10px;
  border-color: white;
}
</style>

<div id="id_AP_02" class="modal">
  
  <form class="ap02-content animate" action="./main.php" method="post">
    
    <h3 class="text-center"></br>AP_02</br></br></h3>
   
    <div class="form-row col-12">
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
    </div>
    <div class="form-group col-12">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
    </div>
    <div class="form-group col-12">
        <label for="inputAddress2">Address 2</label>
        <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
    </div>
    <div class="form-row col-12">
        <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <input type="text" class="form-control" id="inputCity">
        </div>
        <div class="form-group col-md-4">
            <label for="inputState">State</label>
            <select id="inputState" class="form-control">
                <option selected>Choose...</option>
                <option>...</option>
            </select>
        </div>
        <div class="form-group col-md-2">
            <label for="inputZip">Zip</label>
            <input type="text" class="form-control" id="inputZip">
        </div>
    </div>
    <div class="form-group col-12">
        <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
                Check me out
            </label>
        </div>
    </div>
    <br>
    <div class="form-row col-12">
        <div class="form-group col-md-6 mx-auto text-center">
            <button type="submit" class="btn btn-primary col-3">Submit</button>
            <span style="padding-left: 18px;">
            <button type="reset" class="btn btn-danger col-3" onclick="document.getElementById('id_AP_02').style.display='none'" title="Închide - Close">Cancel</button>
        </div> 
    </div><br> 
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id_AP_02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>