<script src="https://code.jquery.com/jquery-1.12.4.js"></script>

<script src="<?php echo base_url() ?>plugins/daterangepicker/daterangepicker.js"></script>

<script>

    // var spinner = $('#loader');
    var baseUrl = "<?php echo base_url()?>";

    // $("body").append('<div class="loader"></div>');
    // console.log($(".bpt-overlay").length);

    const loadingWidget = {
        show: function () {
            // alert("came");
            $("#loader").addClass("loader");
        },
        hide: function () {
            $("#loader").removeClass("loader");
        },
    };


    (function ($) {
        "use strict";
        $(function () {

            const salesTransObj = {
                $btn_add: $("#btn_add"),
                $txt_gross_total: $("#gross_total"),
                $txt_total_qty: $("#total_qty"),
                $txt_tax_amt: $("#tax_amt"),
                $txt_total_discount: $("#total_discount"),
                $txt_net_total: $("#net_total"),
                $item_code: $("#item_code"),
                $item_qty: $("#item_qty"),
                $item_discount: $("#item_discount"),
                $table: $("#example1"),
                $grossTotal: 0,
                $qtyTotal: 0,
                $discountTotal: 0,
                $netTotal: 0,
                $spinner: $("#loader"),

                init: function () {
                    this.handleEvents();
                },
                handleEvents: function () {
                    const context = this;
                    this.$btn_add.on("click", function (e) {
                        // document.getElementById("loader").style.display = "block";
                        // $("#loader").css("display", "block");

                        e.preventDefault();
                        context.addNewTranRecord();
                    });
                },
                addNewTranRecord: function () {
                    this.getItemDetails();
                },
                getItemDetails: function () {
                    loadingWidget.show();
                    const context = this;
                    $.get(
                        baseUrl + "get_item_details?item_code="+context.$item_code.val(),
                        function (res) {
                            context.addNewRecord($.parseJSON(res));
                        }
                    ).fail(function (error) {
                        console.log("error", error);
                        loadingWidget.hide();
                    });
                },
                addNewRecord: function (data) {
                    var total = 0;
                    var qty = 1;
                    var discount = 0;
                    var totalAfterDiscount = 0;

                    if (this.$item_qty.val() > 0) {
                        total = data.selling_price * this.$item_qty.val();
                    } else {
                        total = data.selling_price;
                    }
                    this.$grossTotal += Number(total);

                    if (this.$item_discount.val() > 0) {
                        discount = (total * this.$item_discount.val() / 100);
                    }
                    totalAfterDiscount = total - discount;
                    this.$discountTotal += Number(discount);

                    if (this.$item_qty.val() > 0)
                        qty = this.$item_qty.val();
                    this.$qtyTotal += Number(qty);

                    this.$table.append(
                        "<tr>" +
                        "<td>" + data.item_code + "</td>" +
                        "<td>" + data.item_name + "</td>" +
                        "<td>" + data.sku_name + "</td>" +
                        "<td>" + data.selling_price + "</td>" +
                        "<td>" + data.unit_type + "</td>" +
                        "<td>" + qty + "</td>" +
                        "<td>" + totalAfterDiscount + "</td>" +
                        "<td><img src='../dist/img/trash16x16.png'/></td>" +
                        +"<tr>"
                    )

                    this.$txt_gross_total.val(this.$grossTotal);
                    this.$txt_total_qty.val(this.$qtyTotal);
                    this.$txt_total_discount.val(this.$discountTotal);
                    this.$txt_net_total.val(this.$grossTotal - this.$discountTotal);

                    loadingWidget.hide();
                }
            };
            salesTransObj.init();

        });

    })(jQuery);

    $('#loader').bind('ajaxStart', function () {
        $(this).show();
    }).bind('ajaxStop', function () {
        $(this).hide();
    });


</script>