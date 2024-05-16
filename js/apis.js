document.addEventListener("DOMContentLoaded", function() {


    GetFotos=() => {
        fetch('https://jsonplaceholder.typicode.com/photos')
    .then(response => response.json())
    .then(data => {
      console.log(data);
      const datos=data;
      const tablaCuerpo = document.getElementById("tabla-cuerpo");

      // Función para crear la tabla con los datos
     
          datos.forEach((dato) => {
              const fila = document.createElement("tr");
              fila.innerHTML = `
                <td>
                    <img style="border-radius: 50%; width: 25%;" src="${dato.url}" alt="">
                </td>
                <td>${dato.title}</td>
                <td>${dato.url}</td>
                
                <td>
                <button type="button" class="btn btn-primary" style="border-radius: 10px; width: 80%; margin:5px" >Editar</button>
                <button type="button" class="btn btn-danger" style="border-radius: 10px; width: 80%; margin:5px">Eliminar</button>
                </td>
              `;
              tablaCuerpo.appendChild(fila);
          });
      
    })
    .then(users => {
      console.log(users);
    })
    .catch(error => {
      console.error('There was a problem with the fetch operation:', error);
    });
    }
    

    
});


    