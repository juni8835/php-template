</head>

<body>
  <?php 
    // show($MENU_ITEMS);
  ?>

  <header>
    <h1><a href="<?=$CLIENT_ROOT?>/">홈</a></h1>
    <nav>
      <?php if(count($MENU_ITEMS) > 0) :?>

      <ul>
        <?php foreach ($MENU_ITEMS as $di => $depth): 
          $depth_active = $depth['isActive'] ? 'active' : '';  
        ?>
        <li class="<?=$depth_active?>"><a href="<?=$depth['path']?>"><?=$depth['title']?></a>

          <?php if(array_key_exists('pages', $depth) && count($depth['pages']) > 0) :?>
          <ul>
            <?php foreach ($depth['pages'] as $pi => $page): 
              $page_active = $page['isActive'] ? 'active' : '';    
            ?>
            <li class="<?=$page_active?>"><a href="<?=$page['path']?>"><?=$page['title']?></a>

              <?php if(array_key_exists('pages', $page) && count($page['pages']) > 0) :?>
              <ul>
                <?php foreach ($page['pages'] as $si => $subpage): 
                  $subpage_active = $subpage['isActive'] ? 'active' : '';    
                ?>
                <li class="<?=$subpage_active?>"><a href="<?=$subpage['path']?>"><?=$subpage['title']?></a></li>
                <?php endforeach; ?>
              </ul>
              <?php endif; ?>

            </li>
            <?php endforeach; ?>
          </ul>
          <?php endif; ?>

        </li>
        <?php endforeach; ?>
      </ul>

      <?php endif; ?>
    </nav>
  </header>