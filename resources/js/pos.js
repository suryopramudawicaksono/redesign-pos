// Fungsi untuk hidden and show cart
document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll(".cart-btn").forEach(function(button) {
        button.addEventListener("click", function() {

            // Hanya mobile (< md)
            if (window.innerWidth >= 768) return;

            const cartHidden = document.getElementById("cartHidden");
            const productHidden = document.getElementById("productHidden");

            if (!cartHidden || !productHidden) return;

            const isCartHidden = cartHidden.classList.contains("hidden");

            cartHidden.classList.toggle("hidden", !isCartHidden);

            if (isCartHidden) {
                productHidden.classList.add("hidden");
            } else {
                productHidden.classList.remove("hidden");
            }
        });
    });

});

// Fungsi untuk tanggal dan waktu
const days = ["Minggu,", "Senin,", "Selasa,", "Rabu,", "Kamis,", "Jumat,", "Sabtu,"];
const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];

const updateDateTime = () => {
    const now = new Date();

    // Mendapatkan nama hari berdasarkan indeks
    const dayName = days[now.getDay()];

    // Format tanggal: 1 Jan 2024
    const day = now.getDate();
    const month = monthNames[now.getMonth()];
    const year = now.getFullYear();
    const formattedDate = `${day} ${month} ${year}`;

    // Mendapatkan waktu dan mengganti titik (.) dengan titik dua (:)
    const time = now.toLocaleTimeString().replace(/\./g, ":");

    const currentDay = document.getElementById("currentDay");
    const currentDate = document.getElementById("currentDate");
    const currentTime = document.getElementById("currentTime");

    if (currentDay) currentDay.textContent = dayName;
    if (currentDate) currentDate.textContent = formattedDate;
    if (currentTime) currentTime.textContent = time;
};

// Update tanggal dan waktu setiap detik
setInterval(updateDateTime, 1000);
updateDateTime();


