<ul class="ec-region-list">
<?php
$i = 0;
$nid = $element['#object']->nid;
foreach ($items as $item) { ?>
    <li class="ec-region-article" id="region-<?php echo $nid . '-' .$i; ?>">
        <article>    
            <?php print render($item['#markup']); ?>
        </article>
    </li>
<?php
    $i++;
} 
?>
</ul>