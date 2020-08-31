
function makeToast(message, level = 'success', title = '<i class="fa fa-check"></i>Success') {
    $("#notifyToast").removeClass(["bg-info", "bg-warning", "bg-danger", "bg-primary", "d-none"])
    const levels = {
        "success": {
            icon: '<i class="fa fa-check-circle fa-2x fa-fw"></i>',
            background: 'bg-info',
            title: "Success",
            textColor: "text-white"
        },
        "warning": {
            icon: '<i class="fa fa-bell fa-2x fa-fw"></i>',
            background: 'bg-warning',
            title: "Warning",
            textColor: "text-danger"
        },
        "error": {
            icon: '<i class="fa fa-times-circle fa-2x fa-fw"></i>',
            background: 'bg-danger',
            title: "Error",
            textColor: "text-white"
        },
        "info": {
            icon: '<i class="fa fa-info-circle fa-2x fa-fw"></i>',
            background: 'bg-primary',
            title: "Info",
            textColor: "text-white"
        }
    }
    $(".toast-title").html(levels[level].title);
    $(".toast-body").addClass(levels[level].textColor);
    $(".toast-body").html(levels[level].icon + message);
    $("#notifyToast").addClass(levels[level].background);
    $('#notifyToast').toast('show');
}

const addToCart = (id, quantity = 1, buy = false) => {
    $.post('/cart', {
            id: id,
            quantity: quantity
        },
        (result) => {
            console.log(result)
            if (result.success) {
                let cartLength = parseInt($(".cart").text());
                $(".cart").text(result.cart)
                if (buy)
                    window.location = '/cart';
                makeToast("Item added to cart");
            } else makeToast("Item already in cart", "info");
        })
}

//mobile searchbar toggle
const toggleSearchBar = () => {
    $(".searchbar-mobile").toggleClass("d-none");
}

const getCart = async function () {
    let cart = await localStorage.getItem("cart");
    if (cart) {
        cart = JSON.parse(cart);
        $(".cart-count").text(Object.keys(cart).length)
    }
}

