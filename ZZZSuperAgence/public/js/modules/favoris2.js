function favoris2(){

     let tab2 = document.getElementsByClassName('bouton-prefere2');
     
     
          
          let input2 = document.getElementById('valid');
          let button2 = document.getElementById('bouton');
     
          button2.addEventListener("click", function() {
               
               let val2 = input2.value;
               query2(val2);
               alert('Vous avez ajouté cette annonce dans vos favoris !');
          })
     
     let query2 = async (val2) => {
         return await fetch(`./index.php?action=add-favori&id=${val2}`);
     }

}
export default favoris2;