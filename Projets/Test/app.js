//ress in https://www.pierre-giraud.com/javascript-apprendre-coder-cours/api-fetch/ 
//and in https://smnarnold.com/cours/javascript/fetch

let arr = [];

fetch("./API.php")
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