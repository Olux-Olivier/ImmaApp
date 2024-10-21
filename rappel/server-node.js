const axios = require('axios');

const URL = 'http://127.0.0.1:8000/make-call'

const rappelPatient = async()=>{
    try{
        const response = await axios.get(URL)
        console.log('-- request -- send -- ton imma app' , response.data)
    }catch(error){
        console.log("something went wrong ")
    }
}

rappelPatient()
setInterval(rappelPatient, 60000)
