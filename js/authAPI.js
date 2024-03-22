   /* PROPETIES REQUEST-API http://10.3.15.200:8002/auth/login/
   
   id: 'retrieve number id of user on API (type: number)'
   access: 'retrieve token for validation in each request (type: string)'
   is_admin: 'retrieve if is admin (type: bolean)'
   nome: 'retrieve name of user (type: string)'
   perfil: 'retrieve perfil of user (type: string) ex: administrador / usuario'
   refresh: 'retrieve token for update token access before expirate'
   sobrenome: 'retrieve lastname of usuer'
      
   SCRIPT WORKING!!! DON'T DELETE >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>*/ 
      
    $(document).ready(function(){
      $("#acao").click(function() {
      
         const user = document.getElementById('usuario').value
         const password = document.getElementById('senha').value
                       
         const jsonUser = {'username': user , password };
         const usuario =  JSON.stringify(jsonUser)
         fetch('http://10.3.15.200:8002/auth/login/', { 
         method: 'POST', 
         headers: {'Content-Type': 'application/json'},
         body: usuario
         })
         .then(res=> res.json())
         .then(data=> 
         
         (document.getElementById('nome').value =        data.nome) +
         (document.getElementById('access').value =      data.access) +
         (document.getElementById('sobrenome').value =   data.sobrenome)+
         (document.getElementById('perfil').value =      data.perfil) 
         
                

         )  
     
   })   

})    
