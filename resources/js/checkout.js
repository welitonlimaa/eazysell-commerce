const setCartProducts = () => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const total = cart.reduce((acc, curr) => acc + (curr.price * curr.quantity), 0);
  const finalPrice = (total + 4.99);

  const input = document.getElementById('total_price');
  input.value = finalPrice;

  const tag = document.getElementById('total_price-tag');

  tag.textContent = finalPrice.toLocaleString('en-US', { style: 'currency', currency: 'USD' }) + " USD";

};

document.addEventListener('DOMContentLoaded', function() {
  setCartProducts();
});