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

const clearItemsNumber = () => {
  const tagItemsNumber = document.getElementById('items-number');
  tagItemsNumber.innerHTML = '';
};

const setNumberOfItems = (data) => {
  const tagItemsNumber = document.getElementById('items-number');
  tagItemsNumber.textContent = `${data.length} Items`;
};

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
    product.quantity = 1;
    cart.push(product);
  }
  
  localStorage.setItem('cart', JSON.stringify(cart));
};

const clearProductsContainer = () => {
  const productCardsContainer = document.getElementById('product-cards');
  return productCardsContainer.innerHTML = '';
}

const getProductsByCategory = ({ target }) => {
  const category = target.textContent;
  if (category === "All") {
    clearProductsContainer();
    clearItemsNumber();
    setNumberOfItems(products);
    return setProducts(products);
  }
  const str = target.id;
  const prefix = 'btn_category-';
  const numberStr = str.slice(prefix.length);
  const id = parseInt(numberStr);
  
  const newProducts = products.filter((product) => product.category_id === id);

  clearProductsContainer();
  clearItemsNumber();
  setNumberOfItems(newProducts);
  setProducts(newProducts);
}

const allCategoriessBtn = document.getElementById('all-categories');
allCategoriessBtn.addEventListener('click', getProductsByCategory);

const setCategories = (categoriesData) => {
  const categoryCardsContainer = document.getElementById('category-cards');

  categoriesData.forEach((category) => {
      const categoryBtn = document.createElement('button');
      categoryBtn.type = 'button';
      categoryBtn.id = `btn_category-${category.id}`;
      categoryBtn.className = 'block font-medium text-gray-500 dark:text-gray-300 hover:underline';
      categoryBtn.textContent = category.name;
      categoryBtn.addEventListener('click', getProductsByCategory);
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
      button.className = 'flex items-center justify-center w-full px-2 py-2 mt-4 font-semibold tracking-wide text-white capitalize transition-colors duration-200 transform bg-orange-500 rounded-md hover:bg-orange-600 focus:outline-none focus:bg-orange-600';
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

const productsSort = ({ target }) => {
  if (target.value !== 'price') return
  products.sort((a, b) =>  a.price - b.price);
  clearProductsContainer();
  setProducts(products);
}

const sortSelect = document.getElementById('options-sort');
sortSelect.addEventListener('change', productsSort);

document.addEventListener('DOMContentLoaded', function() {
  setCategories(categories);
  setProducts(products);
  setNumberOfItems(products);
});