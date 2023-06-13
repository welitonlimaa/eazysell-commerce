import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// ham menu

const ham = document.getElementById('ham-svg');
const x = document.getElementById('x-svg');
const navLinks = document.getElementById('nav-links');

ham.addEventListener('click', () => {
  ham.classList.add('hidden');
  x.classList.remove('hidden');
  navLinks.classList.remove('hidden');
});

x.addEventListener('click', () => {
  ham.classList.remove('hidden');
  x.classList.add('hidden');
  navLinks.classList.add('hidden');
});

// products container
const categories = JSON.parse(sessionStorage.getItem('categories'));
const products = JSON.parse(sessionStorage.getItem('products'));

const getProductData = (element) => {
  const childrens = element.children;
  console.log(element);
  const data = {};
  for (let i = 0; i < childrens.length; i++) {
    const children = childrens[i];

    if (children.classList.contains('product-id')) {
      const id = children.textContent;
      data.id = parseInt(id);
    } else if (children.classList.contains('product-title')) {
      const name = children.textContent;
      data.name = name;
    } else if (children.classList.contains('product-price')) {
      const price = children.textContent;
      data.price = parseFloat(price.replace('$', ''));
    } else if (children.classList.contains('product-image')) {
      const image = children.src;
      data.image = image;
    }
  }

  return data;
};

const addToCart = (event) => {
  const cart = JSON.parse(localStorage.getItem('cart')) || [];
  const parent = event.target.parentNode;
  const str = parent.id;
  const prefix = 'product_card-';
  const numberStr = str.slice(prefix.length);
  const id = parseInt(numberStr);
  const existingProductIndex = cart.findIndex(item => item.id === id);
  
  if (existingProductIndex !== -1) {
    cart[existingProductIndex].quantity += 1;
  } else {
    const product = getProductData(parent);
    console.log(parent);
    product.quantity = 1;
    cart.push(product);
  }
  
  localStorage.setItem('cart', JSON.stringify(cart));
};

const setCategories = (categoriesData) => {
  const categoryCardsContainer = document.getElementById('category-cards');

  categoriesData.forEach((category) => {
      const categoryBtn = document.createElement('button');
      categoryBtn.type = 'button';
      categoryBtn.className = 'block font-medium text-gray-500 dark:text-gray-300 hover:underline';
      categoryBtn.textContent = category.name;
      const card = document.createElement('div');
      card.className = 'category-card';
      card.appendChild(categoryBtn);
      categoryCardsContainer.appendChild(card);
  });
};

const setProducts = (productsData) => {
  const productCardsContainer = document.getElementById('product-cards');
  productsData.forEach((product) => {
      const span = document.createElement('span');
      span.className = 'product-id hidden';
      span.textContent = product.id;

      const img = document.createElement('img');
      img.className = 'product-image object-cover w-full rounded-md h-72 xl:h-80';
      img.src = product.url_img;
      img.alt = product.name;

      const name = document.createElement('h4');
      name.className = 'product-title mt-2 text-lg font-medium text-gray-700 dark:text-gray-200';
      name.textContent = product.name;

      const price = document.createElement('p');
      price.className = 'product-price text-blue-500';
      price.textContent = '$ ' + product.price;

      const button = document.createElement('button');
      button.className = 'flex items-center justify-center w-full px-2 py-2 mt-4 font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-800 rounded-md hover:bg-gray-700 focus:outline-none focus:bg-gray-700';
      button.textContent = 'Add to cart';
      button.addEventListener('click', addToCart);

      const card = document.createElement('div');
      card.id = `product_card-${product.id}`;
      card.className = 'flex flex-col items-center justify-center w-full max-w-lg mx-auto';
      card.appendChild(img);
      card.appendChild(name);
      card.appendChild(price);
      card.appendChild(span);
      card.appendChild(button);

      productCardsContainer.appendChild(card);
  }); 
};


document.addEventListener('DOMContentLoaded', function() {
  setCategories(categories);
  setProducts(products);
});