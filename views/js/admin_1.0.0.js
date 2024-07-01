/**
 * 2024 Unzer GmbH
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Unzerpayment to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    patworx multimedia GmbH <service@patworx.de>
 *  @copyright 2024 Unzer GmbH / patworx multimedia GmbH
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 */

$(document).ready(function() {

    setTimeout(function () {
        if ($("#unzer_configuration").length > 0) {
            $(".tab-pane .panel").each(function () {
                if ($.trim($(this).text()) == '') {
                    $(this).hide();
                }
            });
        }
    }, 1500);

});
