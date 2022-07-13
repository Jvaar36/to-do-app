const Completed = () => {

const axios = require('axios').default;

const Fetch = () => {

axios.get('http://localhost/ToDoApp/done.php')
  .then(function(response) {

    document.getElementById('Done').innerHTML = response.data;

  });

}

return (
  <>

  <div id="window">


  <p>Completed Tasks: </p>
  <br />

  <div id="Done">
    <Fetch />
  </div>


  </div>


  </>
);

};

export default Completed;
