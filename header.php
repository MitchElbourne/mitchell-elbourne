<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php
    $navItems = ["Projects", "Contact me"]
?>
	<header>
		<div class="logo">
            <span class="h2 code">&lt;M&gt;</span>      
        </div>

        <ul>
            <?php foreach ($navItems as $index => $item) { ?>
                <li class="code">
                    <?php
                    // echo 
                    // '<a href="/'. $item .'">
                    //     <span class="caret">&lt;0'. $index .'></span>
                    //     '. $item .'
                    //     <span class="caret">&lt;/0'. $index .'&gt;</span>
                    // </a>';
                    echo 
                    '<a href="/'. $item .'">
                        <span class="caret">&lt;</span><span class="nav-icon">/</span>'.$item.'<span class="caret">&gt;</span>
                    </a>';
                    ?>  
                </li>
            <?php } ?>
        </ul>
	</header>
