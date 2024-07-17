<script src="<?php echo e(asset('themes/frontend/watches/swiper/swiper-bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('themes/frontend/watches/fontawesome/fontawesome.js')); ?>"></script>
<script src="<?php echo e(asset('themes/frontend/watches/js/index.js')); ?>"></script>
<script src="<?php echo e(asset('themes/frontend/watches/js/skrollr.min.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    var s = skrollr.init({
        smoothScrolling: true,
        mobileCheck: function() {
            return false;
        }
    });
    const swiperBanner = new Swiper(".slider-content", {
        loop: true,
        speed: 1000,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
    });
    var swiper = new Swiper(".introduce", {
    effect: "cards",
    grabCursor: true,
    autoplay: {
        delay: 3000, // Tăng thời gian giữa các slide
        disableOnInteraction: false,
    },
    speed: 800, // Thời gian chuyển đổi giữa các slide
});
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });
    var swiper = new Swiper('.project-slide', {
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination-2",
            clickable: true,
            type: "progressbar",
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            340: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 50,
            },
        },
    });
    var swiper = new Swiper('.partner-slide', {
        slidesPerView: 1,
        pagination: {
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            375: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 50,
            },
        },
    });
    var swiper = new Swiper('.project-global', {
        slidesPerView: 1,
        pagination: {
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 5,
                spaceBetween: 40,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 50,
            },
        },
    });
    var swiper = new Swiper('.Swiperteam', {
        slidesPerView: 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 15,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 25,
            },
            1024: {
                slidesPerView: 4,
                spaceBetween: 25,
            },
        },
    });
    var swiper = new Swiper('.swiper-service', {
        slidesPerView: 1,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            320: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            576: {
                slidesPerView: 1,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
            1200: {
                slidesPerView: 3,
                spaceBetween: 30,
            },
        },
    });
    var swiper = new Swiper('.customer-talk-slide', {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 1000,
            disableOnInteraction: false,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
            1024: {
                slidesPerView: 3,
                spaceBetween: 20,
            },
        },
    });
    var swiper = new Swiper('.partner-customer-swipper', {
        slidesPerView: 1,
        pagination: {
            clickable: true,
        },
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        breakpoints: {
            375: {
                slidesPerView: 2,
                spaceBetween: 20,
            },
            640: {
                slidesPerView: 6,
                spaceBetween: 20,
            },
            768: {
                slidesPerView: 6,
                spaceBetween: 30,
            },
            1024: {
                slidesPerView: 6,
                spaceBetween: 40,
            },
        },
    });
    $('.play-video').click(function() {
        let parent = $(this).parents('.wrap-video');
        $(this).hide()
        parent.find('img').hide()
        parent.find('.video').show()
        var iframe = $("#youtube-video");
        var src = iframe.attr("src");
        if (src.indexOf("autoplay=1") == -1) {
            src += (src.indexOf("?") > -1 ? "&" : "?") + "autoplay=1";
        }
        iframe.attr("src", src);
    })

    $(function() {

        $("#form-booking").submit(function(e) {
            //  $(".form-process").show();
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(response) {
                    form[0].reset();
                    //  $(".form-process").hide();
                    alert(response.message);
                    location.reload();
                },
                error: function(response) {
                    //  $(".form-process").hide();
                    // Get errors
                    if (typeof response.responseJSON.errors !== 'undefined') {
                        var errors = response.responseJSON.errors;
                        // Foreach and show errors to html
                        var elementErrors = '';
                        $.each(errors, function(index, item) {
                            if (item === 'CSRF token mismatch.') {
                                item = "<?php echo app('translator')->get('CSRF token mismatch.'); ?>";
                            }
                            elementErrors += '<p>' + item + '</p>';
                        });
                        $(".form-result").html(elementErrors);
                    } else {
                        var errors = response.responseJSON.message;
                        if (errors === 'CSRF token mismatch.') {
                            $(".form-result").html("<?php echo app('translator')->get('CSRF token mismatch.'); ?>");
                        } else if (errors === 'The given data was invalid.') {
                            $(".form-result").html("<?php echo app('translator')->get('The given data was invalid.'); ?>");
                        } else {
                            $(".form-result").html(errors);
                        }
                    }
                }
            });
        });

        // Form ajax default
        $(".form_ajax").submit(function(e) {

            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            $.ajax({
                type: "POST",
                url: url,
                data: form.serialize(),
                success: function(response) {
                    form[0].reset();
                    alert(response.message);
                    location.reload();
                },
                error: function(response) {
                    // Get errors
                    console.log(response);
                    var errors = response.responseJSON.errors;
                    // Foreach and show errors to html
                    var elementErrors = '';
                    $.each(errors, function(index, item) {
                        if (item === 'CSRF token mismatch.') {
                            item = "<?php echo app('translator')->get('CSRF token mismatch.'); ?>";
                        }
                        elementErrors += '<p>' + item + '</p>';
                    });
                }
            });
        });

        // Add to cart
        $(document).on('click', '.add-to-cart', function(e) {
            e.preventDefault();
            let _root = $(this);
            let _html = _root.html();
            let _id = _root.attr("data-id");
            let _quantity = _root.attr("data-quantity") ?? $("#quantity").val();
            if (_id > 0) {
                _root.html("<?php echo app('translator')->get('Processing...'); ?>");
                var url = "<?php echo e(route('frontend.order.add_to_cart')); ?>";
                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        "_token": "<?php echo e(csrf_token()); ?>",
                        "id": _id,
                        "quantity": _quantity
                    },
                    success: function(data) {
                        _root.html(_html);
                        window.location.reload();
                    },
                    error: function(data) {
                        // Get errors
                        var errors = data.responseJSON.message;
                        alert(errors);
                        location.reload();
                    }
                });
            }
        });

        $(".update-cart").change(function(e) {
            e.preventDefault();
            var ele = $(this);
            var id = $(this).attr('data-id');
            var quantity = $(this).val();
            $.ajax({
                url: '<?php echo e(route('frontend.order.cart.update')); ?>',
                method: "PATCH",
                data: {
                    _token: '<?php echo e(csrf_token()); ?>',
                    id: id,
                    quantity: quantity
                },
                success: function(response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("<?php echo e(__('Are you sure want to remove?')); ?>")) {
                $.ajax({
                    url: '<?php echo e(route('frontend.order.cart.remove')); ?>',
                    method: "DELETE",
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: $(this).attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });
        $(".del-cart").click(function(e) {
            e.preventDefault();
            var ele = $(this);
            if (confirm("<?php echo e(__('Are you sure want to remove?')); ?>")) {
                $.ajax({
                    url: '<?php echo e(route('frontend.order.cart.remove')); ?>',
                    method: "DELETE",
                    data: {
                        _token: '<?php echo e(csrf_token()); ?>',
                        id: ele.attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }
                });
            }
        });

    });

    const filterArray = (array, fields, value) => {
        fields = Array.isArray(fields) ? fields : [fields];
        return array.filter((item) => fields.some((field) => item[field] === value));
    };
</script>

<?php if(isset($web_information->source_code->footer)): ?>
    <?php echo $web_information->source_code->footer; ?>

<?php endif; ?>
<?php /**PATH E:\xampp\htdocs\gbd\resources\views/frontend/panels/scripts.blade.php ENDPATH**/ ?>