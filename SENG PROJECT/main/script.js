let cart =
JSON.parse(localStorage.getItem("cart"))

let totalprice = 0

|| [];
function addToCart(name, price){
    cart.push({name, price});
    localStorage.setItem("cart", JSON.stringify(cart));
    updateCartCount();
}

function updateCartCount() {
    document.getElementById("cart-count").textContent = cart.length;
}

function loadCart() {
    let cartItems = document.getElementById("cart-items");
    let cartTotal = document.getElementById("cart-total");
    let total = 0;

    cartItems.innerHTML = "";
    cart.forEach((item, index) => {
        total += item.price;
        cartItems.innerHTML += `<li>${item.name} - ₦${item.price.toFixed(2)} <button onclick="removeFromCart(${index})">Remove</button></li>`    });

    cartTotal.textContent = total.toFixed(2);
    totalprice = total
}
function clearCart(){
    cart = [];
    localStorage.setItem("cart", JSON.stringify(cart));
    localCart();
}

if(document.getElementById("cart-items")){
    loadCart();
}else{
    updateCartCount();
}
