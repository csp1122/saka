<?php
function nasa_hfe_exit_intent_popup() {
    $imgs_url = elessi_import_upload('/elementor/wp-content/uploads/2024/03/pop-up-intent.jpg', '0', array(
        'post_title' => 'exit-popup-intent',
        'post_name' => 'Exit popup intent',
    ));
    $imgs_url_src = $imgs_url ? wp_get_attachment_image_url($imgs_url, 'full') : 'https://via.placeholder.com/500x500?text=500x500';
    
    return array(
        'post' => array(
            'post_title' => 'HFE Exit Intent Popup',
            'post_name' => 'hfe-exit-intent-popup'
        ),
        
        'post_meta' => array(
            '_elementor_data' => '[{"id":"3d21b508","elType":"section","settings":{"layout":"full_width","structure":"20"},"elements":[{"id":"2d8b1377","elType":"column","settings":{"_column_size":50,"_inline_size":null,"content_position":"center","align":"center","background_background":"classic","background_image":{"id":' . $imgs_url . ',"url":' . json_encode($imgs_url_src) . '},"background_position":"center center","background_repeat":"no-repeat","background_size":"cover"},"elements":[{"id":"4de7e7a0","elType":"widget","settings":{"editor":"<div class=\"fs-30 tablet-fs-25 mobile-fs-25 margin-top-10 nasa-bold\" style=\"line-height: 1.2; color: #fff;\">Wait! before you leave...<\/div>\n<div class=\"fs-16 mobile-fs-14 margin-top-30\" style=\"color: #fff; line-height: 1.4;\">Get 30% off for your first order<\/div>\n<a class=\"button margin-top-30 nasa-tip nasa-tip-right nasa-copy-to-clipboard outline-white small fs-16\" style=\"text-transform: capitalize; background-color: #fff; border-color: #fff; color: #000; height: 40px;\" tabindex=\"0\"><span class=\"ns-copy\" title=\"Copy to clipboard sussces\">CODE30OFF<\/span><span class=\"nasa-tip-content\" style=\"letter-spacing: 0;\">Copy to clipboard<\/span><\/a>\n<div class=\"margin-top-30 fs-16 mobile-fs-14\" style=\"color: #fff; line-height: 1.4;\">Use above code to get 30% off for your first order when checkout<\/div>","_css_classes":"text-center padding-left-20 padding-right-20 mobile-padding-top-50 mobile-padding-bottom-50"},"elements":[],"widgetType":"text-editor"},{"id":"582dde66","elType":"widget","settings":{"text":"Shop Now<span class=\"fs-20 margin-left-5\">\u2192<\/span>","align":"center","background_color":"#6EC1E400","hover_color":"#555555","button_background_hover_color":"#FFFFFF","button_hover_border_color":"#FFFFFF","border_border":"solid","border_width":{"unit":"px","top":"2","right":"2","bottom":"2","left":"2","isLinked":true},"border_color":"#FFFFFF","border_radius":{"unit":"px","top":"30","right":"30","bottom":"30","left":"30","isLinked":true},"text_padding":{"unit":"px","top":"6","right":"20","bottom":"8","left":"20","isLinked":false},"_css_classes":"nasa-bold margin-top-30 margin-bottom-30","__globals__":{"background_color":"","button_background_hover_color":"","hover_color":"","button_hover_border_color":"","border_color":""}},"elements":[],"widgetType":"button"}],"isInner":false},{"id":"687e483f","elType":"column","settings":{"_column_size":50,"_inline_size":null,"css_classes":"padding-left-20 padding-right-20 padding-top-20 padding-bottom-20"},"elements":[{"id":"63c61b9a","elType":"widget","settings":{"title":"<span style=\"font-size:100%;\">Recommended Products<\/span>","header_size":"h4","title_color":"#333333","typography_typography":"custom","_margin":{"unit":"px","top":"0","right":"0","bottom":"0","left":"0","isLinked":false},"_margin_mobile":{"unit":"px","top":"0","right":"0","bottom":"5","left":"0","isLinked":false},"typography_font_size":{"unit":"px","size":24,"sizes":[]},"typography_font_size_mobile":{"unit":"px","size":22,"sizes":[]},"align":"left","text_stroke_text_stroke_type":"yes","text_stroke_text_stroke":{"unit":"px","size":0,"sizes":[]},"_padding":{"unit":"px","top":"0","right":"0","bottom":"15","left":"0","isLinked":false},"_border_border":"solid","_border_width":{"unit":"px","top":"0","right":"0","bottom":"1","left":"0","isLinked":false},"_border_color":"#D8D8D8","__globals__":{"_border_color":""}},"elements":[],"widgetType":"heading"},{"id":"39d7b34d","elType":"widget","settings":{"style":"list","number":3,"columns_number":"1","columns_number_tablet":"1","columns_number_small":"1","columns_number_small_slider":"1"},"elements":[],"widgetType":"nasa-products"}],"isInner":false}],"isInner":false}]',
            '_elementor_css' => 'a:6:{s:4:"time";i:1711522527;s:5:"fonts";a:0:{}s:5:"icons";a:1:{i:0;s:0:"";}s:20:"dynamic_elements_ids";a:0:{}s:6:"status";s:4:"file";i:0;s:0:"";}',
            // 'ehf_template_type' => 'custom'
        ),

        'css' => '.elementor-bc-flex-widget .elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377.elementor-column .elementor-widget-wrap{align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377.elementor-column.elementor-element[data-element_type="column"] > .elementor-widget-wrap.elementor-element-populated{align-content:center;align-items:center;}.elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377.elementor-column > .elementor-widget-wrap{justify-content:center;}.elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377:not(.elementor-motion-effects-element-type-background) > .elementor-widget-wrap, .elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377 > .elementor-widget-wrap > .elementor-motion-effects-container > .elementor-motion-effects-layer{background-image:url("' . $imgs_url_src . '");background-position:center center;background-repeat:no-repeat;background-size:cover;}.elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377 > .elementor-element-populated{transition:background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-2d8b1377 > .elementor-element-populated > .elementor-background-overlay{transition:background 0.3s, border-radius 0.3s, opacity 0.3s;}.elementor-[inserted_id] .elementor-element.elementor-element-582dde66 .elementor-button{background-color:#6EC1E400;border-style:solid;border-width:2px 2px 2px 2px;border-color:#FFFFFF;border-radius:30px 30px 30px 30px;padding:6px 20px 8px 20px;}.elementor-[inserted_id] .elementor-element.elementor-element-582dde66 .elementor-button:hover, .elementor-[inserted_id] .elementor-element.elementor-element-582dde66 .elementor-button:focus{color:#555555;background-color:#FFFFFF;border-color:#FFFFFF;}.elementor-[inserted_id] .elementor-element.elementor-element-582dde66 .elementor-button:hover svg, .elementor-[inserted_id] .elementor-element.elementor-element-582dde66 .elementor-button:focus svg{fill:#555555;}.elementor-[inserted_id] .elementor-element.elementor-element-63c61b9a{text-align:left;}.elementor-[inserted_id] .elementor-element.elementor-element-63c61b9a .elementor-heading-title{color:#333333;font-size:24px;-webkit-text-stroke-width:0px;stroke-width:0px;-webkit-text-stroke-color:#000;stroke:#000;}.elementor-[inserted_id] .elementor-element.elementor-element-63c61b9a > .elementor-widget-container{margin:0px 0px 0px 0px;padding:0px 0px 15px 0px;border-style:solid;border-width:0px 0px 1px 0px;border-color:#D8D8D8;}@media(max-width:767px){.elementor-[inserted_id] .elementor-element.elementor-element-63c61b9a .elementor-heading-title{font-size:22px;}.elementor-[inserted_id] .elementor-element.elementor-element-63c61b9a > .elementor-widget-container{margin:0px 0px 5px 0px;}}',
    );
}
