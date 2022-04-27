const añadirProductoAlCarrito = document.querySelectorAll('.product-center');

añadirProductoAlCarrito.forEach(addToCartButton => {
    addToCartButton.addEventListener('click', addToCArtClicked);
});

const itemContenedor = document.querySelector('.item-contenedor');

function addToCArtClicked(event){
    const button = event.target;
    const item = button.closest('.product-header');
    
    const itemTitle = item.querySelector('.item-title').textContent;//nombre del producto
    const itemPrice = item.querySelector('.price').textContent;
    const itemImage = item.querySelector('.item-image').src;
    const itemId = item.querySelector('.item-id').value;

    añadirAComprar(itemTitle, itemPrice, itemImage);
 }

 function añadirAComprar(itemTitle, itemPrice, itemImage){
    
    const filaProducto = document.createElement('tr');
    const contenido = `
    
            <td data-titulo="Imagen:">${itemImage}</td> 
            <td data-titulo="Producto:">${itemTitle}</td>
            <td data-titulo="Cantidad:"></td>
            <td data-titulo="Precio:">${itemPrice}</td>
            <td data-titulo="Total:"></td>
            <td> 
                <form action="" method="POST">
                    <input type="hidden" name="id" id="id" value="">
                    <button class="btn-delete" type="submit" name="btnAccion" 
                    value="Eliminar"><i class='bx bxs-tag-x' ></i>
                    </button>
                </form>
            </td>
    
    `;
    filaProducto.innerHTML = contenido;
    itemContenedor.append(filaProducto);
    
 }