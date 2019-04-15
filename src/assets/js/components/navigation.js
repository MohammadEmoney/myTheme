import $ from 'jquery';

$('.navbar').on('mouseenter', '.menu-item-has-children', (e) => {
    $(e.currentTarget).addClass('open');
});

$('.navbar').on('mouseleave', '.menu-item-has-children', (e) => {
    $(e.currentTarget).removeClass('open');
})