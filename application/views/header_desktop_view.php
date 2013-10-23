<!-- slider library -->
<script src="//unslider.com/unslider.min.js"></script>

<script>
  $(document).ready(function() {
    //Product dropdown
    $('#products').click(function () {
        $('#subMenu').slideToggle({
          duration: 150
        });
    });

    $('.banner').unslider({
        speed: 500,
        delay: 8000,
        dots: true,
        fluid: true
    });
  });
</script>

<div class="header-container">
  <header class="wrapper clearfix">
    <h1 class="title">
      <a href="<?php echo base_url()?>">Menken Pharma</a>
    </h1>

    <div id="desktop_menu">
      <ul>
        <li class="first" id="products"><a href="#">Productos</a></li>
        <li class="first"><a href="<?php echo base_url() . 'about'; ?>">Qui&eacute;nes somos</a></li>
        <!--<li class="first"><a href="#">Pedidos</a></li>-->
        <li class="first"><a href="<?php echo base_url() . 'contact'; ?>">Contacto</a></li>
      </ul>
    </div>

    <a id="bt_fb_desktop" href="https://www.facebook.com/menkenpharma" target="_blank" style="outline:0">Facebook</a>
  </header>

  <div id="subMenu">
    <ul id="mainList">
   
      <li class="mnu-parentLi"><a href="<?php echo base_url() . 'product/0/impdent'?>">Implantes</a>
        <ul class="itemMnuChild">
          <?php if (isset( $imp )) : foreach( $imp as $key=>$row ) :
                  if ( $key < 5 ) :?>
                <li class="fstColumn"><a href="<?php echo base_url().'product/0/'.$row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php elseif ( $key == 5 ) : ?>
                <li class="sndColumn firstSndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php else : ?>
                <li class="sndColumn"><a href="<?php echo base_url() . 'product/0/' . $row->urlLink; ?>"><?php echo $row->listName; ?></a></li>
              <?php endif;
               endforeach; 
             endif; ?>
        </ul>
      </li>

      <li class="mnu-parentLi"><a href="<?php echo base_url() . 'product/0/prote'?>">Pr&oacute;tesis</a>
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

      <li class="mnu-parentLi"><a href="<?php echo base_url() . 'product/0/biomat'?>">Biomateriales</a>
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

      <li class="mnu-parentLi"><a href="<?php echo base_url() . 'product/0/cirug'?>">Cirug&iacute;a</a>
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

      <li class="mnu-parentLi"><a href="<?php echo base_url() . 'product/0/equip'?>">Equipamiento</a>
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
