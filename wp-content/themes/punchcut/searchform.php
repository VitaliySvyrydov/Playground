<h2 class="widgettitle">Поиск</h2>
<form method="get" id="search_form" action="<?php bloginfo('home'); ?>/">
  <div>
    <input type="text" value="<?php _e('Поиск…', 'punchcut') ?>" name="s" id="s" onfocus="if (this.value == '<?php _e('Поиск…', 'punchcut') ?>') {this.value = '';}" onblur="if (this.value == '') {this.value = '<?php _e('Поиск…', 'punchcut') ?>';}" />
    <input type="hidden" value="Search" />
  </div>
</form>
