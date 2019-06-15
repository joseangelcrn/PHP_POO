<style>	
#suggestions {
    box-shadow: 2px 2px 8px 0 rgba(0,0,0,.2);
    height: auto;
    position: absolute;
    top: 45px;
    z-index: 9999;
    width: 206px;
}
 
#suggestions .suggest-element {
    background-color: #EEEEEE;
    border-top: 1px solid #d6d4d4;
    cursor: pointer;
    padding: 8px;
    width: 100%;
    float: left;
}
</style>



<!-- As a heading -->
<nav class="col-md-12 d-flex justify-content-center navbar navbar-light bg-light">
  <span class="navbar-brand mb-0 h1"><b>Buscador</b></span>
 	  <form class="form-inline my-2 my-lg-0">
	      <input id="key" name="key" class="form-control mr-sm-2" type="search" placeholder="Buscar Usuario" aria-label="Search">
	      <button  class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
    </form><br>	
    <span>	<div id="suggestions"></div></span>
</nav>