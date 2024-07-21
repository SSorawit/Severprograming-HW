function displayProducts(products, containerId) {
    const container = document.getElementById(containerId);
    container.innerHTML = ''; // ล้างเนื้อหาเก่าออกก่อน

    for (let i = 0; i < products.length; i++) {
        container.innerHTML += products[i].ShowAllProduct();
    }
}

function displayClothes() {
    displayProducts(clothings, 'product-list');
}

function displayElectronics() {
    displayProducts(electronics, 'product-list');
}
