<!-- slider library -->
<script src="//unslider.com/unslider.min.js"></script>

<script>
  $(document).ready(function() {
    //Product dropdown
    $('#products').click(function () {
        $('#subMenu').slideToggle();
    });

    $('.banner').unslider({
        speed: 500,
        delay: 5000,
        dots: true
    });
  });
</script>

<div class="header-container">
  <header class="wrapper clearfix">
    <h1 class="title">
      <a href="<?php echo base_url()?>">Menken Pharma</a>
    </h1>


    <div id="menu">
      <ul>
        <li class="first" id="products"><a href="#">Productos</a></li>
        <li class="first"><a href="<?php echo base_url() . 'about'; ?>">Quiénes somos</a></li>
        <!--<li class="first"><a href="#">Pedidos</a></li>-->
        <li class="first"><a href="<?php echo base_url() . 'contact'; ?>">Contacto</a></li>
      </ul>
    </div>   
    <a id="bt_fb_desktop" href="#" style="outline:0">Facebook</a>
  </header>

  <div id="subMenu">
    <ul id="mainList">
      <li class="mnu-parentLi">implantes
        <ul class="itemMnuChild">
          <?php if (isset( $imp )) : foreach( $imp as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>

      <li class="mnu-parentLi">prótesis
        <ul class="itemMnuChild">
          <?php if (isset( $prote )) : foreach( $prote as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>

      <li class="mnu-parentLi">biomateriales
        <ul class="itemMnuChild">
          <?php if (isset( $biomat )) : foreach( $biomat as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>

      <li class="mnu-parentLi">cirugía
        <ul class="itemMnuChild">
          <?php if (isset( $cirug )) : foreach( $cirug as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>

      <li class="mnu-parentLi">materiales
        <ul class="itemMnuChild">
          <?php if (isset( $mate )) : foreach( $mate as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>

      <li class="mnu-parentLi">equipamiento
        <ul class="itemMnuChild">
          <?php if (isset( $equip )) : foreach( $equip as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>
    </ul>
  </div>
</div>
