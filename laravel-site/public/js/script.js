if (window.location.href.includes("/admin/dashboard")) {
    const button = document.querySelector('#view-products');
    button.classList.add('active');
}

if (window.location.href.includes("/admin/create")) {
    const button = document.querySelector('#create-product');
    button.classList.add('active');
}

if (window.location.href.includes("/admin/users")) {
    const button = document.querySelector('#view-users');
    button.classList.add('active');
}

if (window.location.href.includes("/admin/orders")) {
    const button = document.querySelector('#view-orders');
    button.classList.add('active');
}