document.getElementById('viewUsers').addEventListener('click', function(){
  const x = new XMLHttpRequest();
  x.onload = function(){

    const res = JSON.parse(this.responseText)
    var tableResult = ''
    for(let i=0; i<res.result.length; i++){
      tableResult += `
        <tr>
          <td>${res.result[i].user_id}</td>
          <td>${res.result[i].first_name}</td>
          <td>${res.result[i].last_name}</td>
          <td>
            <div>
              <button type="button" id=${res.result[i].user_id} class="btn primary edit-user">Edit</button>
              <button type="button" id=${res.result[i].user_id} class="btn danger delete-user">Delete</button>
            </div>
          </td>
        </tr>
      `
    }

    document.getElementById('tbodyResult').innerHTML = tableResult

    editUserMethod()
  }
  x.open("GET","./controller/ReadController.php?readUsers");
  x.send();

})


document.getElementById('createForm').addEventListener('submit', function (e) {
 e.preventDefault()
 
 const firstName = document.getElementById('createFirstName').value.trim()
 const lastName = document.getElementById('createLastName').value.trim()


 if(firstName === "" || lastName === ""){
  alert("All fields are required.")
 } else if (firstName === ""){
  alert("First name field is required.")
  
 } else if (lastName === ""){
  alert("Last name field is required.")
 } else{

  const x = new XMLHttpRequest();
  x.onload = function(){

    if(this.responseText === 'success'){
      alert("Successfully Added.")
        location.reload()
    } else{
      alert('Something went wrong.');
    }

  }
  x.open("GET","./controller/CreateController.php?firstName="+encodeURIComponent(firstName)+"&lastName="+encodeURIComponent(lastName));
  x.send();

  
 }
})

function editUserMethod(){

  const editUser = document.querySelectorAll(".edit-user");

 for (let i = 0; i < editUser.length; i++) {
     editUser[i].addEventListener("click", function() {
       location.href = `?action=edit&id=${editUser[i].getAttribute('id')}`

       const x = new XMLHttpRequest();
       x.onload = function(){
     
         if(this.responseText === 'success'){
           alert("Successfully Updated.")
             location.reload()
         } else{
           alert('Something went wrong.');
         }
     
       }
       x.open("GET","./controller/UpdateController.php?firstName="+encodeURIComponent(firstName)+"&lastName="+encodeURIComponent(lastName));
       x.send();
     
     });
 }

}

