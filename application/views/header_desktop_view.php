<script>
  $(document).ready(function() {
    $('#products').click(function () {
        $('#subMenu').slideToggle();
    });
  });
</script>

<div class="header-container">
  <header class="wrapper clearfix">
    
    <h1 class="title">
      <a href="http://www.menkenpharma.com/">Menken Pharma</a>
    </h1>

    <a id="bt_fb" href="#" style="outline:0">Facebook</a>

    <div id="menu">
      <ul>
        <li class="first" id="products"><a href="#">Productos</a></li>
        <li class="first"><a href="#">Quiénes somos</a></li>
        <li class="first"><a href="#">Pedidos</a></li>
        <li class="first"><a href="#">Contacto</a></li>
      </ul>
    </div>   
  </header>

  <div id="subMenu">
    <ul id="mainList">
      <li>implantes
        <ul class="itemMnuChild">
          <li>uno</li>
          <li>dos</li>
          <li>tres</li>
          <li>cuatro</li>
        </ul>
      </li>
      
      <li>prótesis</li>
      <li>biomateriales</li>
      <li>cirugía</li>
      <li>materiales</li>
      <li>equipamiento</li>
    </ul>
  </div>
</div>
