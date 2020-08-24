"use strict";

// Class definition
var KTAppUserAdd = function () {
	// Base elements
	var formEl;
	var avatar;

    // Private functions
    var getCart = ()=> {
        var cart = localStorage.getItem('cart');

        if (cart) {
            cart = JSON.parse(cart);
            var tosend = {};
            for(var i in cart){
                tosend[i] = cart[i].quantity
            }

            fetch('/checkout',
                {method: 'POST',
                 body: JSON.stringify(tosend)
            })
            .then((response) => {return response.json()})
            .catch((error) => console.error(error));
        }

    }
/*
    var initialize = ()=> {
        var btn = document.getElementById("buy");
        btn.onclick = function(e){
            e.preventDefault();
            getCart();
        }
    }

*/

	return {
		// public functions
		init: function() {
            //initialize();
		}
    };

}();

window.addEventListener('load', () => {
    //KTAppUserAdd.init();

    let terms = document.getElementById("termsSwitch");
    terms.onchange = function(e){
        let checkoutBtn = document.getElementById("checkoutButton");
        if (e.target.checked){
            checkoutBtn.classList.remove("disabled");
            checkoutBtn.removeAttribute('disabled');
            checkoutBtn.style.cursor = 'pointer';

        }
        else {
            checkoutBtn.classList.add("disabled");
            checkoutBtn.setAttribute("disabled", "disabled");
            checkoutBtn.style.cursor = 'not-allowed'
        }
    }
})


