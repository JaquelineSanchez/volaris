document.querySelector("#formRedo button[name='ofertas']").addEventListener('click', () => {   
    let origen=document.getElementById('origenVuelo1');
      if (origen.value == '0') {
        alert('Selecciona un origen');
        return false;        
      } 
      let destino=document.getElementById('destinoVuelo1')
      if (destino.value == '0') {
        alert('Selecciona un destino');
        return false;
      }
      let salida=document.getElementById('salida1');
      if (salida.value.trim()=='') {
        alert('Selecciona fecha de salida');
        return false;
      } 
      let regreso=document.getElementById('regreso1');
      if (regreso.value.trim()=='') {
        alert('Selecciona fecha de regreso');
        return false;
      }else if(salida.value > regreso.value){
        alert('Selecciona fecha de regreso valida');
        return false;
      }
       else {
        window.open('https://www.volaris.com/flight', '_blank');
      }
  })


  document.querySelector("#formSen button[name='ofertas']").addEventListener('click', () => {   
    let origen=document.getElementById('origenVuelo2');
      if (origen.value == '0') {
        alert('Selecciona un origen');
        return false;        
      } 
      let destino=document.getElementById('destinoVuelo2')
      if (destino.value == '0') {
        alert('Selecciona un destino');
        return false;
      }
      let salida=document.getElementById('salida2');
      if (salida.value.trim()=='') {
        alert('Selecciona fecha de salida');
        return false;
      }
       else {
        window.open('https://www.volaris.com/flight', '_blank');
      }
  })
  
  
