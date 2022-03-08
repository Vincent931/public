
async function getUser(username) {
    
     let url = 'https://api.github.com/users/' + username;

        let response = await fetch(url);
        
        if(response.ok){
           
            return await response.json();
            
        }
}

export default getUser;

