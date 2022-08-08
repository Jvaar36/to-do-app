import React from 'react';
import ReactDOM from 'react-dom';

const Enter = () => {

const axios = require('axios').default;

axios.get('http://localhost/ToDoApp/read.php')
  .then(function(response) {

    document.getElementById('window').innerHTML = response.data;

  });


  const submit = () => {

    const date = document.getElementById('date').value;
    const task = document.getElementById('task').value;

    if (date == "" || task == "") {
      alert('Please enter information');
    }

    else {
      const params = new URLSearchParams();
      params.append('date', date);
      params.append('task', task);

      axios({
        method: 'POST',
        url: 'http://localhost/ToDoApp/submit.php',
        mode: 'no-cors',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        data: params
      });

      //window.location.assign('http://localhost:3000');

      ReactDOM.render(<Enter />, document.getElementById('box'));

      document.getElementById('date').value = "";

      document.getElementById('task').value = "";

    }

  }

return (
  <>

  <table>
    <tr><td>
  <p>1. Enter exp. date: </p></td><td>
  <input type="text" id="date" />
</td></tr>

<tr><td>

  <p>2. Enter task: </p></td><td>
  <input type="text" id="task" />
  </td></tr>

</table>

<button className="button" onClick={submit}>Submit</button>

<hr />

<div id="window">


</div>


  </>
);

};

export default Enter;
