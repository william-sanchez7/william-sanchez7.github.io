<?php include("includes/header.php");
?> 

</header>
<main>
    <section class="section featured">
        <!-- TITULO -->
        <div class="title">
            <h1>Carrito de compras</h1>
        </div>
        <!-- BOTON PARA VOLVER A LA PAGINA DE LOS PRODUCTOS -->
        <button class="back-shop">
            <a href="index.php#product"><i class='bx bx-arrow-back' ></i></a>
        </button>
        <!-- MUESTRA LOS PRODUCTOS GUARDADOS EN LA VARIABLE DE SESION -->
        <div>

            
                        <div>
                            <table>
                                <thead class="table-top">
                                    <!-- ENCABEZADO DE LA TABLA DEL CARRITO-->
                                    <tr>
                                        <td data-titulo="producto" class="top">Producto</td>
                                        <td data-titulo="cantidad" class="top">Cantidad</td>
                                        <td data-titulo="precio" class="top">Precio c/u</td>
                                        <td data-titulo="total" class="top">Total</td>
                                        <td data-titulo="accion" class="top">--</td>
                                    </tr>
                                </thead>

                                
                                <tbody class="item-contenedor">
                                    <!-- CICLO PARA MOSTRAR LOS PRODUCTOS GUARDADOS EN LA VARIABLE DE SESION -->
                                    <tr>
                                        <td data-titulo="Producto:"></td>
                                        <td data-titulo="Cantidad:"></td>
                                        <td data-titulo="Precio:"></td>
                                        <td data-titulo="Total:"></td>
                                        <td> 
                                            <form action="" method="POST">
                                                <input type="hidden" name="id" id="id" value="">
                                               
                                                <button class="btn-delete" type="submit" name="btnAccion" 
                                                value="Eliminar"><i class='bx bxs-tag-x' ></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- HACE LA SUMA TOTAL DE TODOS LOS PRODUCTOS -->
                                    
                                    <tr>
                                        <td colspan="3" align="right">Total</td>
                                        <td>$</td>
                                    </tr>
                                </tbody>


                            </table>
                            <!-- BOTÓN PARA VALIDAR LA COMPRA -->
                            <div class="container-purchase">
                                <a href="#">
                               <button class="validate-purchase" type="submit">Validar compra</button>
                               </a>     
                            </div>
                        </div>
        </div>
               
             
            
            
    </section>
</main>
<?php include("includes/footer.php");  ?>