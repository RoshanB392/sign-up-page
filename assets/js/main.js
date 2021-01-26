// Navbar Controller
function hideLogout(){
    document.getElementById('logout').style.visibility = 'hidden'; 
}

function hideLogin(){
    document.getElementById('signin').style.visibility = 'hidden';
    document.getElementById('signup').style.visibility = 'hidden'; 
}


// Age Calculator
function calculateAge(date) 
{
  const now = new Date();
  const diff = Math.abs(now - date );
  const age = Math.floor(diff / (1000 * 60 * 60 * 24 * 365)); 
  return age
}

var picker = new Pikaday({ 
  field: document.getElementById('dob') ,
  yearRange:[1900,2021],
  onSelect: function(date) {
  let age = calculateAge(date);
  document.getElementById('age').innerHTML = age;
  }                        
});

