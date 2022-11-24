// npx tailwindcss -i ./src/css/style.css -o ./public/css/style.css  --watch

// --- header ---
const menu = $('#navbar-menu');
const btnMenu = $('#navbar-btn-menu');
const btnClose = $('#navbar-btn-close');
const search = $('#navbar-search');
const btnSearch = $('#navbar-btn-search');

btnMenu.click(function() {
    menu.show();
    search.hide();
    btnMenu.hide();
    btnClose.show();
})

btnClose.click(function() {
    menu.hide();
    btnMenu.show();
    btnClose.hide();
})

btnSearch.click(function() {
    menu.hide();
    search.toggle();
})

// cart
const cart = $('#dropdown-cart');
const btnCart = $('#navbar-btn-cart');
const btnIncrement = $('#increment')
const btnDecrement = $('#decrement')
const counterProduct = $('#counter-product')

btnCart.click(function() {
    cart.toggleClass('hidden');
})

btnIncrement.click(function() {
    let value = parseInt(counterProduct.val())

    counterProduct.val(value + 1)
})

btnDecrement.click(function() {
    let value = parseInt(counterProduct.val())

    if (value > 0) {
        counterProduct.val(value - 1);
    } else {
        counterProduct.val(0);
    }
})

// --- katalog ---

// accordio
const btnAccordion1 = $('#accordion-collapse-heading-1').find('button')
const btnAccordion2 = $('#accordion-collapse-heading-2').find('button')
const btnAccordion3 = $('#accordion-collapse-heading-3').find('button')

const iconAccordion1 = $('#accordion-collapse-heading-1').find('svg')
const iconAccordion2 = $('#accordion-collapse-heading-2').find('svg')
const iconAccordion3 = $('#accordion-collapse-heading-3').find('svg')

const accordion1 = $('#accordion-collapse-body-1')
const accordion2 = $('#accordion-collapse-body-2')
const accordion3 = $('#accordion-collapse-body-3')

btnAccordion1.click(function() {
    accordion1.toggleClass('hidden');
    accordion2.addClass('hidden');
    accordion3.addClass('hidden');

    iconAccordion1.toggleClass('rotate-180');
    iconAccordion2.removeClass('rotate-180');
    iconAccordion3.removeClass('rotate-180');
})
btnAccordion2.click(function() {
    accordion1.addClass('hidden');
    accordion2.toggleClass('hidden');
    accordion3.addClass('hidden');

    iconAccordion1.removeClass('rotate-180');
    iconAccordion2.toggleClass('rotate-180');
    iconAccordion3.removeClass('rotate-180');
})
btnAccordion3.click(function() {
    accordion1.addClass('hidden');
    accordion2.addClass('hidden');
    accordion3.toggleClass('hidden');
    
    iconAccordion1.removeClass('rotate-180');
    iconAccordion2.removeClass('rotate-180');
    iconAccordion3.toggleClass('rotate-180');
})