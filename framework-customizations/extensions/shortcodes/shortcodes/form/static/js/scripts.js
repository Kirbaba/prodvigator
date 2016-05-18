jQuery(document).ready(function () {
    //header form
    jQuery(document).on('click', '.inspection_btn', function () {
        var name = jQuery('.inspection_name').val(),
            site = jQuery('.inspection_site').val(),
            email = jQuery('.inspection_email').val();
       
        jQuery.ajax({
            url: myajax.url,
            type: "POST",
            data: "action=form&name=" + name + "&site=" + site + "&email=" + email,
            success: function (data) {
                jQuery('.inspection_name').val('');
                jQuery('.inspection_site').val('');
                jQuery('.inspection_email').val('');
            }
        });
        return false;
    });
});