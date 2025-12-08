<div class="rounded-md border border-gray-200 bg-gray-100/20 p-2">
    <div>
        <span class="text-xs font-bold">
            <?php echo $args['date_start'] . ' - ' . $args['date_end']; ?>
        </span>
    </div>

    <div>
        <h5 class="text-sm font-bold">
            <?php echo $args['title']; ?>
        </h5>

        <?php if ($args['description']): ?>
            <p class="text-sm font-normal mt-2">
                <?php echo get_limit_words($args['description'], 20); ?>
            </p>
        <?php endif; ?>
    </div>
</div>