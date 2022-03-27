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
        $navItems = ["About Me", "Skills", "Contact Me"];

        function processUrl($url) {
            return str_replace(' ', '-', strtolower($url));
        }
    ?>

	<header>
		<a class="logo" href="/">
            <span class="h2 code">&lt;M&gt;</span>      
        </a>

        <ul>
            <?php foreach ($navItems as $item) { ?>
                <li class="code">
                    <?php echo 
                    '<a href="#'. processUrl($item) .'">
                        <span class="caret">&lt;</span><span class="nav-icon">/</span>'. $item .'<span class="caret">&gt;</span>
                    </a>';
                    ?>  
                </li>
            <?php } ?>
        </ul>
	</header>
