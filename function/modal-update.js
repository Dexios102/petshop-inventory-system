
   const openModalButton = document.getElementById('openModalButton');
   const closeModalButton = document.getElementById('closeModalButton');
   const modal = document.getElementById('modal');
   const quantityInput = document.getElementById('quantity');
   const totalPriceText = document.getElementById('totalPrice');
   const orderStatusSelect = document.getElementById('orderStatus');

   const initialData = {
     buyer: 'John Doe',
     productImage: 'product-image.jpg',
     productName: 'Sample Product',
     productPrice: '$50.00',
     quantity: 3,
     totalPrice: '$50.00',
     orderStatus: 'Pending'
   };

   const updateTotalPrice = () => {
     const quantity = parseInt(quantityInput.value);
     const pricePerUnit = 50;
     const total = quantity * pricePerUnit;
     totalPriceText.textContent = `$${total.toFixed(2)}`;
   };

   const updateOrderStatus = () => {
     const selectedStatus = orderStatusSelect.value;
   };

   const openModal = () => {
     modal.classList.remove('hidden');
     document.body.classList.add('modal-active');
     quantityInput.value = initialData.quantity;
     totalPriceText.textContent = initialData.totalPrice;
     orderStatusSelect.value = initialData.orderStatus;
   };

   const closeModal = () => {
     modal.classList.add('hidden');
     document.body.classList.remove('modal-active');
   };

   openModalButton.addEventListener('click', openModal);
   closeModalButton.addEventListener('click', closeModal);
   quantityInput.addEventListener('input', updateTotalPrice);
   orderStatusSelect.addEventListener('change', updateOrderStatus);