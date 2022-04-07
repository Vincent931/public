let tab = document.getElementsByClassName('bouton-prefere');


     
     let input = document.getElementById('valid');
     let button = document.getElementById('bouton');

     button.addEventListener("click", function() {
          
          let val = input.value;
          query(val);
          alert('Vous avez ajouté cette annonce dans vos favoris !');
     })


let query = async (val) => {
    return await fetch(`./index.php?action=add-favori&id=${val}`);
}


