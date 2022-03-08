import { dateDiffInDays, deleteCardIf } from '../utilities/utilities.js';

async function showUser(data){
    
   document.querySelector('.result').innerHTML = `${data.login} <p><img src="${data.avatar_url}"/></p>`;
}

export default showUser;
