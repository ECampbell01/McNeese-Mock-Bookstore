/*
Javascript file for the cart
Author: Jett Rogers
Created On: 3/28/2024
*/

let openShopping = document.querySelector('.cart-button')
let closeShopping = document.querySelector('.closeCart')
let list = document.querySelector('.list')
let listCart = document.querySelector('.cartList')
let body = document.querySelector('.body')
let total = document.querySelector('.total')
let quantity = document.querySelector('.quantity')

openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})

closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
})

let itemList = [];
function addToCart(key){
    if(itemList[key] == null){
        itemList[key] = 
        itemList[key].quantity = 1 
    }
    reloadCard();
}

function reloadCard(){
    
}