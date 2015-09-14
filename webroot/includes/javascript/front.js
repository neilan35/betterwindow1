var tmm_demo_config = "";
jQuery(document).ready(function() {

	if (tmm_demo_styles_list.length == 0) {
		return;
	}

	var tmm_demo_config = {
		skin: {
			colors: {
				name: 'Theme Color',
				id: 'theme-color',
				desc: 'Take a look at this examples. <br/> Now it\'s under your control to create and add as many different colors as you want.',
				list: tmm_demo_styles_list
			}
		},
		layout: {
			style: {
				name: 'Choose Layout Style',
				id: 'theme-layout',
				desc: '',
				list: {
					1: {
						name: 'Wide',
						className: 'wide'
					},
					2: {
						name: 'Boxed',
						className: 'boxed'
					}
				}
			}
		},
		type: {
			style: {
				name: 'Type of Skins',
				id: 'theme-type',
				desc: '',
				list: {
					1: {
						name: 'Scribble',
						className: 'scribble'
					},
					2: {
						name: 'Normal',
						className: 'normal'
					}
				}
			}
		},
		background: {
			pattern: {
				name: 'Theme Pattern',
				id: 'theme-pattern',
				desc: 'Patterns for Boxed Layout',
				list: tmm_demo_bg_indexes
			}
		}
	};

	/* Theme controller --> Begin */

	if (jQuery.cookie('style_css_file_uri') != null) {
		changeBodyCssFile(jQuery.cookie('style_css_file_uri'), false);
	}

	var $body = jQuery('body'),
			$themePanel = jQuery('<div id="control-panel" />').addClass('control-panel'),
			$panel_label = jQuery('<a href="#" id="control-label"><i class="icon-wrench"></i></a>');
	$themePanel.append($panel_label);

	function changeBodyCssFile(style_css_file_uri, reset) {
		var cssId = 'tmm_ext_demo_css';  // you could encode the css path itself to generate id..
		var elem = document.getElementById(cssId);
		if (elem) {
			elem.parentNode.removeChild(elem);
		}
		//***
		if (reset == false) {
			if (!document.getElementById(cssId))
			{
				var head = document.getElementsByTagName('head')[0];
				var link = document.createElement('link');
				link.id = cssId;
				link.rel = 'stylesheet';
				link.type = 'text/css';
				link.href = style_css_file_uri;
				link.media = 'all';
				head.appendChild(link);
			}
		}

	}

	if (typeof tmm_demo_config != 'undefined' && $themePanel) {

		var defaultSettings = {};

		if (tmm_demo_config.skin) {

			var $block_skin, $label_skin, $desc_skin, $ul = jQuery("<ul/>"), html_skin = '', theme_classes = [];

			jQuery.each(tmm_demo_config.skin, function(index, value) {

				$block_skin = jQuery('<div/>').addClass('style-block').attr({
					id: value.id
				});

				$label_skin = jQuery('<h6>' + value.name + '</h6>');
				$desc_skin = jQuery('<span>' + value.desc + '</span>');

				jQuery.each(value.list, function(index_list, value_list) {
					var style = "";

					if (value_list.icon_type == 'color') {
						style = "background-color: " + value_list.color;
					} else {
						style = "background-image: url(" + value_list.image_file + ")";
					}

					html_skin += '<li><a href="' + value_list.css_file_link + '" style="' + style + '"></a></li>';
					defaultSettings[index] = index_list;
					theme_classes.push(value_list.className);
				});

				$ul.html(html_skin);
				$block_skin.append($label_skin, $desc_skin, $ul);
				$themePanel.append($block_skin);
			});


			$block_skin.find('a').click(function() {
				var style_css_file_uri = jQuery(this).attr('href');
				jQuery.cookie('style_css_file_uri', style_css_file_uri);
				changeBodyCssFile(style_css_file_uri, false);
				$block_skin.find('.active').removeClass('active');
				jQuery(this).parent().addClass('active');
				return false;
			});


			//***

			var layout_block_layout = null, select = jQuery("<select/>"), layout_html = "";

			jQuery.each(tmm_demo_config.layout, function(index, value) {

				layout_block_layout = jQuery('<div/>').addClass('style-block').attr({
					id: value.id
				});

				$label_skin = jQuery('<h6>' + value.name + '</h6>');
				$desc_skin = jQuery('<span>' + value.desc + '</span>');

				jQuery.each(value.list, function(index_list, value_list) {
					layout_html += '<option value="' + value_list.className + '">' + value_list.name + '</option>';
					defaultSettings[index] = index_list;
					theme_classes.push(value_list.className);
				});

				select.html(layout_html);
				layout_block_layout.append($label_skin, $desc_skin, select);
				$themePanel.append(layout_block_layout);

			});


			//***

			var type_block_layout = null, select = jQuery("<select/>"), layout_html = "";

			jQuery.each(tmm_demo_config.type, function(index, value) {

				type_block_layout = jQuery('<div/>').addClass('style-block').attr({
					id: value.id
				});

				$label_skin = jQuery('<h6>' + value.name + '</h6>');
				$desc_skin = jQuery('<span>' + value.desc + '</span>');

				jQuery.each(value.list, function(index_list, value_list) {
					layout_html += '<option value="' + value_list.className + '">' + value_list.name + '</option>';
					defaultSettings[index] = index_list;
					theme_classes.push(value_list.className);
				});

				select.html(layout_html);
				type_block_layout.append($label_skin, $desc_skin, select);
				$themePanel.append(type_block_layout);

			});

			//***

			var background_block_layout = null, $ul_bg = jQuery("<ul/>"), layout_html = "", $label_bg, $desc_bg, html_bg = '', bg_classes = [];

			jQuery.each(tmm_demo_config.background, function(index, value) {

				background_block_layout = jQuery('<div/>').addClass('style-block').attr({id: value.id});

				$label_bg = jQuery('<h6>' + value.name + '</h6>');
				$desc_bg = jQuery('<span>' + value.desc + '</span>');

				jQuery.each(value.list, function(index_list, value_list) {
					html_bg += '<li class="' + value_list.className + '" value="' + value_list.className + '"><a  href="' + value_list.className + '" >' + value_list.name + '</a></li>';
					defaultSettings[index] = index_list;
					bg_classes.push(value_list.className);
				});

				$ul_bg.html(html_bg);
				background_block_layout.append($label_bg, $desc_bg, $ul_bg);

				$themePanel.after(background_block_layout);

			});

			background_block_layout.css("display", "none");

			jQuery(function() {

				jQuery('#theme-layout').on("change", "select", function() {
					var nextClassName = jQuery(this).val();
					jQuery.cookie('demo_layout', nextClassName);
					/*
					 if (jQuery('.ls-container').length) {
					 location.reload();
					 }
					 */
					changeBodyClass(nextClassName, ['wide', 'boxed']);
					animUpDown(nextClassName);
					//***
					if (nextClassName == 'boxed') {
						var pattern_class = jQuery.cookie('demo_pattern');
						if (!pattern_class) {
							pattern_class = 'pattern-3';
						}
						jQuery.cookie('demo_pattern', pattern_class);
						changeBodyClass(pattern_class, bg_classes);
						background_block_layout.find('.active').removeClass('active');
						jQuery('a[href=' + pattern_class + ']').parent().addClass('active');
					}

					return false;
				});


				jQuery('#theme-type').on("change", "select", function() {
					var nextClassName = jQuery(this).val();
					jQuery.cookie('demo_type', nextClassName);

					//if (!$body.hasClass(nextClassName)) {
					changeBodyClass(nextClassName, ['normal', 'scribble']);
					//}
				});

				background_block_layout.find('a').click(function() {
					var nextClassName = jQuery(this).attr('href');
					jQuery.cookie('demo_pattern', nextClassName);
					changeBodyClass(nextClassName, bg_classes);
					background_block_layout.find('.active').removeClass('active');
					jQuery(this).parent().addClass('active');
					return false;
				});

			});

		}

		function changeBodyClass(className, classesArray) {
			jQuery.each(classesArray, function(idx, val) {
				jQuery('body').removeClass(val);
			});
			jQuery('body').addClass(className);
		}

		function animUpDown(el) {
			if (el == null) {
				background_block_layout.animate({left: '-50px'}, 250, function() {
					jQuery(this).css('display', 'none');
				});
			} else if (el == 'wide') {
				background_block_layout.animate({left: '-50px'}, 250, function() {
					jQuery(this).css('display', 'none');
				});
			} else {
				background_block_layout.fadeIn(200, function() {
					jQuery(this).animate({left: '180px'}, 250);
				});
			}
		}


		/* Reset Settings  --> Begin */

		var setDefaultsSettings = function() {
			jQuery.cookie('style_css_file_uri', null);
			$themePanel.find('.active').removeClass("active");
			try {
				changeBodyCssFile(tmm_demo_config.skin.colors.list[0].css_file_link, true);
			} catch (e) {

			}

			if (jQuery('#layerslider').length) {
				location.reload();
			}

			jQuery.cookie('demo_type', '');
			jQuery.cookie('demo_layout', '');
			jQuery.cookie('demo_pattern', '');

			jQuery('#theme-layout select').val('wide').trigger('change');
			jQuery('#theme-type select').val('scribble').trigger('change');

			return false;
		};

		var $restore_button_wrapper = jQuery('<div/>').addClass('restore-button-wrapper');
		var $restore_button = jQuery('<a/>').text('Reset').attr('id', 'restore-button').addClass('button default medium').click(setDefaultsSettings);
		$restore_button_wrapper.append($restore_button);
		$themePanel.append($restore_button_wrapper);


		/* Reset Settings  --> Begin */


		/* Control Panel Label --> Begin */

		$panel_label.click(function() {
			if ($themePanel.hasClass('visible')) {
				$themePanel.animate({
					left: '-190px'
				}, 400, function() {
					$themePanel.removeClass('visible');
				});
				background_block_layout.animate({
					left: '-200px'
				}, 200);

			} else {
				$themePanel.animate({
					left: 0
				}, 400, function() {
					$themePanel.addClass('visible');
				});
				animUpDown(jQuery.cookie('demo_layout'));
			}
			return false;
		});

		/* Control Panel Label --> End */

		$body.append($themePanel);

	}

	/* Theme controller --> End */


	//*****
	//data setting

	var demo_type = jQuery.cookie('demo_type');
	var demo_layout = jQuery.cookie('demo_layout');
	var demo_pattern = jQuery.cookie('demo_pattern');
	jQuery('#theme-layout select').val(demo_layout).trigger('change');
	jQuery('#theme-type select').val(demo_type).trigger('change');
	if (!demo_pattern) {
		demo_pattern = 'pattern-3';
	}
	if (demo_pattern !== null && demo_pattern.length > 0) {
		jQuery('li.' + demo_pattern + ' a').trigger('click');
	}

	var pattern_class = jQuery.cookie('demo_pattern');
	if (!pattern_class) {
		pattern_class = 'pattern-3';
	}
	jQuery.cookie('demo_pattern', pattern_class);
	changeBodyClass(pattern_class, bg_classes);
	background_block_layout.find('.active').removeClass('active');
	jQuery('a[href=' + pattern_class + ']').parent().addClass('active');
	//***
	var style_css_file_uri = jQuery.cookie('style_css_file_uri');
	var styles_links = jQuery("#theme-color ul li a");
	jQuery.each(styles_links, function(index, value) {
		if (jQuery(value).attr('href') === style_css_file_uri) {
			jQuery(value).parent().addClass('active');
			return false;
		}
	});


});
/* ---------------------------------------------------- */
/*	jQuery Cookie
 /* ---------------------------------------------------- */

jQuery.cookie = function(name, value) {
	if (value !== undefined) {
		document.cookie = name + "=" + value + ";path=/;";
	} else {
		var value = null;
		switch (name) {
			case 'demo_type':
				value = document.cookie.replace(/(?:(?:^|.*;\s*)demo_type\s*\=\s*([^;]*).*$)|^.*$/, "$1");
				break;
			case 'demo_layout':
				value = document.cookie.replace(/(?:(?:^|.*;\s*)demo_layout\s*\=\s*([^;]*).*$)|^.*$/, "$1");
				break;
			case 'demo_pattern':
				value = document.cookie.replace(/(?:(?:^|.*;\s*)demo_pattern\s*\=\s*([^;]*).*$)|^.*$/, "$1");
				break;
			case 'style_css_file_uri':
				value = document.cookie.replace(/(?:(?:^|.*;\s*)style_css_file_uri\s*\=\s*([^;]*).*$)|^.*$/, "$1");
				break;
		}
		return value;
	}

};

/* end jQuery Cookie */
