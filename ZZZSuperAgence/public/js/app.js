let arr = [];

fetch("./index.php?action=jsonProduct")
.then(response => response.json())
.then(data => {
    // Convertir les données au format désiré
    for(let i=0;i<data.length;i++){
      arr.push(data[i]);
    }
    
    //console.log(arr);
    
  })
.catch(error => alert("Erreur : " + error));

console.log(arr);