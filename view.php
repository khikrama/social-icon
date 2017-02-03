<?php
  $classes = classNames( "qx-element qx-element-{$type} {$field['class']}", $visibilityClasses, [
    'qx-text-left' => $field['alignment'] === 'left',
    'qx-text-center' => $field['alignment'] === 'center',
    'qx-text-right' => $field['alignment'] === 'right',
    "wow {$field['animation']}" => $field['animation']
  ]);
?>
<div id="<?php echo $id; ?>" class="<?php echo $classes;?>">
  <ul class="social-icon <?php echo $field['layout'] ?>">
  <?php foreach($field['socialicons'] as $social):?>
    <li><a href="<?php echo $social['social_url'] ?>"><i class="<?php echo $social['icon'] ?>"></i></a></li>
  <?php endforeach;?>
  </ul>
</div>