// Fungsi untuk POS 
document.addEventListener('DOMContentLoaded', function() {
    const cart = [];
    const soundEdit = new Audio('/sound/edit.mp3');
    const soundVoid = new Audio('/sound/void.mp3');

    // JS Untuk update produk ke Keranjang.
    function updateCartDisplay() {
        const cartContainer = document.getElementById('cart');
        const emptyCartMessage = document.getElementById('empty-cart'); // Elemen untuk pesan "Keranjang Kosong"
        const totalPriceElement = document.getElementById('price-total'); // Elemen untuk total harga.
        const totalQtyElement = document.querySelectorAll('.cart-total'); // Elemen untuk total qty.

        cartContainer.innerHTML = ''; // Clear current cart display

        if (cart.length === 0) {
            emptyCartMessage.classList.remove('hidden');
            // Reset total harga dan jumlah qty ke 0
            totalPriceElement.textContent = 'Rp0,00';
            totalQtyElement.forEach((element) => {
                element.textContent = '0';
            });
            return;
        }

        emptyCartMessage.classList.add('hidden');

        // Hitung total harga dan jumlah qty
        let totalPrice = 0;
        let totalQty = 0;

        cart.forEach(item => {
            totalPrice += item.price * item.quantity;
            totalQty += item.quantity;

            const cartItem = document.createElement('div');
            cartItem.classList.add('flex', 'items-center', 'px-2', 'bg-white', 'border',
                'border-gray-300', 'text-gray-800', 'text-sm', 'rounded-lg', 'w-full', 'h-min',
                'dark:bg-gray-700', 'dark:border-gray-600', 'dark:placeholder-gray-400',
                'dark:text-white');
            cartItem.setAttribute('data-id', item.id);

            cartItem.innerHTML = `
                 <div class="w-full p-2">
            <div class="space-y-1">
                <div class="flex justify-between">
                    <p class="text-sm font-semibold truncate">${item.name}</p>
                    <p class="text-sm font-semibold truncate">Total</p>
                </div>
                <div class="flex justify-between items-center text-xs">
                    <div class="flex items-center">
                        <p>
                            <i class="fa-solid fa-inbox me-1"></i> ${item.sku}
                        </p>
                        <div class="flex gap-1">
                            <span class="bg-gray-100 text-gray-800 text-xs font-medium ms-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">
                                ${item.unit}
                            </span>
                        </div>
                    </div>
                    <form class="max-w-xs mx-auto">
                        <div class="relative flex items-center">
                            <button type="button" class="decrement-button shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                                </svg>
                            </button>
                            <input type="text" class="quantity-input p-1 shrink-0 text-gray-900 dark:text-white border-0 bg-transparent text-sm font-normal focus:outline-none focus:ring-0 max-w-10 text-center" value="${item.quantity}" min="1" readonly />
                            <button type="button" class="increment-button shrink-0 bg-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:border-gray-600 hover:bg-gray-200 inline-flex items-center justify-center border border-gray-300 rounded-md h-5 w-5 focus:ring-gray-100 dark:focus:ring-gray-700 focus:ring-2 focus:outline-none">
                                <svg class="w-2.5 h-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                                </svg>
                            </button>
                        </div>
                    </form>
                    <p class="text-sm font-semibold truncate text-blue-800 rounded dark:text-blue-300">Rp${(item.price * item.quantity).toLocaleString('id-ID')},00</p>
                </div>
            </div>
        </div>
        <div class="flex justify-center items-center rounded-full bg-red-200 dark:bg-gray-50 mx-2 p-2 cursor-pointer remove-item">
            <svg class="w-4 h-4 text-red-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
            </svg>
        </div>
            `;
            cartContainer.appendChild(cartItem);
        });

        // Update total harga dan jumlah qty
        totalPriceElement.textContent = `Rp${totalPrice.toLocaleString('id-ID')},00`;
        totalQtyElement.forEach((element) => {
            element.textContent = totalQty;
        });

        // Attach event listeners for increment, decrement, and remove buttons
        attachEventListeners();
    }

    // Attach event listeners to buttons
    function attachEventListeners() {
        document.querySelectorAll('.increment-button').forEach(button => {
            button.addEventListener('click', function() {
                const productElement = this.closest('[data-id]');
                const productId = productElement.getAttribute('data-id');
                const productIndex = cart.findIndex(p => p.id === productId);
                if (productIndex !== -1) {
                    cart[productIndex].quantity += 1;
                    soundEdit.play(); // Mainkan suara edit
                    updateCartDisplay();
                }
            });
        });

        document.querySelectorAll('.decrement-button').forEach(button => {
            button.addEventListener('click', function() {
                const productElement = this.closest('[data-id]');
                const productId = productElement.getAttribute('data-id');
                const productIndex = cart.findIndex(p => p.id === productId);
                if (productIndex !== -1 && cart[productIndex].quantity > 1) {
                    cart[productIndex].quantity -= 1;
                    soundEdit.play(); // Mainkan suara edit
                    updateCartDisplay();
                }
            });
        });

        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function() {
                const productElement = this.closest('[data-id]');
                const productId = productElement.getAttribute('data-id');
                const productIndex = cart.findIndex(p => p.id === productId);
                if (productIndex !== -1) {
                    cart.splice(productIndex, 1); // Remove product from cart
                    soundVoid.play(); // Mainkan suara void
                    updateCartDisplay();
                }
            });
        });

        document.querySelectorAll('.quantity-input').forEach(input => {
            input.addEventListener('change', function() {
                const productElement = this.closest('[data-id]');
                const productId = productElement.getAttribute('data-id');
                const productIndex = cart.findIndex(p => p.id === productId);
                if (productIndex !== -1) {
                    const newQuantity = parseInt(this.value, 10);
                    cart[productIndex].quantity = newQuantity > 0 ? newQuantity :
                        1; // Ensure quantity is at least 1
                    soundEdit.play(); // Mainkan suara edit
                    updateCartDisplay();
                }
            });
        });
    }

    // Handle product div click to add to cart
    document.querySelectorAll('.product-item').forEach(productItem => {
        productItem.addEventListener('click', function() {
            if (event.target.closest('.add-to-cart')) return;

            const product = {
                id: this.getAttribute('data-id'),
                name: this.getAttribute('data-name'),
                price: parseFloat(this.getAttribute('data-price')),
                image: this.getAttribute('data-image'),
                sku: this.getAttribute('data-sku'),
                unit: this.getAttribute('data-unit'),
                quantity: 1
            };

            const existingProductIndex = cart.findIndex(p => p.id === product.id);
            if (existingProductIndex !== -1) {
                cart[existingProductIndex].quantity += 1;
            } else {
                cart.push(product);
            }

            soundEdit.play(); // Mainkan suara edit
            updateCartDisplay();
        });
    });
});

// JS Fullscreen
document.addEventListener("DOMContentLoaded", () => {
    const fullscreenButton = document.getElementById("fullscreenButton");
    const fullscreenIcon = document.getElementById("fullscreenIcon");
    const exitFullscreenIcon = document.getElementById("exitFullscreenIcon");

    if (!fullscreenButton || !fullscreenIcon || !exitFullscreenIcon) return;

    fullscreenButton.addEventListener("click", async () => {
        try {
            if (!document.fullscreenElement) {
                await document.documentElement.requestFullscreen();
            } else {
                await document.exitFullscreen();
            }
        } catch (err) {
            console.error(err);
        }
    });

    document.addEventListener("fullscreenchange", () => {
        const isFullscreen = !!document.fullscreenElement;

        fullscreenIcon.classList.toggle("hidden", isFullscreen);
        exitFullscreenIcon.classList.toggle("hidden", !isFullscreen);
    });
});

// Fungsi Untuk Discount
function initDiscount() {
    const percentInput = document.getElementById("discountPercent");
    const amountInput = document.getElementById("discountAmount");

    if (!percentInput || !amountInput) return;

    const subtotal = 150000;

    percentInput.addEventListener("input", () => {
        const percent = parseFloat(percentInput.value) || 0;
        amountInput.value = Math.round(subtotal * percent / 100);
    });

    amountInput.addEventListener("input", () => {
        const amount = parseFloat(amountInput.value) || 0;
        percentInput.value = (amount / subtotal * 100).toFixed(2);
    });
}

document.addEventListener("DOMContentLoaded", initDiscount);