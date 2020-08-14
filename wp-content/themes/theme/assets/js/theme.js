$(document).ready(function(){
	

	// var didScroll;
	// var lastScrollTop = 0;
	// var delta = 5;
	// var navbarHeight = $('header').outerHeight();

	// $(window).scroll(function(event){
	//     didScroll = true;
	// });

	// setInterval(function() {
	//     if (didScroll) {
	//         hasScrolled();
	//         didScroll = false;
	//     }
	// }, 250);

	// function hasScrolled() {
	//     var st = $(this).scrollTop();
	    
	//     if(Math.abs(lastScrollTop - st) <= delta)
	//         return;
	//     if (st > lastScrollTop && st > navbarHeight){
	//         $('.header-row').addClass('nav-up');
	//     } else {
	//         if(st + $(window).height() < $(document).height()) {
	//             $('.header-row').removeClass('nav-up');
	//         }
	//     }
	    
	//     lastScrollTop = st;
	// }
});
jQuery(document).ready(function() {
    var menu_title = '<i class="fa fa-bars"></i>';
    var arrow_add ='<span class="extra_menu"><i class="fa fa-arrow-left"> </i></span>';
    var m_mobile = '<div id="menu_mobile"><div class="menu_header">';
    m_mobile += '<div class="menu_title">' + menu_title + "</div>";
    m_mobile += '<div class="menu_close"><i class="fa fa-times" ></i></div>';
    m_mobile += "</div>";
    m_mobile +='<div class="menu_inner"></div><div class="for_phone_and_res"></div></div><div class="menu_overlay"></div>';
    var m_search = '<form action="" class="nav-right--form text--center my--20">';

    m_search += '<input type="text" class="nav-right__search p--12" placeholder="Tìm kiếm" name="search">';
    m_search += '<button type="submit" class="p--12 mx---5"><i class="fa fa-search"></i></button>';
    m_search += '</form>';
    m_search += '<div>';
    m_search += '<p class="p--btm--15"><span class="border--50 rotate--90 mx--15 nav-border-radius"><i class="fa fa-phone"></i></span> Hotline: <span class ="hotline-mobile"></span></p>';
    m_search += '<p class="p--btm--15">';
    m_search += '<span class="border--50 mx--15 nav-border-radius"><i class="fa fa-envelope border--50"></i></span> Mail: info@divaspa.com.vn';
    m_search += '</p></div>';
    m_search += '<div class="nav-right__item text--center">';
    m_search += '<p class="title--item p--btm--15"> ';
    m_search += '</p>';
    m_search += '<p class="p--btm--15">';
    m_search += '<span class = "fanpage_fix"></span>';
    m_search += '<span class = "youtube_fix"></span>';

    m_search += ' </p></div></div>';



    jQuery.fn.va_menu = function() {
        var menu_clone = jQuery(this);
        this.find("li").each(function(index, el) {
            jQuery(this).attr("id", "va_item" + index);
        });
        if (this.find(".extra_menu").length < 0) {
            this.find("a").each(function(index, el) {
                if (jQuery(this).next().length > 0) {
                    var new_t = jQuery(this).text();
                    jQuery(this).html(new_t + "" + arrow_add);
                }
            });
        }
        jQuery("html body").append(m_mobile);
        jQuery("#menu_mobile .menu_inner").html(this.clone());
        jQuery("#menu_mobile").on("click", ".extra_menu", function(event) {
            event.preventDefault();
            var dropdown = jQuery(this)
                .parent()
                .next()
                .clone();
            var data_id = jQuery(this)
                .parent()
                .parent()
                .attr("id");
            jQuery(".menu_title").html(
                '<span class="back_to_last_menu" data_id="' +
                data_id +
                '"> <i class="fa fa-arrow-left" ></i> ' +
                jQuery("#" + data_id + ">a").html() +
                "</span>"
            );
            jQuery("#menu_mobile .menu_inner").animate(
                { left: "-100%" },
                0,
                function() {
                    jQuery("#menu_mobile .menu_inner").html(dropdown);
                    jQuery("#menu_mobile .menu_inner").animate({ left: "0" }, 500);
                }
            );
            return false;
        });
        jQuery("#menu_mobile").on("click", ".back_to_last_menu", function(event) {
            event.preventDefault();
            var data_id = jQuery(this).attr("data_id");
            var dropdown = jQuery("#" + data_id)
                .parent("ul")
                .clone();
            if (
                jQuery("#" + data_id)
                    .parent()
                    .parent()
                    .parent("ul").length > 0
            ) {
                var did = jQuery("#" + data_id)
                    .parent("ul")
                    .parent()
                    .attr("id");
                jQuery(".menu_title").html(
                    '<span class="back_to_last_menu" data_id="' +
                    did +
                    '"><i class="fa fa-arrow-left" ></i> ' +
                    jQuery("#" + did + ">a").html() +
                    "</span>"
                );
            } else {
                jQuery(".menu_title").html(menu_title);
            }
            jQuery("#menu_mobile .menu_inner").animate(
                { left: "-100%" },
                0,
                function() {
                    jQuery("#menu_mobile .menu_inner").html(dropdown);
                    jQuery("#menu_mobile .menu_inner").animate({ left: "0" }, 500);
                }
            );
            return false;
        });
        jQuery("#menu_mobile").on("click", ".menu_close", function(event) {
            event.preventDefault();
            jQuery("#menu_mobile").animate({ left: "-100%" }, 500, function() {
                jQuery("#menu_mobile .menu_inner").html(menu_clone.clone());
                jQuery(".menu_title").html(menu_title);
                jQuery("html").removeClass("menu_open");
                jQuery(".menu_overlay").removeClass("hidden_menu");
            });
        });
        jQuery(".navbar-toggle").on("click", function(event) {
            event.preventDefault();
            jQuery("html").addClass("menu_open");
            jQuery("#menu_mobile").animate({ left: "0%" }, 500);
            jQuery(".menu_overlay").addClass("hidden_menu");
            return false;
        });
        jQuery(".menu_overlay").on("click", "", function(event) {
            event.preventDefault();
            jQuery(".menu_overlay").addClass("hidden_menu");
            jQuery("#menu_mobile .menu_close").click();
        });
        jQuery("html body .for_phone_and_res").append(m_search);
    };
    jQuery(".webexp24h_menu").va_menu();
});