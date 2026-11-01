<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>
<ul class="grocefycart-helper-links">
	<?php
	$url = grocefycart_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) && grocefycart_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) && grocefycart_is_plugin_activated( 'advanced-import/advanced-import.php' ) ? admin_url( 'themes.php?page=advanced-import' ) : '#starter-sites';
	?>
	<li class="helper-link">
		<button class="btn btn-primary has-icon">
			<a href="<?php echo esc_url( $url ); ?>">
				<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M2.25 12.75C2.25 13.4475 2.25 13.7962 2.32667 14.0824C2.53472 14.8588 3.1412 15.4653 3.91766 15.6734C4.20379 15.75 4.55252 15.75 5.25 15.75H12.75C13.4475 15.75 13.7963 15.75 14.0824 15.6734C14.8588 15.4653 15.4653 14.8588 15.6734 14.0824C15.75 13.7962 15.75 13.4475 15.75 12.75"
						stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
					<path
						d="M12.375 8.62503C12.375 8.62503 9.88938 12 8.99995 12C8.1106 12 5.625 8.62503 5.625 8.62503M8.99995 11.25V2.25"
						stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				</svg>
				<?php esc_html_e( 'Start Demo Import', 'grocefycart' ); ?>
			</a>
		</button>
	</li>

	<li class="helper-link">
		<button class="btn btn-secondary has-icon">
			<a href="https://docs.cozythemes.com/theme-guide" target="_blank" rel="nofollow noopener">
				<svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M7.5 15.375V15C7.5 12.8787 7.5 11.8181 8.15903 11.159C8.81805 10.5 9.8787 10.5 12 10.5H12.375M12.75 9.25732V6.75C12.75 3.92157 12.75 2.50736 11.8713 1.62868C10.9927 0.75 9.5784 0.75 6.75 0.75C3.92158 0.75 2.50736 0.75 1.62868 1.62868C0.75 2.50736 0.75 3.92157 0.75 6.75V10.1581C0.75 12.5919 0.75 13.8088 1.41455 14.633C1.54881 14.7995 1.70048 14.9512 1.867 15.0854C2.69123 15.75 3.90811 15.75 6.34185 15.75C6.87105 15.75 7.13558 15.75 7.3779 15.6645C7.4283 15.6467 7.47765 15.6263 7.52588 15.6032C7.7577 15.4923 7.94475 15.3053 8.31892 14.9311L11.8713 11.3787C12.3049 10.9451 12.5216 10.7284 12.6358 10.4527C12.75 10.1771 12.75 9.87045 12.75 9.25732Z"
						stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
				</svg>


				<?php esc_html_e( 'Documentation', 'grocefycart' ); ?>
			</a>
		</button>
	</li>
	<?php
	if ( ! grocefycart_premium_access() ) {
		?>
	<li class="helper-link upsell-link">
		<button class="btn upsell-btn has-icon">
			<a href="https://cozythemes.com/pricing-and-plans" target="_blank" rel="nofollow noopener">
				<svg width="14" height="14" viewBox="0 0 22 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path
						d="M17.106 17.4769C17.1612 17.4769 17.2065 17.5222 17.2065 17.5775V18.6907C17.2065 18.746 17.1612 18.7903 17.106 18.7903H3.6792C3.62397 18.7903 3.57959 18.746 3.57959 18.6907V17.5775C3.57959 17.5222 3.62397 17.4769 3.6792 17.4769H17.106ZM10.2856 0.142883C10.416 -0.0477005 10.6972 -0.0475547 10.8276 0.142883L15.1587 6.48956C15.2504 6.6239 15.4264 6.67075 15.5728 6.59991L20.4077 4.26105L20.6323 4.15851C20.8922 4.04039 21.1686 4.28738 21.0806 4.5589L17.4438 15.7728C17.3999 15.9081 17.2736 15.9993 17.1313 15.9993H3.65967C3.51449 15.9992 3.38661 15.9041 3.34522 15.765L0.0141622 4.55988C-0.0667826 4.28698 0.214462 4.04714 0.471193 4.17023L5.54151 6.60187C5.68771 6.67183 5.86322 6.62444 5.95459 6.49054L10.2856 0.142883Z"
						fill="currentColor" />
				</svg>
				<?php esc_html_e( 'Upgrade to Pro', 'grocefycart' ); ?>
			</a>
		</button>
	</li>
		<?php
	}
	?>
</ul>