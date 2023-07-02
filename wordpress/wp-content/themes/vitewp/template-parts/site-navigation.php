<header class="main-navigation navigation bg-main shadow-lg relative z-50">
    <div class="container flex flex-wrap justify-between content-center mx-auto h-[100px] p-6">
        <div class="main-navigation__logo brand">
            <a href="<?php echo home_url('/'); ?>" class="text-white hover:text-secondary transition"  aria-label="<?php get_bloginfo('name'); ?>"><?php echo get_bloginfo('name'); ?></a>
        </div>

        <?php if ( has_nav_menu( 'primary' ) ) : ?>
            <nav id="site-navigation" class="main-navigation__navigation flex" aria-label="<?php esc_attr_e( 'Primary menu' ); ?>">
                <div class="main-navigation__button-wrapper">
                    <button class="main-navigation__toggler toggler none flex flex-wrap gap-y-2 w-8 group md:hidden" aria-controls="primary-menu-list" aria-expanded="false">
                        <span class="block h-0.5 w-full bg-white group-hover:bg-secondary transition"></span>
                        <span class="block h-0.5 w-full bg-white group-hover:bg-secondary transition"></span>
                        <span class="block h-0.5 w-full bg-white group-hover:bg-secondary transition"></span>
                    </button>
                </div>
                <?php
                    wp_nav_menu(
                        array(
                            'theme_location'  => 'primary',
                            'menu_class'      => 'main-navigation hidden gap-x-[20px] font-semibold md:flex',
                            'container_class' => 'menu-container',
                            'items_wrap'      => '<ul id="primary-menu-list" class="%2$s">%3$s</ul>',
                            'fallback_cb'     => false,
                        )
                    );
                ?>
            </nav>
        <?php endif; ?>
    </div>
</header>
<?php
