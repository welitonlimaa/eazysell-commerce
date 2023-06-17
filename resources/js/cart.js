const getId = (target) => {
  const parent = target.parentNode;
  const str = parent.id;
  const prefix = 'quantity_card-';
  const numberStr = str.slice(prefix.length);
  const id = parseInt(numberStr);

  return id;
}

const updateRender = () => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const cartContainer = document.getElementById('products_cart-container');
  cartContainer.innerHTML = '';

  setProductsToCart(cart);
  setTotalPrice(cart);
};

const incrementQuantity = ({ target }) => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const productId = getId(target);
  const productIndex = cart.findIndex(item => item.id === productId);

  if (productIndex !== -1) {
    cart[productIndex].quantity += 1;
    localStorage.setItem('cart', JSON.stringify(cart));
  } 

  updateRender();
}

const decrementQuantity = ({ target }) => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const productId = getId(target);
  const productIndex = cart.findIndex(item => item.id === productId);

  if (productIndex !== -1) {
    if (cart[productIndex].quantity > 1) {
      cart[productIndex].quantity -= 1;
    } else {
      cart.splice(productIndex, 1);
    }

    localStorage.setItem('cart', JSON.stringify(cart));
  }
  updateRender();
}

const productCardToCart = (product) => {
  const card = document.createElement('div');
  card.id = `cart_card-${product.id}`;
  card.className = 'justify-between mb-6 rounded-lg bg-white p-6 shadow-md sm:flex sm:justify-start';

  const image = document.createElement('img');
  image.src = product.image;
  image.alt = 'product-image';
  image.className = 'w-20 rounded-lg sm:w-40';
  card.appendChild(image);

  const contentContainer = document.createElement('div');
  contentContainer.className = 'sm:ml-4 sm:flex sm:w-full sm:justify-between';

  const contentLeft = document.createElement('div');
  contentLeft.className = 'mt-5 sm:mt-0';
  contentContainer.appendChild(contentLeft);

  const productName = document.createElement('h2');
  productName.className = 'text-lg font-bold';
  productName.textContent = product.name;
  contentLeft.appendChild(productName);

  const productId = document.createElement('span');
  productId.className = 'hidden';
  productId.textContent = product.id;
  contentLeft.appendChild(productId);

  const contentRight = document.createElement('div');
  contentRight.className = 'mt-4 flex justify-between sm:space-y-6 sm:mt-0 sm:block sm:space-x-6';
  contentContainer.appendChild(contentRight);

  const quantityContainer = document.createElement('div');
  quantityContainer.id = `quantity_card-${product.id}`;
  quantityContainer.className = 'flex items-center border-gray-100';
  contentRight.appendChild(quantityContainer);

  const minusButton = document.createElement('span');
  minusButton.className = 'cursor-pointer w-8 rounded-l bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50';
  minusButton.textContent = '-';
  minusButton.addEventListener('click', decrementQuantity);
  quantityContainer.appendChild(minusButton);

  const quantityInput = document.createElement('input');
  quantityInput.className = 'h-8 w-12 border bg-white text-center text-xs outline-none';
  quantityInput.type = 'number';
  quantityInput.value = product.quantity;
  quantityContainer.appendChild(quantityInput);

  const plusButton = document.createElement('span');
  plusButton.className = 'cursor-pointer w-8 rounded-r bg-gray-100 py-1 px-3 duration-100 hover:bg-blue-500 hover:text-blue-50';
  plusButton.textContent = '+';
  plusButton.addEventListener('click', incrementQuantity);
  quantityContainer.appendChild(plusButton);

  const priceContainer = document.createElement('div');
  priceContainer.className = 'flex items-center space-x-4';
  contentRight.appendChild(priceContainer);

  const productPrice = document.createElement('p');
  productPrice.className = 'text-sm';
  productPrice.textContent = product.price.toLocaleString('en-US', { style: 'currency', currency: 'USD' });
  priceContainer.appendChild(productPrice);
  card.appendChild(contentContainer);

  return card;
};

const setProductsToCart = (cart) => {
  const cartContainer = document.getElementById('products_cart-container');
  cart.forEach((product) => {
    const card = productCardToCart(product);
    cartContainer.appendChild(card);
  });
};

const setTotalPrice = (cart) => {
  const total = cart.reduce((acc, curr) => acc + (curr.price * curr.quantity), 0);
  const tagTotal = document.getElementById('total-price');
  tagTotal.textContent = total.toLocaleString('en-US', { style: 'currency', currency: 'USD' });

  const finalPrice = (total + 4.99).toLocaleString('en-US', { style: 'currency', currency: 'USD' });
  const tagFinalPrice = document.getElementById('final-price');
  tagFinalPrice.textContent = `${finalPrice} USD`;
}

document.addEventListener('DOMContentLoaded', function() {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  setProductsToCart(cart);
  setTotalPrice(cart);
});