$(() => {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    getCart();

    var count = -1;
    $(".top-stores-indicators").on("click", (e) => {
        var target = $(e.currentTarget);
        var m = parseInt($(".top-stores .col-6:first").css("margin-left"))
        var margin = $(".top-stores .col-6").width() + 30
        if (count === -1) count = parseInt(12 / parseInt($(".top-stores").width() / margin))
        if (target.hasClass("left")) {
            if (m < 0) {
                $(".top-stores .col-6:first").css("margin-left", (m + margin) + 'px');
                $(".top-stores-indicators.right").show();
                ++count;
            }
            if (count === parseInt(12 / parseInt($(".top-stores").width() / margin))) {
                $(".top-stores-indicators.left").hide();
            }
        } else {
            if (count) {
                $(".top-stores .col-6:first").css("margin-left", (m - margin) + 'px');
                $(".top-stores-indicators.left").show();
                --count;
            }
            if (!count) {
                $(".top-stores-indicators.right").hide();
            }
        }
    })

    // Product Details Page Scripts
    $(".btn-quantity").on("click", (e) => {
        var target = $(e.currentTarget);
        let quantity = $("[name='quantity']").val();
        let action = target.data("action");
        let price = $("[name='price']").val();

        if (action === "increase") {
            $("[name='quantity']").val(++quantity);
            $("[name='price']").val(price * quantity);
            $(".price").text(price * quantity);
        } else {
            if (quantity > 1) {
                $("[name='price']").val(price / quantity);
                $(".price").text(price / quantity);
                $("[name='quantity']").val(--quantity);
            }
        }
    })

    $("#addToCart").on('click', (e) => {
        e.preventDefault();
        addToCart();
    })

    // Cart Page Scripts
    if ($(".cart-items")) {
        let cart = localStorage.getItem("cart")
        if (cart) {
            cart = JSON.parse(cart);
            let cartItems = "";
            let totalPrice = 0;
            let totalQuantity = 0;
            for (var item in cart) {
                cartItems += '<tr class="text-center">'
                cartItems += '<td class="product-remove"><a href="#"><span class="ion-ios-close"></span></a></td>'
                cartItems += '<td class="image-prod">'
                cartItems += '<div class="img" style="background-image:url(storage/' + cart[item].thumbnail + ');">'
                cartItems += '</div></td>'
                cartItems += '<td class="product-name">'
                cartItems += '<h3>' + cart[item].name + '</h3>'
                cartItems += '<p>' + cart[item].description.substring(0, 40) + '...</p></td>'
                cartItems += '<td class="price">&dollar;' + cart[item].price + '</td>'
                cartItems += '<td class="quantity">'
                cartItems += '<div class="input-group mb-3">'
                cartItems += '<input type="text" name="quantity" class="quantity form-control input-number" value="' + cart[item].quantity + '" min="1" max="100">'
                cartItems += '</div></td>'
                cartItems += '<td class="total">&dollar;' + cart[item].price + '</td></tr>'
                /*
                                cartItems += '<div class="card p-3 mb-2 border-0 total-price '+item+'" style="position: relative"">'
                                cartItems += '<div class="row d-flex align-items-center">'
                                cartItems += '<div class="col-2 text-center">'
                                cartItems += '<img srcset="https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_500/'+item+'.png 500w,'
                                cartItems += 'https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1000/'+item+'.png '
                                cartItems += '1000w,https://res.cloudinary.com/pieshop/f_auto,dpr_auto,q_auto:eco/w_1500/'+item+'.png '
                                cartItems += '1500w" sizes="(min-width: 0px) and (max-width: 420px) calc(100vw - 60px),(min-width: 420px) '
                                cartItems += 'and (max-width: 750px) calc((100vw - 90px) / 2),(min-width: 750px) and (max-width: 1200px) '
                                cartItems += 'calc((100vw - 120px) / 3),(min-width: 1200px) calc((100vw - 150px) / 4)" class="img-fluid" style="max-height: 100px"></div>'
                                cartItems += '<div class="col-5">' + cart[item].name + '</div>'
                                cartItems += '<div class="col-2"><input type="text" id="quantity" name="quantity" class="quantity form-control input-number"'
                                cartItems += 'value="'+cart[item].quantity+'" min="1" max="100" style="font-size: .9em; font-weight: 100"></div>'
                                cartItems += '<div class="col-3">&dollar;' + cart[item].price + '</div>'
                                cartItems += '</div>'
                                cartItems += '<button type="button" class="btn btn-danger btn-sm air rounded-circle '
                                cartItems += 'btn-action" data-action="delete" data-target="'+item+'" style="position: absolute; '
                                cartItems += 'top: 30%; right: 20px;">'
                                cartItems += '<i class="fa fa-times-circle"></i></button></div>'
                */
                totalPrice += parseFloat(cart[item].price);
                totalQuantity += parseInt(cart[item].quantity);
            }
            /*
                        cartItems += '<div class="card p-3 mb-2 border-0 bg-primary total-price" style="position: relative"">'
                        cartItems += '<div class="row d-flex align-items-center text-white">'
                        cartItems += '<div class="col-2"><strong>Total</strong></div>'
                        cartItems += '<div class="col-5"></div>'
                        cartItems += '<div class="col-2"><strong id="totalQuantity">' + totalQuantity + '</strong></div>'
                        cartItems += '<div class="col-3"><strong>&dollar;<span id="totalPrice">' + totalPrice.toFixed(2) + '<span></strong></div>'
                        cartItems += '</div></div>'
            */
            $(".cart-items table tbody").append(cartItems);
        }
    }

    $("input[name='paymentMethod']").on("click", () => {
        var method = $("input[name='paymentMethod']:checked").val();
        $(".payment-method-details").hide()
        if (method === 'card') {
            $(".creditCard").show();
            $(".mobile").hide();
        } else {
            $('.mobile').show();
            $('.cardCredit').hide();
        }
    })

    $(document).on('click', ".btn-action", (e) => {
        e.preventDefault();
        var btn = $(e.currentTarget);
        var target = btn.data("target");
        var action = btn.data("action");
        var quantity = 1;
        if ($("input[name='quantity']")) {
            quantity = $("input[name='quantity']").val();
        }

        switch (action) {
            case 'delete':
                var cart = localStorage.getItem("cart");
                cart = JSON.parse(cart);
                var item = cart[key];
                var totalPrice = parseFloat($("#totalPrice").text());
                var totalQuantity = parseInt($("#totalQuantity").text());
                totalPrice = totalPrice - item.price;
                totalQuantity = totalQuantity - item.quantity;
                delete cart[key];
                $(".cart").text(Object.keys(cart).length);
                localStorage.setItem("cart", JSON.stringify(cart));
                $("." + key).remove();
                $("#totalPrice").text(totalPrice.toFixed(2));
                $("#totalQuantity").text(totalQuantity);
                makeToast("Item removed from cart", "success");
                break;

            case 'addToCart':
                addToCart(target, quantity);
                break
            case 'buy':
                addToCart(target, quantity, true);
                break
        }
    })

    // Store Products Page Scripts
    $(".product-check").on('change', (e) => {
        var target = $(e.target);
        var field = target.data('target');
        var value = target.val();
        var search = location.search;
        var t = {};
        if (localStorage.hasOwnProperty('search')) {
            t = JSON.parse(localStorage.getItem('search'))
        }
        if (target.is(':checked')) {
            if (search) {
                var items = search.split('&');
                items[0]
                if (items[0].startsWith('?page')) {
                    items.shift();
                }
                if (items.length > 0) {
                    for (var i = 0; i < items.length; i++) {
                        var v = items[i].split('=');
                        if (t.hasOwnProperty(v[0])) {
                            t[v[0]] = [...v[1].split(',')]
                        } else {
                            t[v[0]] = v[1].split(',');
                        }

                        if (t.hasOwnProperty(field)) {
                            if (!t[field].includes(value)) {
                                t[field].push(value)
                            }
                        } else {
                            t[field] = [value]
                        }

                    }
                } else {
                    if (Object.keys(t).length) {
                        if (Object.keys(t).includes(field)) {
                            if (!t[field].includes(value)) {
                                t[field].push(value)
                            }
                        } else {
                            t[field] = [value];
                        }
                    } else {

                        t[field] = [value];
                    }
                }


                //search += `&${field}=${value}`;
                //location.search = search;

            } else {
                t[field] = [value];
                //search = `?${field}=${value}`;
                //location.search = search;
            }
            localStorage.setItem('search', JSON.stringify(t))
            console.log(t);
        } else {
            if (search) {
                var items = search.split('&');
                if (items[0].startsWith('?page')) {
                    items.shift();
                }

                if (items.length > 0) {
                    for (var i = 0; i < items.length; i++) {
                        var v = items[i].split("=")
                        console.log(v)
                    }
                }

                if (Object.keys(t).length) {
                    if (Object.keys(t).includes(field)) {
                        if (t[field].includes(value)) {
                            t[field].splice(t[field].indexOf(value), 1);
                            if (!t[field].length) delete t[field];
                        }
                    }
                }

                //search += `&${field}=${value}`;
                //location.search = search;
                localStorage.setItem('search', JSON.stringify(t))
            } else {

                //search = `?${field}=${value}`;
                //location.search = search;
            }

            console.log(t);
        }
        var s = "";
        if (search) {
            s += location.search.split('&')[0];
            for (var k in t) {
                s += `&${k}=${t[k].join(',')}`;
            }
        } else {
            for (var k in t) {
                if (s) {
                    s += `&${k}=${t[k].join(',')}`;
                } else {
                    s += `?${k}=${t[k].join(',')}`;
                }
            }
        }
        //location.search = s;
    })

})
