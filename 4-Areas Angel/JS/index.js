
window.addEventListener('DOMContentLoaded',() =>{

    const seleccionFigura = document.getElementById('seleccion-figura');
    const botonCalcular = document.getElementById('boton-calcular');
    const contenedor = document.getElementById('imagen-figura');
    const mostrarArea = document.getElementById('mostrar');

    // evento para el botón "Calcular"
    botonCalcular.addEventListener('click', function(event){
        event.preventDefault();// Evitar recarga de la página

         // obtenemos los valores de base y altura
         let altura = document.getElementById('altura').value;
         let base = document.getElementById('base').value;
         let figura = seleccionFigura.value;

        // validación simple de que se haya seleccionado una figura y los datos ingresados
        if (!figura || base === "" || altura === "") {
            alert("Por favor, selecciona una figura y completa los valores de base y altura.");
            return;
        }

         // limpiamos los contenedores
         contenedor.innerHTML = '';
        mostrarArea.innerHTML = '';

         // datos que vamos a enviar para el fetch
         const dataLado = {
            altura,
            base
        };
        

         // visualizar la figura seleccionada y realizar el cálculo
         let imagen = document.createElement('img');

         if (figura === 'cuadrado') {
            imagen.src = 'Img/cuadrado.jpg';
            imagen.style.height = '160px';
            contenedor.appendChild(imagen);
            
            // hacer la solicitud fetch para calcular el área del cuadrado
            fetch('PHP/register.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(dataLado)
            })
            .then(response => response.json())
            .then (data => {
              
                mostrarArea.innerHTML = `<div class="col-12">Área del cuadrado: ${data.cuadrado}</div>`;
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarArea.innerHTML = `<div class="col-12">Error al calcular el área</div>`;
            });

        } else if (figura === 'triangulo') {
            imagen.src = 'Img/triangulo.png';
            imagen.style.height = '120px';
            contenedor.appendChild(imagen);

            // hacer la solicitud fetch para calcular el área del triángulo
            fetch('PHP/register.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(dataLado)
            })
            .then(response => response.json())
            .then(data => {
                mostrarArea.innerHTML = `<div class="col-12">Área del triángulo: ${data.triangulo}</div>`;
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarArea.innerHTML = `<div class="col-12">Error al calcular el área</div>`;
            });

        } else if (figura === 'rectangulo') {
            imagen.src = 'Img/rectangulo.jpg';
            imagen.style.height = '150px';
            contenedor.appendChild(imagen);

            // hacer la solicitud fetch para calcular el área del rectángulo
            fetch('PHP/register.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(dataLado)
            })
            .then(response => response.json())
            .then(data => {
                mostrarArea.innerHTML = `<div class="col-12">Área del rectángulo: ${data.rectangulo}</div>`;
            })
            .catch(error => {
                console.error('Error:', error);
                mostrarArea.innerHTML = `<div class="col-12">Error al calcular el área</div>`;
            });
        }




    })


})