jQuery(document).ready(function () {
    //header form
    jQuery(document).on('click', '.contacts-content__form_btn', function () {
        var name = jQuery('#contacts-content__form_name').val(),
            email = jQuery('#contacts-content__form_email').val(),
            site = jQuery('#contacts-content__form_site').val(),
            phone = jQuery('#contacts-content__form_phone').val(),
            message = jQuery('#contacts-content__form_text').val();

        jQuery.ajax({
            url: myajax.url,
            type: "POST",
            data: "action=contact&name=" + name + "&site=" + site + "&email=" + email + "&phone=" + phone + "&message=" + message,
            success: function (data) {
                jQuery('#contacts-content__form_name').val('');
                jQuery('#contacts-content__form_email').val('');
                jQuery('#contacts-content__form_phone').val('');
                jQuery('#contacts-content__form_text').val('');
                jQuery('#contacts-content__form_site').val('');
            }
        });
        return false;
    });
});